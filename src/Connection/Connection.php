<?php

declare(strict_types=1);

namespace App\Connection;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class Connection
{
    public static function open(): EntityManager
    {
        $params = [
            'driver' => 'pdo_mysql',
            'user' => 'root',
            'password' => 'flavio',
            'dbname' => 'db_drugstore',
        ];

        $paths = [dirname(__DIR__).'/Model'];

        $config = ORMSetup::createAnnotationMetadataConfiguration($paths, true);

        return EntityManager::create($params, $config);
    }
}   