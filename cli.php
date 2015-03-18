<?php
require_once "bootstrap.php";
if (!CLI) {
	die('CLI ONLY');
}
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
