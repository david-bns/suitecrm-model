<?php

namespace App\Extension\demo\backend\Seeder;

use App\Extension\demo\backend\Service\SeedContext;

interface SeederInterface
{
    public function run(SeedContext $context): void;
}
