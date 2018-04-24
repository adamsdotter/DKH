<?php
    // Metadata
    $metaTitle = 'Boka tid | Doktor Kom Hem Husläkarmottagning, på Kungsholmen i Stockholm';
    $metaDescription = 'Välkommen att boka tid på vår husläkarmottagning på Lindhagensgatan 140-142. Tidsbokning görs per telefon 08-6569700.'; 
    $canonical = 'tidsbokning';

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
            <div class="page-content cushycms"><p><b>Tr&ouml;tt p&aring; l&aring;nga v&auml;ntetider? &ndash; Boka en tid hos oss!</b></p>

<p>B&auml;sta s&auml;ttet att boka en tid hos oss &auml;r att ringa:</p>

<p class="large"><a href="tel:08-6569700">08-656 97 00</a></p>

<p>&Ouml;ppet m&aring;ndag - fredag: 08:00-17:00</p>

<p>Vi har ingen drop-in mottagning. V&auml;nligen ring v&aring;r v&auml;xel vid 08-tiden d&aring; vi sl&auml;pper akuttiderna f&ouml;r dagen.</p>

<p>Hembes&ouml;k g&ouml;rs endast till Doktor Kom Hems listade patienter p&aring; Kungsholmen.</p>

<p>Fr.o.m januari 2015 har Stockholms Läns Landsting beslutat att avbokning av besök ska ske senast 24 timmar innan utsatt besökstid. Avbokas besökstiden mindre än 24 timmar innan utsatt tid, debiteras ordinarie patientavgift. Detta gäller även barn och ungdomar under 18 år samt patienter med frikort. Avbokningar tas endast emot via telefon eller via "Mina vårdkontakter", inte via mail. När mottagningen är stängd lämnas meddelande på telefonsvararen.</p>

<p>V&auml;lkommen!</p></div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/sv/footer.php'); ?>