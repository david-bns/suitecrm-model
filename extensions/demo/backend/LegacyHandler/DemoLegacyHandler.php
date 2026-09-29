<?php

namespace App\Extension\demo\backend\LegacyHandler;

use App\Engine\LegacyHandler\LegacyHandler;

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

        global $sugar_config, $current_language, $app_strings, $app_list_strings;

        $current_language = $sugar_config['default_language'] ?? 'en_us';
        $app_strings = return_application_language($current_language);
        $app_list_strings = return_app_list_strings_language($current_language);
    }

    public function stop(): void
    {
        $this->close();
    }
}
