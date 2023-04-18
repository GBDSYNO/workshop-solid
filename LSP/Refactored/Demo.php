<?php

namespace Workshop\LSP\Refactored;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $steam = new Steam();
        $epic = new Epic();

        $gamesDisplayer = new GamesDisplayerService();

        $gamesDisplayer->displayGamesList($epic->findGames());
        $gamesDisplayer->displayGamesList($steam->findGames());
    }
}
