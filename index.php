<?php
require_once "bootstrap.php";
$q = 'index';

if (isset($_GET['q'])) {
	$q = $_GET['q'];
}

if (!file_exists('controller/'.$q.'.php'))
	throw new Exception("Unknown controller $q");

ob_start();
$data = require 'controller/'.$q.'.php';
ob_get_clean();

if ($data !== FALSE) {
	if (!file_exists('view/'.$q.'.php'))
		throw new Exception("Unknown view $q");
	extract($data);
	ob_start();
	require 'view/'.$q.'.php';
	$body = ob_get_clean();
	require 'template/index.php';
}
die;
