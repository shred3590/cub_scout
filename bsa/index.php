<?php // http://www.scouting.org/

require_once("../inc/config.php");
$pageTitle = "BSA Home Page";
$section = "bsa";
$description = "Link to BSA home page.";
include_once(ROOT_PATH . "inc/header.php");
?>
<div class="container">
    <h1>Boy Scouts of America's Site</h1>
    <p>BSA's web site is the offical source of information for all things scouting.</p>        </div>
<div class="myiframe">
    <iframe sandbox="allow-same-origin allow-top-navigation allow-forms allow-scripts" src="http://www.scouting.org/"></iframe>
</div>
<?php
include_once(ROOT_PATH . "inc/footer.php");

?>


