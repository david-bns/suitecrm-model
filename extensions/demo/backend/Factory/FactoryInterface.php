<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

interface FactoryInterface
{
    /**
     * Field values for one fake record; $attributes override the defaults.
     *
     * @param array<string, mixed> $attributes
     * @return array<string, mixed>
     */
    public function make(SeedContext $context, array $attributes = []): array;
}
