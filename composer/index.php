<?php

require_once './vendor/autoload.php';

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;

$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

// ERROR
echo $message;
