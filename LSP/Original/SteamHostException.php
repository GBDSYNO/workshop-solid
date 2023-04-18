<?php

namespace Workshop\LSP\Original;

use Exception;

class SteamHostException extends Exception
{
    public function __construct($message = 'Steamhost not found', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
