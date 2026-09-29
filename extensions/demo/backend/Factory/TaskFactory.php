<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class TaskFactory implements FactoryInterface
{
    private const SUBJECTS = [
        'Envoyer la documentation',
        'Préparer la proposition commerciale',
        'Mettre à jour la fiche client',
        'Organiser la démonstration',
        'Relancer pour signature',
    ];

    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $due = $faker->dateTimeBetween('-30 days', '+30 days');
        $past = $due->getTimestamp() < time();

        return array_merge([
            'name' => $faker->randomElement(self::SUBJECTS),
            'date_due' => DateHelper::officeHours($faker, $due, 16),
            'date_due_flag' => 0,
            'priority' => $context->pick('task_priority_dom'),
            'status' => $past ? $faker->randomElement(['Completed', 'Completed', 'In Progress']) : 'Not Started',
            'description' => $faker->realText(100),
        ], $attributes);
    }
}
