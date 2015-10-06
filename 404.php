<?php
    // Metadata
    $metaTitle = '';
    $metaDescription = '';

    // Page specifict
    $siteLang = 'sv';
    $pageTitle = 'Oops, 404!';
    $pageImg = '404error.png';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <div class="page-error">
                <h1><?php echo $pageTitle; ?></h1>
                <p>Något gick fel. Prova att börja om från <a href="/">start</a>!</p>
                <a href="/" class="error-link"><img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" /></a>
            </div>
        </main>

<?php require_once('assets/sv/footer.php'); ?>