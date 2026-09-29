<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Factory\LeadFactory;
use App\Extension\demo\backend\Service\SeedContext;

class LeadSeeder implements SeederInterface
{
    public function __construct(private readonly LeadFactory $leads)
    {
    }

    public function run(SeedContext $context): void
    {
        for ($i = 0; $i < $context->options['leads']; $i++) {
            $context->create('Leads', $this->leads->make($context, [
                'assigned_user_id' => $context->randomUser()->id,
            ]));
        }
    }
}
