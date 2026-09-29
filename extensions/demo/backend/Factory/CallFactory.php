<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class CallFactory implements FactoryInterface
{
    private const SUBJECTS = [
        'Point d\'avancement',
        'Appel de qualification',
        'Relance du devis',
        'Suivi du ticket',
        'Prise de besoin',
    ];

    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $date = $faker->dateTimeBetween('-45 days', '+30 days');
        $past = $date->getTimestamp() < time();

        return array_merge([
            'name' => $context->one(self::SUBJECTS),
            'date_start' => DateHelper::officeHours($faker, $date, $faker->numberBetween(7, 15)),
            'duration_hours' => 0,
            'duration_minutes' => $context->one([15, 30, 45]),
            'direction' => $context->pick('call_direction_dom'),
            'status' => $past ? 'Held' : 'Planned',
            'description' => $faker->realText(100),
        ], $attributes);
    }
}
