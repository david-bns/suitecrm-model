<?php

namespace App\Extension\demo\backend\Factory;

use Faker\Generator;

/**
 * Real cities with a matching postcode: Faker's fr_FR city() makes names up.
 */
final class FrenchCities
{
    private const CITIES = [
        ['Paris', '75008'], ['Paris', '75011'], ['Paris', '75015'], ['Lyon', '69003'],
        ['Marseille', '13008'], ['Toulouse', '31000'], ['Nice', '06000'], ['Nantes', '44000'],
        ['Strasbourg', '67000'], ['Montpellier', '34000'], ['Bordeaux', '33000'], ['Lille', '59000'],
        ['Rennes', '35000'], ['Reims', '51100'], ['Grenoble', '38000'], ['Dijon', '21000'],
        ['Angers', '49000'], ['Tours', '37000'], ['Clermont-Ferrand', '63000'], ['Rouen', '76000'],
        ['Orléans', '45000'], ['Metz', '57000'], ['Caen', '14000'], ['Annecy', '74000'],
        ['La Rochelle', '17000'], ['Nanterre', '92000'], ['Boulogne-Billancourt', '92100'],
    ];

    /**
     * @return array{0: string, 1: string} city, postcode
     */
    public static function pick(Generator $faker): array
    {
        return self::CITIES[$faker->numberBetween(0, count(self::CITIES) - 1)];
    }

    /**
     * Address fields with the given prefix (billing_address, primary_address).
     *
     * @return array<string, string>
     */
    public static function address(Generator $faker, string $prefix): array
    {
        [$city, $postcode] = self::pick($faker);

        return [
            $prefix . '_street' => $faker->streetAddress(),
            $prefix . '_postalcode' => $postcode,
            $prefix . '_city' => $city,
            $prefix . '_country' => 'France',
        ];
    }
}
