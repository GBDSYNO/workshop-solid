<?php

namespace Workshop\LSP\Original;

use PDO;
use Workshop\Config;

class Epic extends GameStore
{
    public function findGames(int $limit)
    {
        try {
            $conn = new PDO(
                sprintf('mysql:host=%s;dbname=%s', Config::$EPIC_DB_HOST, Config::$EPIC_DB_NAME),
                Config::$EPIC_DB_USERNAME,
                Config::$EPIC_DB_PASSWORD,
            );

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

            $query->execute();

            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
