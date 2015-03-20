<?php
require_once "bootstrap.php";
if (!CLI) {
	die("CLI only!\n");
}
if (!isset($argv[1])) {
	die("Usage: php add.php TITLE\n");
}
$name = $argv[1];

$p = new Post();
$p->setTitle($name);

$entityManager->persist($p);
$entityManager->flush();

echo "Created post with ID " . $p->getId() . "\n";
