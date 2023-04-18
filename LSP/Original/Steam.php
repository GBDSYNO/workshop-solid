<?php

namespace Workshop\LSP\Original;

use PDO;
use Workshop\Config;

class Steam extends GameStore
{
    public function findGames(int $limit)
    {
        $conn = $this->getConnection(
            sprintf('mysql:host=%s;dbname=%s', Config::$STEAM_DB_HOST, Config::$STEAM_DB_NAME),
            Config::$STEAM_DB_USERNAME,
            Config::$STEAM_DB_PASSWORD,
        );

        $query = $conn->prepare(
            "SELECT
                `name` AS title,
                `content` AS content,
                `created_at` AS published_at
            FROM `games`
            ORDER BY `created_at` DESC
            LIMIT 10"
        );

        $query->execute();

        return $query->fetchAll();
    }

    private function getConnection($dsn, $username, $password): PDO
    {
        if (!str_contains($dsn, 'steam')) {
            throw new SteamHostException();
        } else {
            return new PDO($dsn, $username, $password);
        }
    }
}
