<?php

namespace App\Extension\demo\backend\Seeder;

/**
 * Entry point of demo:seed: the seeders to run, in order. Later seeders use
 * the users and accounts created by earlier ones.
 */
class DatabaseSeeder
{
    public function __construct(
        private readonly UserSeeder $users,
        private readonly AccountSeeder $accounts,
        private readonly OpportunitySeeder $opportunities,
        private readonly CaseSeeder $cases,
        private readonly ActivitySeeder $activities,
        private readonly LeadSeeder $leads
    ) {
    }

    /**
     * @return SeederInterface[]
     */
    public function seeders(): array
    {
        return [
            $this->users,
            $this->accounts,
            $this->opportunities,
            $this->cases,
            $this->activities,
            $this->leads,
        ];
    }
}
