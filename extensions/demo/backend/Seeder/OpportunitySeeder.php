<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Factory\OpportunityFactory;
use App\Extension\demo\backend\Service\SeedContext;

/**
 * Zero to three opportunities per account, linked to some of its contacts.
 */
class OpportunitySeeder implements SeederInterface
{
    public function __construct(private readonly OpportunityFactory $opportunities)
    {
    }

    public function run(SeedContext $context): void
    {
        $faker = $context->faker;

        foreach ($context->accounts as ['account' => $account, 'contacts' => $contacts]) {
            $accountName = SeedContext::field($account, 'name');

            for ($i = 0, $n = $faker->numberBetween(0, 3); $i < $n; $i++) {
                $fields = $this->opportunities->make($context, [
                    'assigned_user_id' => SeedContext::field($account, 'assigned_user_id'),
                ]);
                $project = is_string($fields['name'] ?? null) ? $fields['name'] : '';
                // opportunities.name is 50 characters long
                $fields['name'] = mb_strimwidth($project . ' – ' . $accountName, 0, 50, '…');

                $opportunity = $context->create('Opportunities', $fields);
                $context->link($opportunity, 'accounts', [SeedContext::id($account)]);
                $context->link($opportunity, 'contacts', SeedContext::ids(
                    $context->some($contacts, $faker->numberBetween(1, count($contacts)))
                ));
            }
        }
    }
}
