<?php

namespace App\Extension\demo\backend\Factory;

use App\Extension\demo\backend\Service\SeedContext;

class UserFactory implements FactoryInterface
{
    private const TITLES = [
        'Responsable grands comptes',
        'Business developer',
        'Account manager',
        'Responsable service client',
        'Direction commerciale',
    ];

    public function make(SeedContext $context, array $attributes = []): array
    {
        $faker = $context->faker;
        $firstName = $faker->firstName();
        $lastName = $faker->lastName();
        $userName = $faker->unique()->numerify(
            str_replace('-', '.', DateHelper::slug($firstName . ' ' . $lastName)) . '##'
        );

        return array_merge([
            'user_name' => $userName,
            'first_name' => $firstName,
            'last_name' => $lastName,
            'title' => $context->one(self::TITLES),
            'department' => 'Commercial',
            'status' => 'Active',
            'employee_status' => 'Active',
            'is_admin' => 0,
            'email1' => $userName . '@example.com',
            'phone_work' => $faker->phoneNumber(),
            'phone_mobile' => $context->fake('mobileNumber'),
        ], $attributes);
    }
}
