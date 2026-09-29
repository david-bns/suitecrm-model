<?php

namespace App\Extension\demo\backend\Service;

use BeanFactory;
use Faker\Generator;
use SugarBean;

/**
 * State shared by the seeders of one run: Faker, the options, the records
 * created so far, and helpers to save and link beans.
 */
class SeedContext
{
    /** @var SugarBean[] */
    public array $users = [];

    /** @var array<int, array{account: SugarBean, contacts: SugarBean[]}> */
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

        foreach ($fields as $name => $value) {
            $bean->$name = $value;
        }

        $bean->save(false);

        $this->tracker->track($module, $bean->id);
        $this->created[$module] = ($this->created[$module] ?? 0) + 1;

        return $bean;
    }

    /**
     * @param string[] $ids
     */
    public function link(SugarBean $bean, string $link, array $ids): void
    {
        if ($ids === [] || !$bean->load_relationship($link)) {
            return;
        }

        $bean->$link->add($ids);
    }

    /**
     * Keys of a dropdown list, empty option excluded, so values are always valid.
     *
     * @return string[]
     */
    public function options(string $list): array
    {
        global $app_list_strings;

        $keys = array_map('strval', array_keys($app_list_strings[$list] ?? []));

        return array_values(array_filter($keys, static fn (string $key) => $key !== ''));
    }

    public function pick(string $list): string
    {
        return $this->faker->randomElement($this->options($list));
    }

    public function randomUser(): SugarBean
    {
        return $this->faker->randomElement($this->users);
    }
}
