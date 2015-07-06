<?php
try {
	$db = new PDO("mysql:host=localhost;dbname=cubScout;charset=utf8mb4","root","");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


} catch (Exception $e) {
	echo $e->getMessage() . " dbCall Line 13";
	exit;
}
