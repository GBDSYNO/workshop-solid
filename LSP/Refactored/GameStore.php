<?php

namespace Workshop\LSP\Refactored;

use PDO;

abstract class GameStore
{
    abstract public function findGames(int $limit = 10): array;

    public function getConnection(): PDO
    {
        $conn = new PDO('');

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        return $conn;
    }
}
