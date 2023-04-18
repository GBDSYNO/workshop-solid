<?php

namespace Workshop\LSP\Original;

class GamesDisplayerService
{
    public function displayGamesList(array $games): void
    {
        foreach ($games as $game) {
            if (is_array($game)) {
                foreach ($game as $info) {
                    echo "$info\n";
                }
            } else {
                echo "$game\n";
            }
            echo "\n";
        }
    }
}
