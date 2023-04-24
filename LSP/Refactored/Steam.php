<?php

namespace Workshop\LSP\Refactored;

use PDO;

class Steam extends GameStore
{
    public function findGames(int $limit = 10): array
    {
        $conn = $this->getConnection();

        $query = $conn->prepare(
            'SELECT
                `name` AS title,
                `content` AS content,
                `created_at` AS published_at
            FROM `games`
            ORDER BY `created_at` ASC
            LIMIT :limit'
        );
        $query->bindValue(':limit', $limit, PDO::PARAM_INT);

        $query->execute();

        $games = $query->fetchAll();

        return $this->formatGames($games);
    }

    private function formatGames(array $games): array
    {
        return array_map(function ($game) {
            $game['published_at'] = substr($game['published_at'], 0, 4);
            return $game;
        }, $games);
    }
}
