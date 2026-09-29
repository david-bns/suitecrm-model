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
            $ownerId = SeedContext::id($context->randomUser());
            $account = $context->create('Accounts', $this->accounts->make($context, [
                'assigned_user_id' => $ownerId,
            ]));

            $email = SeedContext::field($account, 'email1');
            $contactFields = [
                '_domain' => substr($email, (int) strrpos($email, '@') + 1),
                'assigned_user_id' => $ownerId,
            ];

            // The first contact outside the loop: an account always has one.
            $contacts = [$context->create('Contacts', $this->contacts->make($context, $contactFields))];
            for ($j = 1, $n = $context->faker->numberBetween(1, 4); $j < $n; $j++) {
                $contacts[] = $context->create('Contacts', $this->contacts->make($context, $contactFields));
            }

            $context->link($account, 'contacts', SeedContext::ids($contacts));
            $context->accounts[] = ['account' => $account, 'contacts' => $contacts];
        }
    }
}
