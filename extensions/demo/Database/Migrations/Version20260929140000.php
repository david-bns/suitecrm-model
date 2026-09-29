<?php

declare(strict_types=1);

namespace App\Extension\demo\Database\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260929140000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Create demo_seed_records, which tracks every record created by demo:seed';
    }

    public function up(Schema $schema): void
    {
        $table = $schema->createTable('demo_seed_records');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('module', 'string', ['length' => 100]);
        $table->addColumn('record_id', 'string', ['length' => 36, 'fixed' => true]);
        $table->addColumn('created_at', 'datetime');
        $table->setPrimaryKey(['id']);
        $table->addIndex(['module', 'record_id'], 'idx_demo_seed_records_record');
    }

    public function down(Schema $schema): void
    {
        $schema->dropTable('demo_seed_records');
    }
}
