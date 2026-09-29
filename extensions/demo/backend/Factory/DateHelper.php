<?php

namespace App\Extension\demo\backend\Factory;

use DateTimeInterface;
use Faker\Generator;

/**
 * Beans saved from code expect database formats, in UTC.
 */
final class DateHelper
{
    public static function dateTime(DateTimeInterface $date): string
    {
        return gmdate('Y-m-d H:i:s', $date->getTimestamp());
    }

    public static function date(DateTimeInterface $date): string
    {
        return gmdate('Y-m-d', $date->getTimestamp());
    }

    /**
     * Round to the quarter hour, during office hours (Paris time, UTC+1/+2).
     */
    public static function officeHours(Generator $faker, DateTimeInterface $date, int $hour): string
    {
        $day = gmdate('Y-m-d', $date->getTimestamp());
        $minutes = $faker->randomElement([0, 15, 30, 45]);

        return sprintf('%s %02d:%02d:00', $day, $hour, $minutes);
    }

    public static function slug(string $value): string
    {
        $ascii = iconv('UTF-8', 'ASCII//TRANSLIT', $value) ?: $value;

        return trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($ascii)), '-');
    }
}
