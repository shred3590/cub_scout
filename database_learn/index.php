<?php
//This file is to test returns and formatting for arrays

require_once('../inc/config.php');

require(ROOT_PATH . 'database_learn/db.php');
require(ROOT_PATH . 'database_learn/dbCall.php');
//step through array and display in table
			$scouts = array(array());
			$scouts = full_scout_list();
var_dump($scouts);
			foreach ($scouts as $scout) {
				$t = '';
				$t = '<tr>';
				$t = $t . '<td>' . $scout["FirstName"] . ' ' . $scout["LastName"] . '</td>';
				$t .= '<td> ' . $scout["Den"] . '</td>';
				$t = $t . '</tr>';
			}
require(ROOT_PATH . 'inc/header.php');
?>
<div class="main-container">
	<?php

	?>
	<table>
		<tbody>
<?php
			echo $t;
?>
		<tr>
			<td><?php hello(); ?></td>
		</tr>
		</tbody>
	</table>
</div>

<?php
require(ROOT_PATH . 'inc/footer.php');
?>
