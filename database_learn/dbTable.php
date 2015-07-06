<?php
require(ROOT_PATH . 'database_learn/db.php');
require(ROOT_PATH . 'database_learn/dbCall.php');
//step through array and display in table
//			$scouts = array(array());
$scouts = full_scout_list();
//var_dump($scouts);
	$t = '<th class="heading">Name</th><th class="heading">Den</th><th class="heading">Bobcat</th><th class="heading">Tiger</th><th>Wolf</th><th class="heading">Bear</th><th class="heading">Webelo</th><th class="heading">Arrow of Light</th>';

foreach ($scouts as $scout) {
	$t = $t . '<tr>';
	$t = $t . '<th class="row">' . $scout["FirstName"] . ' ' . $scout["LastName"] . '</th>';
	$t = $t . '<td> ' . $scout["Den"] . '</td>';
	$t = $t . '<td>' . $scout['Bobcat'] . '</td>';
	$t = $t . '<td>' . $scout['Wolf'] . '</td>';
	$t = $t . '<td>' . $scout['Bear'] . '</td>';
	$t = $t . '<td>' . $scout['Webelo'] . '</td>';
	$t = $t . '<td>' . $scout['Arrow'] . '</td>';
	$t = $t . '</tr>';
}
