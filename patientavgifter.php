<?php
    // Metadata
    $metaTitle = 'Patientavgifter | Doktor Kom Hem Husläkarmottagning, i Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Här finner ni patientavgifter hos Doktor Kom Hem. Sakas något går det bra att ringa vår växel för mer info. 08-6569700.';
    $canonical = 'patientavgifter';

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'prices'; // To set active in nav
    $pageTitle = 'Patientavgifter';
    $pageImg = 'teddy.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="price-list">
                <h3>Besök</h3>
                <div class="cushycms">
                    <dl class="color-box">
                        <dt>Läkarbesök</dt><dd>200 kr</dd>
                        <dt>Läkarbesök &lt; 18 år</dt><dd>Gratis</dd>
                        <dt>Hembesök läkare</dt><dd>300 kr</dd>
                        <dt>DSK-besök</dt><dd>100 kr</dd>
                        <dt>Kurator första besök</dt><dd>100 kr</dd>
                        <dt>Kurator återbesök</dt><dd>100 kr</dd>
                        <dt>Telefonrecept</dt><dd>Gratis</dd>
                        <dt>Vaccination Influensa</dt><dd>200 kr</dd>
                        <dt>Vaccination Pneumokock</dt><dd>300 kr</dd>
                        <dt>Hälsokontroll</dt><dd>2000 kr</dd>
                        <dt>TBE-vaccin</dt><dd>300 kr</dd>
                    </dl>
                </div>
            </div>
            <div class="price-list">
                <h3>Intyg</h3>
                <div class="cushycms">
                    <dl class="color-box">
                        <dt>Körkortsintyg</dt><dd>700 kr</dd>
                        <dt>Adoption inkl HIV-test</dt><dd>800 kr</dd>
                        <dt>Läkarintyg</dt><dd>500 kr</dd>
                        <dt>Friskhetsintyg</dt><dd>700 kr</dd>
                        <dt>Studier utomlands</dt><dd>700 kr</dd>
                        <dt>Försäkringsintyg</dt><dd>1400 kr</dd>
                        <dt>Intyg för avbokning av resa</dt><dd>500 kr</dd>
                        <dt>Förstadagsintyg</dt><dd>313 kr **</dd>
                        <dt>Innehavande av medicin under flygning</dt><dd>313 kr</dd>
                    </dl>
                </div>
                <small>** Avgift för läkarbesök med bedömning tillkommer.</small>
            </div>
            <div class="page-content cushycms">
                <h2>Avbokning</h2>
                <p>
                    Fr.o.m Januari 2015 har Stockholms Läns Landsting beslutat att 
                    <i>avbokning av besök måste ske senast 24 timmar innan utsatt besökstid</i>, 
                    för att man inte ska debiteras för besöket. Därefter debiteras ordinarie patientavgift. 
                    Detta gäller även barn och ungdomar under 18 år samt patienter med frikort.
                </p>
                <h2>Högkostnadsskydd och frikort</h2>
                <p>
                    Högkostnadsskydd innebär att du inte behöver betala mer än ett maxbelopp i patientavgifter under ett år. 
                    När du har uppnått maxbeloppet får du ett frikort som innebär kostnadsfri vård. 
                    Frikortet gäller tolv månader efter den dag då du gjorde det första besöket.
                </p>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/sv/footer.php'); ?>