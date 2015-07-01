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

// Create tables if they do not already exist

try {
	$sql ='CREATE TABLE IF NOT EXISTS scouts (
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		FirstName VARCHAR( 50 ) NOT NULL,
		LastName VARCHAR( 50 ) NOT NULL,
		Den VARCHAR( 2 ) NOT NULL,
		Bobcat VARCHAR( 150 ),
		Tiger VARCHAR( 150 ),
		Wolf VARCHAR( 100 ),
		Bear VARCHAR( 100 ),
		Webelo VARCHAR( 100 ),
		Arrow VARCHAR( 100 ),
		Health VARCHAR( 500 ),
		CampMoney DECIMAL(5,2))';
    $db->exec($sql);
	$db->exec("SET NAMES 'utf8mb4'");
//    echo "Created Table.\n";
} catch (Exception $e) {
	echo $e->getMessage() . " Line 37";
	exit;
}

//list database contents with checkboxes
function full_scout_list() {

//	require(ROOT_PATH . "inc/database.php");

	try {
		$results = $db->query("
				SELECT FirstName, LastName, Den, Bobcat, Tiger, Wolf, Bear, Webelo, Arrow, Health, id
				FROM scouts
				ORDER BY Den DESC, LastName");
	} catch (Exception $e) {
		echo $e->getMessage() . " Line 52";
//		exit;
	}
	$scouts = array(array());
	$scouts = $results->fetchAll(PDO::FETCH_ASSOC);
//	$recent = array_reverse($recent);
    return $scouts;
//var_dump($scouts);
}


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
