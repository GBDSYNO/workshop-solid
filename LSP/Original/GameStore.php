<?php

namespace Workshop\LSP\Original;

abstract class GameStore
{
    abstract public function findGames(int $limit);
}
