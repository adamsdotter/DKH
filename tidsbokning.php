<?php
    // Metadata
    $metaTitle = 'Boka tid | Doktor Kom Hem Husläkarmottagning, på Kungsholmen i Stockholm';
    $metaDescription = 'Välkommen att boka tid på vår husläkarmottagning på Lindhagensgatan 140-142. Tidsbokning görs per telefon 08-6569700.'; 

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'book'; // To set active in nav
    $pageTitle = 'Tidsbokning';
    $pageImg = 'clock.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <p><b>Trött på långa väntetider? – Boka en tid hos oss!</b></p>
                <p>Bästa sättet att boka en tid hos oss är att ringa vår växel:</p>
                <p class="large"><a href="tel:08-6569700">08-656 97 00</a></p>
                <p>Öppet måndag - fredag: 08:00-17:00</p>
                <p>
                    Vi har ingen drop-in mottagning. Vänligen ring vår växel vid 08-tiden då vi släpper akuttiderna för dagen.
                </p>
                <p>Välkommen!</p>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/sv/footer.php'); ?>