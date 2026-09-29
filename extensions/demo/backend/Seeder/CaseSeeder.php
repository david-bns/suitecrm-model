<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Factory\CaseFactory;
use App\Extension\demo\backend\Service\SeedContext;

/**
 * Zero to two support cases per account, opened by one of its contacts.
 */
class CaseSeeder implements SeederInterface
{
    public function __construct(private readonly CaseFactory $cases)
    {
    }

    public function run(SeedContext $context): void
    {
        $faker = $context->faker;

        foreach ($context->accounts as ['account' => $account, 'contacts' => $contacts]) {
            for ($i = 0, $n = $faker->numberBetween(0, 2); $i < $n; $i++) {
                $case = $context->create('Cases', $this->cases->make($context, [
                    'account_id' => $account->id,
                    'assigned_user_id' => $context->randomUser()->id,
                ]));
                $context->link($case, 'contacts', [$faker->randomElement($contacts)->id]);
            }
        }
    }
}
