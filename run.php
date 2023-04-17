<?php

define('BASE_PATH', realpath(dirname(__FILE__)));
define('NAMESPACE_PREFIX', 'Workshop');

spl_autoload_register(function ($class) {
    $filename = BASE_PATH . str_replace('\\', '/', $class) . '.php';
    include(str_replace(NAMESPACE_PREFIX, '', $filename));
});

$concept = $argv[1];
$phase = isset($argv[2]) ? 'Refactored' : 'Original';
$demopath = '\\' . NAMESPACE_PREFIX . "\\$concept\\$phase\\Demo";

$demo = new $demopath;
$demo->run();
