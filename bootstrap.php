<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$isDevMode = true;
if ($isDevMode) {
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
}

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/model"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);

// check if we are in console
define('CLI', php_sapi_name() == 'cli' || isset($_SERVER['argc'])  && (is_numeric($_SERVER['argc']) && $_SERVER['argc'] > 0));

set_exception_handler(function($exception) {
	http_response_code(500);
	require 'template/exception.php';
	die;
});

session_start();
require_once 'core/Templater.php';
