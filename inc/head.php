<?php
// This file is included in the Header ONLY
require_once("config.php");
?>
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $pageTitle; ?></title>
        <link rel="shortcut icon" href="<?php ROOT_PATH . "favicon.ico" ?>" type="image/x-icon">
        <link rel="icon" href="<?php ROOT_PATH . "favicon.ico" ?>" type="image/x-icon">
        <meta name="description" content="<?php $description ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        <link rel="apple-touch-icon" href="apple-touch-icon.png">-->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/main.css">
        <script src="<?php echo BASE_URL; ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
