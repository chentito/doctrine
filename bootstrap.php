<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(ROOT.DS.'doctrine/models/');
$isDevMode = false;

// the connection configuration
$dbParams = array(
'driver'   => 'pdo_mysql',
'user'     => 'root',
'password' => '9940560',
'dbname'   => 'doctrine_1',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create($dbParams, $config);


?>