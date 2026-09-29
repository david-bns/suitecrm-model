<?php
/**
 * Doctrine Migrations configuration for the demo extension.
 *
 * Kept apart from SuiteCRM's own migrations (core/backend/Migrations, table
 * migration_versions): those are upgrade steps that must only run through the
 * SuiteCRM upgrade process, so demo:migrate never sees them.
 *
 * The folder is Database/Migrations on purpose: SuiteCRM adds every
 * extensions/<name>/Migrations folder to its own migrations, which would make
 * its upgrade process replay these.
 */

return [
    'table_storage' => [
        'table_name' => 'demo_migration_versions',
    ],
    'migrations_paths' => [
        'App\Extension\demo\Database\Migrations' => dirname(__DIR__) . '/Database/Migrations',
    ],
    'all_or_nothing' => false,
    'check_database_platform' => true,
];
