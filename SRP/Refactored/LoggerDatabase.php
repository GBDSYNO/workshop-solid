<?php

namespace Workshop\SRP\Refactored;

use PDO;
use Exception;
use Workshop\SRP\Original\Logger;

class LoggerDatabase extends Logger
{
    public function __construct(private string $table, private PDO $conn)
    {
        if (empty($table)) {
            throw new Exception('Invalid table name');
        }
    }

    public function write(string $event): void
    {
        if (!empty($event)) {
            echo "Logged '$event' into the database $this->table table\n";
        }
    }
}
