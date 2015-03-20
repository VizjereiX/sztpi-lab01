<?php
require_once "bootstrap.php";
$q = 'index';

if (isset($_GET['q'])) {
	$q = $_GET['q'];
}

if (!file_exists('controller/'.$q.'.php'))
	throw new Exception("Unknown controller $q");

require 'controller/'.$q.'.php';
