<?php

namespace Workshop\LSP\Refactored;

use PDO;

class Epic extends GameStore
{
    public function findGames(int $limit = 10): array
    {
        $conn = $this->getConnection();

        $query = $conn->prepare(
            "SELECT
                `title` AS title,
                `fulldesc` AS content,
                `publish_up` AS published_at
            FROM `games`
            WHERE `state` = 1
            ORDER BY `publish_up` ASC
            LIMIT $limit"
        );

        $query->execute();

        return $query->fetchAll();
    }
}
