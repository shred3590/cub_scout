<?php
require_once("../inc/config.php");
$pageTitle = "Cascade Pacific Council";
$section = "cpc";
$description = "Link to Cascade Pacific Council's home page.";
include_once(ROOT_PATH . "inc/header.php");
?>
<div class="main-container">
    <h1>Cascade Pacific Council's Site</h1>
    <p>Boy Scouts has a national organization.  Each region is divided into councils.  The council for our region is the Cascade Pacific Council.  Its web site is a good source of official Boy Scout information.</p>

    <div class="myiframe">
        <iframe sandbox="allow-same-origin allow-top-navigation allow-forms allow-scripts" src="http://www.cpcbsa.org/"></iframe>
    </div>
</div>
<?php
include_once(ROOT_PATH . "inc/footer.php");

?>


