<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class MeetingFactory implements FactoryInterface
{
    private const SUBJECTS = [
        'Rendez-vous de découverte',
        'Démonstration produit',
        'Revue trimestrielle',
        'Comité de pilotage',
        'Négociation commerciale',
    ];

    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $date = $faker->dateTimeBetween('-45 days', '+30 days');
        $past = $date->getTimestamp() < time();

        return array_merge([
            'name' => $context->one(self::SUBJECTS),
            'date_start' => DateHelper::officeHours($faker, $date, $faker->numberBetween(7, 14)),
            'duration_hours' => 1,
            'duration_minutes' => $context->one([0, 30]),
            'location' => $context->one(['Visioconférence', 'Dans nos locaux', FrenchCities::pick($faker)[0]]),
            'status' => $past ? 'Held' : 'Planned',
            'description' => $faker->realText(100),
        ], $attributes);
    }
}
