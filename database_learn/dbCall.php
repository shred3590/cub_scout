<?php

try {
	$db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",DB_USERNAME,DB_PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


} catch (Exception $e) {
	echo $e->getMessage() . " dbCall Line 13";
	exit;
}
