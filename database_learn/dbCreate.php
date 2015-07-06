<?php
require_once('../inc/config.php');
require(ROOT_PATH . 'database_learn/dbCall.php');
require(ROOT_PATH . 'database_learn/db.php');
// $dbReqTable
// call requirement database for rows and assign to new database as columns

// this is constant to make the program work
$table = 'bobcat';


	$reqs = requirements_db ($table);
	$number = count($reqs);
	$i = 0;
	$col = "";
	foreach ($reqs as $req) {
//		while ($i<$number){
			$col .= '"' . $req['mandatory'] . '"' . ' (VARCHAR 300), ';
//			$i++;
//		}
//		if ($i === $number) {
//			$col .= $req['mandatory'] . ' (VARCHAR 300)';
//		}
//
//		var_dump($req);
		echo '<br>' . $col . '<br><br>';
	}
	unset ($req);
try {
	$sql = "CREATE TABLE IF NOT EXISTS " . $table . "_reqs (" . $col . ")";
	$db->exec($sql);
	echo $table . "_reqs created.";

} catch (Exception $e) {
	echo $e->getMessage() . ' dbCreate badge table creation.';
	exit;
}

// create database with requirements as column header

//
