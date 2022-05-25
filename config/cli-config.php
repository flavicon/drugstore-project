<?php

use App\Connection\Connection;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

include dirname(__DIR__).'/vendor/autoload.php';

$entityManager = Connection::open();

return ConsoleRunner::createHelperSet($entityManager);