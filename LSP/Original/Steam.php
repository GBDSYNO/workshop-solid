<?php

namespace Workshop\LSP\Original;

use PDO;

class Steam extends GameStore
{
    public function findGames(int $limit)
    {
        $conn = $this->getConnection('abcd');

        if (is_array($conn)) {
            return $conn;
        }

        $query = $conn->prepare(
            "SELECT
                `name` AS title,
                `content` AS content,
                `created_at` AS published_at
            FROM `games`
            ORDER BY `created_at` DESC
            LIMIT 10"
        );

        return $query->fetchAll();
    }

    private function getConnection($dsn): PDO|array
    {
        try {
            if (!str_contains($dsn, 'steamhost')) {
                throw new SteamException();
            } else {
                return new PDO($dsn);
            }
        } catch (SteamException $e) {
            return $e->getErrors();
        }
    }
}
