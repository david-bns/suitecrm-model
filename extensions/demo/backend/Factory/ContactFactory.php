<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class ContactFactory implements FactoryInterface
{
    public const TITLES = [
        'Direction générale',
        'Direction administrative et financière',
        'Responsable achats',
        'Responsable informatique',
        'Responsable marketing',
        'Responsable des ressources humaines',
        'Responsable logistique',
        'Office manager',
    ];

    public const DEPARTMENTS = ['Direction', 'Finance', 'Achats', 'Informatique', 'Marketing', 'RH', 'Logistique'];

    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $gender = $context->one(['male', 'female']);
        $firstName = $faker->firstName($gender);
        $lastName = $faker->lastName();
        $domain = $attributes['_domain'] ?? null;
        $domain = is_string($domain) ? $domain : $faker->safeEmailDomain();
        unset($attributes['_domain']);

        return array_merge([
            'salutation' => $gender === 'male' ? 'Mr.' : 'Ms.',
            'first_name' => $firstName,
            'last_name' => $lastName,
            'title' => $context->one(self::TITLES),
            'department' => $context->one(self::DEPARTMENTS),
            'phone_work' => $faker->phoneNumber(),
            'phone_mobile' => $context->fake('mobileNumber'),
            'email1' => DateHelper::slug($firstName) . '.' . DateHelper::slug($lastName) . '@' . $domain,
            'lead_source' => $context->pick('lead_source_dom'),
        ], FrenchCities::address($faker, 'primary_address'), $attributes);
    }
}
