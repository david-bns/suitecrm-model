<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class CaseFactory implements FactoryInterface
{
    private const SUBJECTS = [
        'Impossible de se connecter',
        'Erreur sur la dernière facture',
        'Demande de formation complémentaire',
        'Lenteurs sur l\'application',
        'Export des données en échec',
        'Question sur le contrat',
        'Ajout d\'utilisateurs',
        'Problème d\'impression des devis',
    ];

    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $status = $context->pick('case_status_dom');

        return array_merge([
            'name' => $faker->randomElement(self::SUBJECTS),
            'status' => $status,
            // Status keys are prefixed by their state: Open_New, Closed_Closed...
            'state' => str_starts_with($status, 'Closed') ? 'Closed' : 'Open',
            'priority' => $context->pick('case_priority_dom'),
            'type' => $context->pick('case_type_dom'),
            'description' => $faker->realText(200),
        ], $attributes);
    }
}
