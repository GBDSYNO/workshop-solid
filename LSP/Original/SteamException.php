<?php

namespace Workshop\LSP\Original;

use Exception;

class SteamException extends Exception
{
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function getErrors()
    {
        return ['Error encoutered', 'Steamhost not found'];
    }
}
