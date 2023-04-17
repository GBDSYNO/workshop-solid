<?php

namespace Workshop\SRP\Original;

use Workshop\System\Runable;

class Demo implements Runable
{
    public function run(): void
    {
        $event = 'Syno workshop started';

        $fileLogger = new Logger('file');
        $fileLogger->logToFile($event, 'events.log', '/home/synbshop/public_html/workshop-solid/logs/');
    }
}
