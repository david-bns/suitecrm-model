<?php

namespace App\Extension\demo\Tests\Unit;

use App\Extension\demo\backend\Service\DemoRecordTracker;
use App\Extension\demo\backend\Service\SeedContext;
use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\Attributes\BackupGlobals;
use PHPUnit\Framework\TestCase;

/**
 * Seeding without database nor legacy: a seeded Faker, a stub tracker, and
 * the legacy globals the code reads, restored after each test.
 */
#[BackupGlobals(true)]
abstract class DemoTestCase extends TestCase
{
    protected function setUp(): void
    {
        $GLOBALS['app_list_strings'] = [
            'sales_stage_dom' => ['Prospecting' => 'Prospection', 'Closed Won' => 'Gagnée', 'Closed Lost' => 'Perdue'],
            'sales_probability_dom' => ['Prospecting' => '10', 'Closed Won' => '100', 'Closed Lost' => '0'],
            'case_status_dom' => ['Open_New' => 'Nouveau', 'Closed_Closed' => 'Fermé'],
            'case_priority_dom' => ['P1' => 'Haute', 'P2' => 'Moyenne'],
            'case_type_dom' => ['User' => 'Utilisateur'],
            'lead_status_dom' => ['' => '', 'New' => 'Nouveau', 'Converted' => 'Converti'],
            'lead_source_dom' => ['' => '', 'Web Site' => 'Site web'],
            'opportunity_type_dom' => ['' => '', 'New Business' => 'Nouvelle affaire'],
        ];
    }

    /**
     * Adds or replaces one dropdown list in the legacy globals.
     *
     * @param array<int|string, string> $options
     */
    protected static function setDropdown(string $list, array $options): void
    {
        $lists = $GLOBALS['app_list_strings'] ?? [];
        $lists = is_array($lists) ? $lists : [];
        $lists[$list] = $options;
        $GLOBALS['app_list_strings'] = $lists;
    }

    /**
     * Reads $GLOBALS['sugar_config'] through a call, so PHPStan does not reuse
     * the value last written by the test: the code under test changes it.
     */
    protected static function sugarConfig(): mixed
    {
        return $GLOBALS['sugar_config'] ?? null;
    }

    /**
     * One Faker for all tests, reseeded each time: every instance loads a whole
     * book for realText(), which quickly exhausts memory.
     */
    private static ?Generator $faker = null;

    /**
     * @param array{users?: int, accounts?: int, leads?: int} $options
     */
    protected function context(int $seed = 2026, array $options = []): SeedContext
    {
        $faker = self::$faker ??= Factory::create('fr_FR');
        $faker->seed($seed);

        return new SeedContext(
            $faker,
            $options + ['users' => 1, 'accounts' => 1, 'leads' => 1],
            $this->createStub(DemoRecordTracker::class)
        );
    }
}
