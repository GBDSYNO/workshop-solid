<?php

namespace Workshop\LSP\Refactored;

use PDO;
use ReflectionClass;
use Workshop\Config;

abstract class GameStore
{
    abstract public function findGames(int $limit = 10): array;

    public function getConnection(): PDO
    {
        $platform = strtoupper((new ReflectionClass($this))->getShortName());
        echo "$platform\n";

        $conn = new PDO(
            sprintf('mysql:host=%s;dbname=%s', Config::${"${platform}_DB_HOST"}, Config::${"${platform}_DB_NAME"}),
            Config::${"${platform}_DB_USERNAME"},
            Config::${"${platform}_DB_PASSWORD"},
        );

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $conn;
    }
}
