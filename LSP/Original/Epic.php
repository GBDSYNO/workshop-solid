<?php

namespace Workshop\LSP\Original;

use PDO;

class Epic extends GameStore
{
    public function findGames(int $limit)
    {
        try {
            $conn = new PDO('abcd');

            $query = $conn->prepare(
                "SELECT
                    `title` AS title,
                    `fulldesc` AS content,
                    `publish_up` AS published_at
                FROM `games`
                WHERE `state` = 1
                ORDER BY `publish_up` DESC
                LIMIT $limit"
            );

            return $query->fetchAll();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
