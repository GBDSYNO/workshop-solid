<?php

namespace Workshop\SRP\Original;

use Exception;
use PDO;

class Logger
{
    protected string $type;

    public function __construct(string $type)
    {
        $types = [
            'file',
            'db',
        ];

        $type = strtolower($type);

        if (empty($type) || !in_array($type, $types, true)) {
            throw new Exception('Unsupported type');
        }

        $this->type = $type;
    }

    public function logToFile(string $event, string $filename, string $path): void
    {
        if ($this->type === 'file' && !empty($event) && !empty($filename) && !empty($path)) {
            echo "Logged '$event' into the file '$filename' located at '$path'\n";
        }
    }

    public function logToDatabase(string $event, string $table, PDO $conn)
    {
        if ($this->type === 'db' && !empty($table)) {
            echo "Logged '$event' into the database $table table\n";
        }
    }
}
