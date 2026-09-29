<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Factory\AccountFactory;
use App\Extension\demo\backend\Factory\ContactFactory;
use App\Extension\demo\backend\Service\SeedContext;

/**
 * Accounts, each with one to four contacts.
 */
class AccountSeeder implements SeederInterface
{
    public function __construct(
        private readonly AccountFactory $accounts,
        private readonly ContactFactory $contacts
    ) {
    }

    public function run(SeedContext $context): void
    {
        for ($i = 0; $i < $context->options['accounts']; $i++) {
            $owner = $context->randomUser();
            $account = $context->create('Accounts', $this->accounts->make($context, [
                'assigned_user_id' => $owner->id,
            ]));

            $domain = substr(strrchr($account->email1, '@'), 1);
            $contacts = [];
            for ($j = 0, $n = $context->faker->numberBetween(1, 4); $j < $n; $j++) {
                $contacts[] = $context->create('Contacts', $this->contacts->make($context, [
                    '_domain' => $domain,
                    'assigned_user_id' => $owner->id,
                ]));
            }

            $context->link($account, 'contacts', array_map(static fn ($c) => $c->id, $contacts));
            $context->accounts[] = ['account' => $account, 'contacts' => $contacts];
        }
    }
}
