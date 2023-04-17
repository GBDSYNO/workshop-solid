<?php

namespace Workshop\LSP\Refactored;

use PDO;

class Steam extends GameStore
{
    public function findGames(int $limit = 10): array
    {
        $conn = $this->getConnection();

        if (is_array($conn)) {
            return $conn;
        }

        $query = $conn->prepare(
            'SELECT
                `name` AS title,
                `content` AS content,
                `created_at` AS published_at
            FROM `games`
            ORDER BY `created_at` DESC
            LIMIT :limit'
        );
        $query->bindValue(':limit', $limit, PDO::PARAM_INT);

        return $query->fetchAll();
    }
}
