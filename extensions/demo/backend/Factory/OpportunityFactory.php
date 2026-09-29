<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\LegacyGlobals;
use App\Extension\demo\backend\Service\SeedContext;

class OpportunityFactory implements FactoryInterface
{
    private const PROJECTS = [
        'Renouvellement des licences',
        'Déploiement CRM',
        'Contrat de maintenance',
        'Refonte du site web',
        'Formation des équipes',
        'Migration vers le cloud',
        'Audit de sécurité',
        'Extension de contrat',
        'Équipement nouveaux bureaux',
    ];

    private const NEXT_STEPS = [
        'Envoyer la proposition',
        'Planifier une démo',
        'Relancer le décideur',
        'Valider le budget',
        'Préparer le contrat',
    ];

    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $stage = $context->pick('sales_stage_dom');
        $closed = str_starts_with($stage, 'Closed');
        $dateClosed = $closed
            ? $faker->dateTimeBetween('-6 months', '-1 week')
            : $faker->dateTimeBetween('+1 week', '+6 months');

        return array_merge([
            'name' => $context->one(self::PROJECTS),
            'amount' => $faker->numberBetween(20, 1500) * 100,
            'currency_id' => '-99',
            'sales_stage' => $stage,
            'probability' => LegacyGlobals::salesProbability($stage),
            'date_closed' => DateHelper::date($dateClosed),
            'opportunity_type' => $context->pick('opportunity_type_dom'),
            'lead_source' => $context->pick('lead_source_dom'),
            'next_step' => $closed ? '' : $context->one(self::NEXT_STEPS),
            'description' => $faker->realText(120),
        ], $attributes);
    }
}
