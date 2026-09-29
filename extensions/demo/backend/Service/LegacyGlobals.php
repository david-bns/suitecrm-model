<?php

namespace App\Extension\demo\backend\Service;

/**
 * Typed access to the legacy globals the demo code reads or changes.
 *
 * Everything in $GLOBALS is mixed: values are checked here, once, so the rest
 * of the extension only handles known types.
 */
final class LegacyGlobals
{
    public static function defaultLanguage(): string
    {
        $language = self::array($GLOBALS['sugar_config'] ?? null)['default_language'] ?? null;

        return is_string($language) && $language !== '' ? $language : 'en_us';
    }

    /**
     * Keys of a dropdown list, empty option excluded, so values are always valid.
     *
     * @return list<string>
     */
    public static function dropdownKeys(string $list): array
    {
        $options = self::array(self::array($GLOBALS['app_list_strings'] ?? null)[$list] ?? null);
        $keys = array_map(static fn (int|string $key): string => (string) $key, array_keys($options));

        return array_values(array_filter($keys, static fn (string $key): bool => $key !== ''));
    }

    public static function salesProbability(string $salesStage): int
    {
        $probabilities = self::array(self::array($GLOBALS['app_list_strings'] ?? null)['sales_probability_dom'] ?? null);
        $probability = $probabilities[$salesStage] ?? null;

        return is_numeric($probability) ? (int) $probability : 0;
    }

    /**
     * Runs $callback with the UI password generation for new users turned off:
     * it reads the HTTP form and only prints an error from the console.
     *
     * @template T
     * @param callable(): T $callback
     * @return T
     */
    public static function withoutGeneratedPasswords(callable $callback): mixed
    {
        $settings = self::array(self::array($GLOBALS['sugar_config'] ?? null)['passwordsetting'] ?? null);

        if (!array_key_exists('SystemGeneratedPasswordON', $settings)) {
            return $callback();
        }

        $previous = $settings['SystemGeneratedPasswordON'];
        self::setPasswordSetting('SystemGeneratedPasswordON', null);

        try {
            return $callback();
        } finally {
            self::setPasswordSetting('SystemGeneratedPasswordON', $previous);
        }
    }

    /**
     * Sets, or removes when $value is null, a key of $sugar_config['passwordsetting'].
     */
    private static function setPasswordSetting(string $key, mixed $value): void
    {
        $config = self::array($GLOBALS['sugar_config'] ?? null);
        $settings = self::array($config['passwordsetting'] ?? null);

        if ($value === null) {
            unset($settings[$key]);
        } else {
            $settings[$key] = $value;
        }

        $config['passwordsetting'] = $settings;
        $GLOBALS['sugar_config'] = $config;
    }

    /**
     * @return array<mixed>
     */
    private static function array(mixed $value): array
    {
        return is_array($value) ? $value : [];
    }
}
