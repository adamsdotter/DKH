<?php
    // Metadata
    $metaTitle = 'Kontakta Doktor Kom Hem | Husläkarmottagning på Kungsholmen i Stockholm';
    $metaDescription = 'Vill du kontakta eller boka en tid hos Doktor Kom Hem? Ring vår växel på nummer 08-6569700.';

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'contact'; // To set active in nav
    $pageTitle = 'Kontakt';
    $pageImg = 'dkh.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <p>Ni finner oss på <a href="https://www.google.se/maps/place/Lindhagensgatan+142,+112+16+Stockholm/@59.339131,18.0058207,17z/data=!4m2!3m1!1s0x465f9d862457ff97:0xcc4def0b1b2972bb" target="_blank" title="Öppna i Google Maps">Lindhagensgatan 140-142</a> på Kungsholmen. Vi har <b>öppet mån-fre 08:00-17:00</b>.</p>
                <p>Om du vill boka en tid hos oss är bästa sättet att ringa vår <b>växel <a href="tel:08-6569700">08-656 97 00</a></b>.</p>
                <p>När vårdcentralen är stängd hänvisar vi till Bromma Akutens jourmottagning vid Brommaplan. Telefon <a href="tel:08-50585400">08-505 854 00</a>, besöksadress Tunnlandet 1, 3tr.
                <p><i>Från och med 1 oktober 2013 går det inte längre att kommunicera per e-post med Doktor Kom Hem.</i> Vi beklagar detta. Anledningen är direktiv från Hälso-och sjukvårdsnämnen i Stockholm då data-/och patientsekretessen ej kan garanteras med denna kommunikationsform. Vi hänvisar till Mina vårdkontakter, telefon 08-656 97 00 och/eller personligt besök.</p>
                <h2>Hitta hit</h2>
                <p>Du tar dig lättast till vår husläkarmottagning med buss 49 eller 56, eller grön t-bana mot Krisitineberg.</p>
                <p>Buss 49 stannar på hållplatsen Nordenflychtsvägen och buss 56 på Franzéngatan. Åker du tunnelbana tar du grön linje till Kristineberg, därefter promenerar du Nordenflychtsvägen ned mot Lindhagensgatan och tar sedan vänster ner på Lindhagensgatan mot vattnet.</p>
            </div>
            <figure class="page-img">
                <img src="ui/images/page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/sv/footer.php'); ?>