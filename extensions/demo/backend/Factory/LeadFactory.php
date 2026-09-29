<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\LegacyGlobals;
use App\Extension\demo\backend\Service\SeedContext;

class LeadFactory implements FactoryInterface
{
    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $gender = $context->one(['male', 'female']);
        $firstName = $faker->firstName($gender);
        $lastName = $faker->lastName();
        $company = $faker->company();
        // A converted lead needs the contact it was converted to: not generated here.
        $statuses = array_values(array_diff(LegacyGlobals::dropdownKeys('lead_status_dom'), ['Converted']));

        return array_merge([
            'salutation' => $gender === 'male' ? 'Mr.' : 'Ms.',
            'first_name' => $firstName,
            'last_name' => $lastName,
            'title' => $context->one(ContactFactory::TITLES),
            'account_name' => $company,
            'status' => $statuses === [] ? 'New' : $context->one($statuses),
            'lead_source' => $context->pick('lead_source_dom'),
            'phone_work' => $faker->phoneNumber(),
            'phone_mobile' => $context->fake('mobileNumber'),
            'email1' => DateHelper::slug($firstName) . '.' . DateHelper::slug($lastName)
                . '@' . DateHelper::slug($company) . '.example',
            'description' => $faker->realText(160),
        ], FrenchCities::address($faker, 'primary_address'), $attributes);
    }
}
