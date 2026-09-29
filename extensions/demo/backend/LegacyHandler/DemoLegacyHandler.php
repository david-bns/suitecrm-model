<?php

namespace App\Extension\demo\backend\LegacyHandler;

use App\Engine\LegacyHandler\LegacyHandler;
use App\Extension\demo\backend\Service\LegacyGlobals;

/**
 * Boots the legacy application from the console so seeders can save beans
 * (relationships, email addresses and computed fields handled by SuiteCRM).
 */
class DemoLegacyHandler extends LegacyHandler
{
    public function getHandlerKey(): string
    {
        return 'demo-data';
    }

    public function start(): void
    {
        $this->init();
        $this->runLegacyEntryPoint();
        $this->loadSystemUser();

        $language = LegacyGlobals::defaultLanguage();
        $GLOBALS['current_language'] = $language;
        $GLOBALS['app_strings'] = return_application_language($language);
        $GLOBALS['app_list_strings'] = return_app_list_strings_language($language);
    }

    public function stop(): void
    {
        $this->close();
    }
}
