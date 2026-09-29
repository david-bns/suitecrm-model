<?php

namespace App\Extension\demo\backend\Service;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;

/**
 * Remembers which records demo:seed created, so demo:reset removes those and
 * nothing else. The table comes from the extension's first migration.
 */
class DemoRecordTracker
{
    public const TABLE = 'demo_seed_records';

    public function __construct(private readonly Connection $connection)
    {
    }

    public function isReady(): bool
    {
        // Not through the schema manager: SuiteCRM's schema_filter hides this table.
        try {
            $this->connection->executeQuery('SELECT 1 FROM ' . self::TABLE . ' LIMIT 1');
        } catch (Exception) {
            return false;
        }

        return true;
    }

    public function track(string $module, string $recordId): void
    {
        $this->connection->insert(self::TABLE, [
            'module' => $module,
            'record_id' => $recordId,
            'created_at' => gmdate('Y-m-d H:i:s'),
        ]);
    }

    /**
     * @return list<array{module: string, record_id: string}> newest first
     */
    public function all(): array
    {
        $rows = $this->connection->fetchAllAssociative(
            'SELECT module, record_id FROM ' . self::TABLE . ' ORDER BY id DESC'
        );

        $records = [];
        foreach ($rows as $row) {
            if (is_string($row['module'] ?? null) && is_string($row['record_id'] ?? null)) {
                $records[] = ['module' => $row['module'], 'record_id' => $row['record_id']];
            }
        }

        return $records;
    }

    public function clear(): void
    {
        $this->connection->executeStatement('DELETE FROM ' . self::TABLE);
    }
}
