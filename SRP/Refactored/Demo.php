<?php

namespace Workshop\SRP\Refactored;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $event = 'Syno workshop SRP refactored';

        $fileLogger = new LoggerFile('events.log', '/home/synbshop/public_html/workshop-solid/logs/');
        $fileLogger->write($event);
    }
}
