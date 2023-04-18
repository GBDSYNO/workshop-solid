<?php

namespace Workshop\LSP\Original;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $steam = new Steam();
        $epic = new Epic();

        $gamesDisplayer = new GamesDisplayerService();

        $gamesDisplayer->displayGamesList($epic->findGames(10));
        $gamesDisplayer->displayGamesList($steam->findGames(10));
    }
}
