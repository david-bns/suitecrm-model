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
            $ownerId = SeedContext::field($account, 'assigned_user_id');

            for ($i = 0, $n = $faker->numberBetween(1, 5); $i < $n; $i++) {
                $contactId = SeedContext::id($context->one($contacts));
                $parent = [
                    'parent_type' => 'Accounts',
                    'parent_id' => SeedContext::id($account),
                    'assigned_user_id' => $ownerId,
                ];

                switch ($context->one(['Calls', 'Meetings', 'Tasks'])) {
                    case 'Calls':
                        $call = $context->create('Calls', $this->calls->make($context, $parent));
                        $context->link($call, 'contacts', [$contactId]);
                        $context->link($call, 'users', [$ownerId]);
                        break;
                    case 'Meetings':
                        $meeting = $context->create('Meetings', $this->meetings->make($context, $parent));
                        $context->link($meeting, 'contacts', [$contactId]);
                        $context->link($meeting, 'users', [$ownerId]);
                        break;
                    default:
                        $context->create('Tasks', $this->tasks->make($context, $parent + [
                            'contact_id' => $contactId,
                        ]));
                }
            }
        }
    }
}
