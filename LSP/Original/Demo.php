<?php

namespace Workshop\LSP\Original;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $steam = new Steam();
        $epic = new Epic();

        self::displayGames($steam->findGames(10));
        self::displayGames($epic->findGames(10));
    }

    private static function displayGames(array $games)
    {
        foreach ($games as $game) {
            echo "$game\n";
        }
    }
}
