<?php

namespace App\Extension\demo\Tests\Unit;

use App\Extension\demo\backend\Factory\CaseFactory;
use App\Extension\demo\backend\Factory\ContactFactory;
use App\Extension\demo\backend\Factory\LeadFactory;
use App\Extension\demo\backend\Factory\OpportunityFactory;

final class FactoryTest extends DemoTestCase
{
    public function testAttributesOverrideDefaults(): void
    {
        $fields = (new CaseFactory())->make($this->context(), ['name' => 'Sujet imposé', 'extra' => 1]);

        self::assertSame('Sujet imposé', $fields['name']);
        self::assertSame(1, $fields['extra']);
    }

    public function testOpportunityStageDrivesProbabilityAndCloseDate(): void
    {
        for ($seed = 0; $seed < 30; $seed++) {
            $fields = (new OpportunityFactory())->make($this->context($seed));
            $stage = $fields['sales_stage'];
            self::assertIsString($stage);

            $expected = ['Prospecting' => 10, 'Closed Won' => 100, 'Closed Lost' => 0];
            self::assertArrayHasKey($stage, $expected);
            self::assertSame($expected[$stage], $fields['probability']);

            $closed = str_starts_with($stage, 'Closed');
            self::assertSame($closed, $fields['date_closed'] < gmdate('Y-m-d'), 'closed in the past, open in the future');
        }
    }

    public function testCaseStateMatchesItsStatus(): void
    {
        for ($seed = 0; $seed < 30; $seed++) {
            $fields = (new CaseFactory())->make($this->context($seed));
            self::assertIsString($fields['state']);
            self::assertIsString($fields['status']);

            self::assertStringStartsWith($fields['state'] . '_', $fields['status']);
        }
    }

    public function testContactEmailUsesNamesAndGivenDomain(): void
    {
        $fields = (new ContactFactory())->make($this->context(), [
            '_domain' => 'dupont.example',
            'first_name' => 'Émilie',
            'last_name' => 'Lefèvre',
        ]);

        self::assertArrayNotHasKey('_domain', $fields);
        self::assertIsString($fields['email1']);
        self::assertStringEndsWith('@dupont.example', $fields['email1']);
    }

    public function testLeadsAreNeverConverted(): void
    {
        for ($seed = 0; $seed < 30; $seed++) {
            self::assertSame('New', (new LeadFactory())->make($this->context($seed))['status']);
        }
    }
}
