<?php
require_once("inc/config.php");
$pageTitle = "Pack 198";
$section = "home";
$description = "Pack 198 is a Cub Scout Pack associated with West Tualatin View Elementary School in the Portland/Beaverton area of Washington County Oregon";

include_once(ROOT_PATH . "inc/header.php");
?>
<div class="main-container">
	<h1>Pack 198</h1>
	<div class="slider autoplay">
		<div><?php include(ROOT_PATH . "slider/slide1.php") ?></div>
		<div><?php include(ROOT_PATH . "slider/slide2.php") ?></div>
		<div><?php include(ROOT_PATH . "slider/slide3.php") ?></div>
		<div><?php include(ROOT_PATH . "slider/slide4.php") ?></div>
		<div><?php include(ROOT_PATH . "slider/slide5.php") ?></div>
	</div>
	<script src="<?php echo BASE_URL ?>slick/slick.js"></script>
		<p>Pack 198, located in unincoporated Washington County Oregon, has been in continuous existence from shortly after the school opened in the 1950s.  It has developed a rich tradition of a welcoming pack with a tight community between the kids and their parents.  There are many possible events for the boys to participate in, although none of them are required.  Our goal to provide a fun, safe environment where the boys learn the valuable life lessons taught through the Cub Scout and Boy Scout programs.  We hope this site provides a valuable resource about the pack.</p>
	<br>
		<p>If you want more information about the pack or wish to contact us for any reason, please fill out the <a href="<?php echo BASE_URL ?>contact">contact form</a> and we will get in contact with you as soon as possible.</p>
</div>

<?php include_once(ROOT_PATH . "inc/footer.php"); ?>
