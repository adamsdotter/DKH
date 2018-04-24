<?php require('vars.php'); ?>

<!DOCTYPE html>
<html lang="<?php echo $siteLang; ?>" class="no-js">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="<?php echo $metaDescription; ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $metaTitle; ?></title>
        <?php if (isset($canonicalURL)) {
                echo '<link rel="canonical" href="' . $canonicalURL . '">';
            } ?>
        <link rel="shortcut icon" href="<?php echo $images; ?>icons/favicon.ico" />
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $images; ?>icons/favicon-32x32.png" />
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $images; ?>icons/favicon-16x16.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $images; ?>icons/touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo $images; ?>icons/touch-icon-ipad.png">
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $images; ?>icons/touch-icon-ipad-retina.png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,300' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <![endif]-->
        <!--[if lte IE 8]>
            <link rel="stylesheet" type="text/css" href="<?php echo $serverName; ?>/ui/styles/css/oldIE.css" />
            <script type="text/javascript">
                window.isOldIE = true;
            </script>
        <![endif]-->
        <!--[if lt IE 8]>
            <link rel="stylesheet" type="text/css" href="<?php echo $serverName; ?>/ui/styles/css/ie7.css" />
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" type="text/css" href="<?php echo $serverName; ?>/ui/styles/css/dkh.css" />
        <!--<![endif]-->
        <script type="text/javascript" src="<?php echo $scripts; ?>head.js"></script>
    </head>
