<?php
    // Metadata
    $metaTitle = 'Doktor Kom Hem | Husläkarmottagning i Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem är en husläkarmottagning på Lindhagensgatan på Kungsholmen i Stockholm. Hos oss hittar du husläkare och sköterskor med många års erfarenhet.';

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'start'; // To set active in nav
    $pageTitle = 'Din husläkarmottagning på Nya Kungsholmen';
    $pageImg = 'flower.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <p>Doktor Kom Hem är en trevlig liten husläkarmottagning i Hornsberg / Lindhagen på Kungsholmen i Stockholm. Hos oss hittar du husläkare och sköterskor med många års erfarenhet.</p>
                <p>Vi finns på Lindhagensgatan 140-142 och har öppet mån-fre 8.00-17.00.</p>
                <p>Välkommen att kontakta oss för mer information eller tidsbokning på <a href="tel:086569700">08-656 97 00</a>.</p>
                <p>Akut: När vårdcentralen är stängd hänvisar vi till Bromma Akutens jourmottagning på Tunnlandet 1 vid Brommaplan. Telefon <a href="tel:08-50585400">08-505 854 00</a>.</p>
                <p>Varmt välkommen önskar vi på Doktor Kom Hem!</p>
            </div>
            <figure class="page-img">
                <img src="ui/images/page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/sv/footer.php'); ?>