<?php

namespace App\Extension\demo\Tests\Unit;

use App\Extension\demo\backend\Service\LegacyGlobals;
use LogicException;

final class LegacyGlobalsTest extends DemoTestCase
{
    public function testDefaultLanguageComesFromConfig(): void
    {
        $GLOBALS['sugar_config'] = ['default_language' => 'fr_FR'];

        self::assertSame('fr_FR', LegacyGlobals::defaultLanguage());
    }

    public function testDefaultLanguageFallsBackToEnglish(): void
    {
        unset($GLOBALS['sugar_config']);
        self::assertSame('en_us', LegacyGlobals::defaultLanguage());

        $GLOBALS['sugar_config'] = ['default_language' => ''];
        self::assertSame('en_us', LegacyGlobals::defaultLanguage());
    }

    public function testDropdownKeysSkipTheEmptyOptionAndAreStrings(): void
    {
        self::setDropdown('numbers_dom', ['' => '', 1 => 'Un', 2 => 'Deux']);

        self::assertSame(['1', '2'], LegacyGlobals::dropdownKeys('numbers_dom'));
        self::assertSame([], LegacyGlobals::dropdownKeys('missing_dom'));
    }

    public function testSalesProbability(): void
    {
        self::assertSame(100, LegacyGlobals::salesProbability('Closed Won'));
        self::assertSame(0, LegacyGlobals::salesProbability('Unknown stage'));
    }

    public function testPasswordGenerationIsOffDuringTheCallbackOnly(): void
    {
        $GLOBALS['sugar_config'] = ['passwordsetting' => ['SystemGeneratedPasswordON' => '1', 'other' => 'kept']];

        $during = LegacyGlobals::withoutGeneratedPasswords(static fn (): mixed => self::sugarConfig());

        self::assertSame(['passwordsetting' => ['other' => 'kept']], $during);
        self::assertSame(['passwordsetting' => ['other' => 'kept', 'SystemGeneratedPasswordON' => '1']], self::sugarConfig());
    }

    public function testPasswordGenerationIsRestoredWhenTheCallbackFails(): void
    {
        $GLOBALS['sugar_config'] = ['passwordsetting' => ['SystemGeneratedPasswordON' => '1']];

        try {
            LegacyGlobals::withoutGeneratedPasswords(static function (): void {
                throw new LogicException('boom');
            });
        } catch (LogicException) {
            // Expected: the callback's exception goes through (PHPStan proves it can't be swallowed).
        }

        self::assertSame(['passwordsetting' => ['SystemGeneratedPasswordON' => '1']], self::sugarConfig());
    }
}
