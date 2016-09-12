<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/**
 * Instantiates the Doctrine Entity Manager
 */
$devMode = true; //TODO: Use .env
if (php_sapi_name() === 'cli') {
	$pathToDb = 'db'.DIRECTORY_SEPARATOR; //TODO: Use .env
} else {
	$pathToDb = ROOTDIR.DS.'db'.DS;
}
$db = 'db.sqlite';

$doctrineConfig = Setup::createAnnotationMetadataConfiguration(array(__DIR__), $devMode);
$conn = array(
'driver' => 'pdo_sqlite',
'path' => $pathToDb.$db
);
$entityManager = EntityManager::create($conn, $doctrineConfig);
