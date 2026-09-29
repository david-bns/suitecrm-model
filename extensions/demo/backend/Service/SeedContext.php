<?php

namespace App\Extension\demo\backend\Service;

use BeanFactory;
use Faker\Generator;
use Link2;
use RuntimeException;
use SugarBean;

/**
 * State shared by the seeders of one run: Faker, the options, the records
 * created so far, and typed helpers over beans and Faker, whose values are
 * mixed otherwise.
 */
class SeedContext
{
    /** @var list<SugarBean> */
    public array $users = [];

    /** @var list<array{account: SugarBean, contacts: non-empty-list<SugarBean>}> */
    public array $accounts = [];

    /** @var array<string, int> records created per module */
    public array $created = [];

    /**
     * @param array{users: int, accounts: int, leads: int} $options
     */
    public function __construct(
        public readonly Generator $faker,
        public readonly array $options,
        private readonly DemoRecordTracker $tracker
    ) {
    }

    /**
     * @param array<string, mixed> $fields
     */
    public function create(string $module, array $fields): SugarBean
    {
        $bean = BeanFactory::newBean($module);
        if (!$bean instanceof SugarBean) {
            throw new RuntimeException(sprintf('Unknown module "%s".', $module));
        }

        foreach ($fields as $name => $value) {
            $bean->$name = $value;
        }

        $bean->save(false);

        $this->tracker->track($module, self::id($bean));
        $this->created[$module] = ($this->created[$module] ?? 0) + 1;

        return $bean;
    }

    /**
     * @param list<string> $ids
     */
    public function link(SugarBean $bean, string $link, array $ids): void
    {
        if ($ids === []) {
            return;
        }

        if (!$bean->load_relationship($link) || !$bean->$link instanceof Link2) {
            throw new RuntimeException(sprintf('No "%s" relationship on %s.', $link, $bean->module_dir));
        }

        $bean->$link->add($ids);
    }

    public static function id(SugarBean $bean): string
    {
        return self::string($bean->id, 'id');
    }

    /**
     * @param list<SugarBean> $beans
     * @return list<string>
     */
    public static function ids(array $beans): array
    {
        return array_map(self::id(...), $beans);
    }

    /**
     * A bean field that must hold text (name, email1, assigned_user_id...).
     */
    public static function field(SugarBean $bean, string $name): string
    {
        return self::string($bean->$name, $name);
    }

    /**
     * Output of a Faker formatter that is not declared on Generator, such as
     * the fr_FR siret() or mobileNumber().
     */
    public function fake(string $formatter): string
    {
        return self::string($this->faker->format($formatter), $formatter);
    }

    /**
     * One random item. Faker's randomElement() returns mixed: this keeps the type.
     *
     * @template T
     * @param non-empty-array<T> $items
     * @return T
     */
    public function one(array $items): mixed
    {
        $values = array_values($items);

        return $values[$this->faker->numberBetween(0, count($values) - 1)];
    }

    /**
     * $count distinct random items, in random order.
     *
     * @template T
     * @param array<T> $items
     * @return list<T>
     */
    public function some(array $items, int $count): array
    {
        $values = array_values($items);

        // Fisher-Yates with Faker, so the --seed option still reproduces the data
        for ($i = count($values) - 1; $i > 0; $i--) {
            $j = $this->faker->numberBetween(0, $i);
            [$values[$i], $values[$j]] = [$values[$j], $values[$i]];
        }

        return array_slice($values, 0, max(0, $count));
    }

    /**
     * A random valid key of a dropdown list.
     */
    public function pick(string $list): string
    {
        $keys = LegacyGlobals::dropdownKeys($list);
        if ($keys === []) {
            throw new RuntimeException(sprintf('Dropdown list "%s" is empty or missing.', $list));
        }

        return $this->one($keys);
    }

    public function randomUser(): SugarBean
    {
        if ($this->users === []) {
            throw new RuntimeException('No user to assign records to: run UserSeeder first.');
        }

        return $this->one($this->users);
    }

    private static function string(mixed $value, string $what): string
    {
        if (!is_string($value)) {
            throw new RuntimeException(sprintf('Expected text for "%s", got %s.', $what, get_debug_type($value)));
        }

        return $value;
    }
}
