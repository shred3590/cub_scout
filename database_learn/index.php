<?php
//This file is to test returns and formatting for arrays

require_once('../inc/config.php');
require('Database.php');


require(ROOT_PATH . 'inc/header.php');
?>
<div class="main-container">
	<?php

	?>
	<table>
		<tbody>
<?php
			require(ROOT_PATH . 'database_learn/dbTable.php');
			echo $t;
?>
		</tbody>
	</table>
	<?php
//		var_dump($t);
		echo '<br>';
		$result = array(array());
		$r = new Database();
		$r->dbConnect();
		$results = $r->selectAll('scouts');
		var_dump($results);
		
//	foreach ($scouts as $scout) {
//		echo "<h3>" . $scout['firstName'] . "</h3><br>";
//	}


	?>
</div>

<?php
require(ROOT_PATH . 'inc/footer.php');
?>
