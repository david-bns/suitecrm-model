<?php

namespace App\Extension\demo\Tests\Unit;

use RuntimeException;

final class SeedContextTest extends DemoTestCase
{
    public function testOneReturnsAnItemOfTheList(): void
    {
        $items = ['a', 'b', 'c'];

        for ($i = 0; $i < 20; $i++) {
            self::assertContains($this->context($i)->one($items), $items);
        }
    }

    public function testSameSeedGivesSameDraws(): void
    {
        $items = range(1, 100);
        $draw = static fn (int $seed, DemoTestCase $test): array => [
            $test->context($seed)->one($items),
            $test->context($seed)->some($items, 5),
        ];

        self::assertSame($draw(42, $this), $draw(42, $this));
        self::assertNotSame($draw(42, $this), $draw(43, $this));
    }

    public function testSomeReturnsDistinctItemsFromTheList(): void
    {
        $items = range(1, 10);
        $picked = $this->context()->some($items, 4);

        self::assertCount(4, $picked);
        self::assertSame($picked, array_values(array_unique($picked)));
        self::assertSame([], array_diff($picked, $items));
    }

    public function testSomeNeverReturnsMoreThanAvailable(): void
    {
        self::assertCount(3, $this->context()->some(['a', 'b', 'c'], 10));
        self::assertSame([], $this->context()->some(['a', 'b'], 0));
    }

    public function testPickReturnsANonEmptyDropdownKey(): void
    {
        for ($i = 0; $i < 20; $i++) {
            self::assertContains($this->context($i)->pick('lead_status_dom'), ['New', 'Converted']);
        }
    }

    public function testPickFailsOnAMissingList(): void
    {
        $this->expectException(RuntimeException::class);
        $this->expectExceptionMessage('"unknown_dom"');

        $this->context()->pick('unknown_dom');
    }

    public function testRandomUserFailsWithoutUsers(): void
    {
        $this->expectException(RuntimeException::class);

        $this->context()->randomUser();
    }

    public function testFakeReachesLocaleFormatters(): void
    {
        self::assertMatchesRegularExpression('/^\d{3} \d{3} \d{3} \d{5}$/', $this->context()->fake('siret'));
    }
}
