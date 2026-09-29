<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Factory\CallFactory;
use App\Extension\demo\backend\Factory\MeetingFactory;
use App\Extension\demo\backend\Factory\TaskFactory;
use App\Extension\demo\backend\Service\SeedContext;

/**
 * One to five calls, meetings or tasks per account, past and upcoming.
 */
class ActivitySeeder implements SeederInterface
{
    public function __construct(
        private readonly CallFactory $calls,
        private readonly MeetingFactory $meetings,
        private readonly TaskFactory $tasks
    ) {
    }

    public function run(SeedContext $context): void
    {
        $faker = $context->faker;

        foreach ($context->accounts as ['account' => $account, 'contacts' => $contacts]) {
            for ($i = 0, $n = $faker->numberBetween(1, 5); $i < $n; $i++) {
                $contact = $faker->randomElement($contacts);
                $parent = [
                    'parent_type' => 'Accounts',
                    'parent_id' => $account->id,
                    'assigned_user_id' => $account->assigned_user_id,
                ];

                switch ($faker->randomElement(['Calls', 'Meetings', 'Tasks'])) {
                    case 'Calls':
                        $call = $context->create('Calls', $this->calls->make($context, $parent));
                        $context->link($call, 'contacts', [$contact->id]);
                        $context->link($call, 'users', [$account->assigned_user_id]);
                        break;
                    case 'Meetings':
                        $meeting = $context->create('Meetings', $this->meetings->make($context, $parent));
                        $context->link($meeting, 'contacts', [$contact->id]);
                        $context->link($meeting, 'users', [$account->assigned_user_id]);
                        break;
                    default:
                        $context->create('Tasks', $this->tasks->make($context, $parent + [
                            'contact_id' => $contact->id,
                        ]));
                }
            }
        }
    }
}
