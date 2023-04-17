<?php

namespace Workshop\SRP\Refactored;

use Exception;

class LoggerFile extends Logger
{
    public function __construct(private string $filename, private string $path)
    {
        if (empty($filename) || empty($path)) {
            throw new Exception('Invalid parameters');
        }
    }

    public function write(string $event): void
    {
        if (!empty($event)) {
            echo "Logged '$event' into the file '$this->filename' located at '$this->path'\n";
        }
    }
}
