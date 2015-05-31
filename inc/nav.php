<?php
//include("config.php");
?>
    <nav>
        <a href="<?php echo BASE_URL; ?>"><img class="branding" src="<?php echo BASE_URL; ?>img/logo_nb.png" height="100px" width="100px"/></a>
        <ul class="nav-wrapper">
            <?php

              /* list items with a class of "on" indicate the current section; those links
               * are underlined in the CSS to communicate that back to the site visitor;
               * the $section variable is set in each individual file
               */
            ?>
            <li class="dens <?php if ($section == "dens") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>dens/">Den Structure</a></li>
            <li class="camps <?php if ($section == "camps") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>camps/">Summer Camps</a></li>
            <li class="calendar <?php if ($section == "calendar") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>calendar/">Calendar</a></li>
            <li class="photos <?php if ($section == "photos") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>photos/">Pics & Flics</a></li>
            <li class="contact <?php if ($section == "contact") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>contact/">Contact</a></li>
            <li class="bsa <?php if ($section == "bsa") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>bsa/">BSA</a></li>
            <li class="council <?php if ($section == "council") { echo "on"; } ?>"><a href="<?php echo BASE_URL; ?>council/">Cascade Pacific Council</a></li>

        </ul>
    </nav>


