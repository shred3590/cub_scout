<?php
require_once("../inc/config.php");
$pageTitle = "Pack 198 Calendar";
$section = "calendar";
$description = "Pack 198's Calendar of upcoming events.";
include_once(ROOT_PATH . "inc/header.php");
?>
<h1>Pack 198's Calendar of Upcoming Events</h1>
<iframe class="google_cal" src="https://www.google.com/calendar/embed?showCalendars=0&amp;showTz=0&amp;mode=MONTH&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ncerumcjl50stmfku8c9q8t5j0%40group.calendar.google.com&amp;color=%23711616&amp;ctz=America%2FLos_Angeles" style=" border-width:0 "  frameborder="0" scrolling="no"></iframe>

<p>Please send us an email if there are any upcoming events that are not on our calendar.</p>
<?php include_once(ROOT_PATH . "inc/footer.php"); ?>
