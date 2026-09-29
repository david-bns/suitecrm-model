<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Factory\UserFactory;
use App\Extension\demo\backend\Service\LegacyGlobals;
use App\Extension\demo\backend\Service\SeedContext;

/**
 * Sales users the demo records are assigned to. They have no password.
 */
class UserSeeder implements SeederInterface
{
    public function __construct(private readonly UserFactory $users)
    {
    }

    public function run(SeedContext $context): void
    {
        LegacyGlobals::withoutGeneratedPasswords(function () use ($context): void {
            for ($i = 0; $i < $context->options['users']; $i++) {
                $context->users[] = $context->create('Users', $this->users->make($context));
            }
        });
    }
}
