<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class LeadFactory implements FactoryInterface
{
    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $gender = $faker->randomElement(['male', 'female']);
        $firstName = $faker->firstName($gender);
        $lastName = $faker->lastName();
        $company = $faker->company();
        $statuses = array_values(array_diff($context->options('lead_status_dom'), ['Converted']));

        return array_merge([
            'salutation' => $gender === 'male' ? 'Mr.' : 'Ms.',
            'first_name' => $firstName,
            'last_name' => $lastName,
            'title' => $faker->randomElement(ContactFactory::TITLES),
            'account_name' => $company,
            'status' => $faker->randomElement($statuses),
            'lead_source' => $context->pick('lead_source_dom'),
            'phone_work' => $faker->phoneNumber(),
            'phone_mobile' => $faker->mobileNumber(),
            'email1' => DateHelper::slug($firstName) . '.' . DateHelper::slug($lastName)
                . '@' . DateHelper::slug($company) . '.example',
            'description' => $faker->realText(160),
        ], FrenchCities::address($faker, 'primary_address'), $attributes);
    }
}
