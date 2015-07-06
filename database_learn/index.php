<?php
//This file is to test returns and formatting for arrays

require_once('../inc/config.php');


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
</div>

<?php
require(ROOT_PATH . 'inc/footer.php');
?>
