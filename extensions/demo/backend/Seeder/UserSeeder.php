<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Factory\UserFactory;
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
        global $sugar_config;

        // New users otherwise go through the UI password generation, which reads
        // the HTTP form and only prints an error from the console.
        $generated = $sugar_config['passwordsetting']['SystemGeneratedPasswordON'] ?? null;
        unset($sugar_config['passwordsetting']['SystemGeneratedPasswordON']);

        try {
            for ($i = 0; $i < $context->options['users']; $i++) {
                $context->users[] = $context->create('Users', $this->users->make($context));
            }
        } finally {
            if ($generated !== null) {
                $sugar_config['passwordsetting']['SystemGeneratedPasswordON'] = $generated;
            }
        }
    }
}
