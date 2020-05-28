<?php

namespace App\Service;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class DatabaseFactory
{
    /**
     * Create a doctrine entity manager.
     *
     * @return EntityManager
     */
    public static function create()
    {
        $isDevMode = true;
        $metadata = Setup::createAnnotationMetadataConfiguration([__DIR__ . '/../Entity'], $isDevMode);

        $dbParams = [
            'driver'   => 'pdo_mysql',
            'host'     => 'localhost',
            'user'     => 'doctrineorm',
            'password' => 'doctrineorm',
            'dbname'   => 'doctrineorm',
            'charset'  => 'utf8'
        ];
        
        // obtaining the entity manager
        return EntityManager::create($dbParams, $metadata);
    }
}
