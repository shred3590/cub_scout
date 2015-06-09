<?php
require_once("../inc/config.php");
$pageTitle = "Pack 198 Calendar";
$section = "calendar";
$description = "Pack 198's Calendar of upcoming events.";
include_once(ROOT_PATH . "inc/header.php");
?>
<div class="main-container">
    <h1>Pack 198's Calendar of Upcoming Events</h1>
    <div class="cal">
        <iframe class="google_cal large" src="https://www.google.com/calendar/embed?src=c7mva2tmnsivjrp00f7n7rgo0o%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        <iframe class="google_cal small" src="https://www.google.com/calendar/embed?mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=c7mva2tmnsivjrp00f7n7rgo0o%40group.calendar.google.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
    </div>
    <p class="yellow">Please <a href=<?php echo '"' . BASE_URL . 'contact/"' ?> >contact us </a> if there are any upcoming events that are not on our calendar.</p>
</div>

<?php include_once(ROOT_PATH . "inc/footer.php"); ?>
