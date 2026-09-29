<?php

namespace App\Extension\demo\Tests\Unit;

use App\Extension\demo\backend\Factory\DateHelper;
use App\Extension\demo\backend\Factory\FrenchCities;
use DateTimeImmutable;
use PHPUnit\Framework\Attributes\DataProvider;

final class DateHelperTest extends DemoTestCase
{
    /**
     * @return iterable<string, array{string, string}>
     */
    public static function slugs(): iterable
    {
        yield 'accents' => ['Émilie Lefèvre', 'emilie-lefevre'];
        yield 'punctuation' => ['  Martin & Fils S.A. ', 'martin-fils-s-a'];
        yield 'apostrophe' => ["L'Oréal", 'l-oreal'];
    }

    #[DataProvider('slugs')]
    public function testSlug(string $value, string $expected): void
    {
        self::assertSame($expected, DateHelper::slug($value));
    }

    public function testDatesAreStoredInUtc(): void
    {
        $paris = new DateTimeImmutable('2026-07-14 10:30:00', new \DateTimeZone('Europe/Paris'));

        self::assertSame('2026-07-14 08:30:00', DateHelper::dateTime($paris));
        self::assertSame('2026-07-14', DateHelper::date($paris));
    }

    public function testOfficeHoursAreOnAQuarterHour(): void
    {
        $faker = $this->context()->faker;
        $date = new DateTimeImmutable('2026-07-14 03:12:00', new \DateTimeZone('UTC'));

        for ($i = 0; $i < 20; $i++) {
            self::assertMatchesRegularExpression('/^2026-07-14 09:(00|15|30|45):00$/', DateHelper::officeHours($faker, $date, 9));
        }
    }

    public function testCitiesHaveAPostcodeAndPrefixedFields(): void
    {
        $address = FrenchCities::address($this->context()->faker, 'billing_address');

        self::assertSame(
            ['billing_address_street', 'billing_address_postalcode', 'billing_address_city', 'billing_address_country'],
            array_keys($address)
        );
        self::assertMatchesRegularExpression('/^\d{5}$/', $address['billing_address_postalcode']);
        self::assertSame('France', $address['billing_address_country']);
    }
}
