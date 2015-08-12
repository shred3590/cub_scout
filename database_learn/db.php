<?php
require_once('pass.php');
$db_connection = '"mysql:host=localhost;dbname=' . DB_NAME . '","' . DB_USERNAME . '","' . DB_PASS . '"';
//echo $db_connection . '<br>';
//exit;
// call database

$name = '"root"';

try {
	$db = new PDO("mysql:host=localhost;dbname=cubScout;charset=utf8mb4","root","");
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
	echo $e->getMessage() . " Line 13";
	exit;
}

//list database contents with checkboxes
function full_scout_list() {
	require('dbCall.php');
//	require(ROOT_PATH . "inc/database.php");

	try {
		$results = $db->query("
				SELECT FirstName, LastName, Den, Bobcat, Tiger, Wolf, Bear, Webelo, Arrow, Health, id
				FROM scouts
				ORDER BY Den DESC, LastName");
		// $scouts = array(array());
		$scouts = $results->fetchAll(PDO::FETCH_ASSOC);
	//	$recent = array_reverse($recent);
		return $scouts;
	} catch (Exception $e) {
		echo $e->getMessage() . "db.php full_scout_list Line 52";
		exit;
	}
}

//function requirements_db ($table) {
//	require('dbCall.php');
//	try {
//		// make sure this is up to date with final database structure
//		$results = $db->query("
//			SELECT *
//			FROM $table
//			ORDER BY mandatory, optional
//			");
//		$dbReq = array(array());
//		$dbReq = $results->fetchAll(PDO::FETCH_ASSOC);
//		return $dbReq;
//	} catch (Exception $e) {
//		echo $e->getMessage() . ' db.php create_db function';
//		exit;
//	}
//}

// submit checkboxes to be stored in database

// compute progress toward badge

	// required

		// complete all tasks

			// no choices

			// some choices in how to complte task.

				// complete some mandatory, some elective

				// complete only elective, no mandatory

	// elective

		// some choices tree from above?

// display child's progress toward completion of each task and badge.  Probably one of the JavaScript solutions in downloads.

//test function
function hello() {
	echo "hello, World";
}
