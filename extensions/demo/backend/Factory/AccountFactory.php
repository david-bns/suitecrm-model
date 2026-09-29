<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class AccountFactory implements FactoryInterface
{
    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $name = $faker->unique()->company();
        $domain = DateHelper::slug($name) . '.example';

        return array_merge([
            'name' => $name,
            'account_type' => $context->pick('account_type_dom'),
            'industry' => $context->pick('industry_dom'),
            'employees' => (string) $context->one([5, 12, 25, 50, 120, 250, 800, 2000]),
            'annual_revenue' => $faker->numberBetween(2, 500) * 100000 . ' €',
            'phone_office' => $faker->phoneNumber(),
            'website' => 'https://www.' . $domain,
            'email1' => 'contact@' . $domain,
            'description' => $context->fake('catchPhrase') . "\nSIRET : " . $context->fake('siret'),
        ], FrenchCities::address($faker, 'billing_address'), $attributes);
    }
}
