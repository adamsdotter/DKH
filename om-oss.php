<?php
    // Metadata
    $metaTitle = 'Om Doktor Kom Hem | Husläkarmottagning i Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem är en husläkarmottagning på Lindhagensgatan på Kungsholmen i Stockholm. Hos oss hittar du husläkare och sköterskor med många års erfarenhet.';
    $canonical = 'om-oss';

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'about'; // To set active in nav
    $pageTitle = 'Om Doktor Kom Hem';
    $pageImg = 'korridor.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <p>
                    Hos oss på Doktor Kom Hem möts du av husläkare och sköterskor med många års erfarenhet.
                </p>
                <p>Vi som jobbar på mottagningen är:</p>
                <ul class="staff color-box">
                    <li><strong>Dr. Ewabritt Andersson</strong>, verksamhetschef, specialist i allmänmedicin</li>
                    <li><strong>Dr. Kadir Kakili</strong>, specialist i allmänmedicin</li>
                    <li><strong>Dr. Eva Maria Lundell</strong>, specialist i allmänmedicin</li>
                    <li><strong>Kerstin Eklund</strong>, distriktssköterska</li>
                    <li><strong>Maria Rollstedt</strong>, sjuksköterska</li>
                    <li><strong>Malin Källgren</strong>, sjuksköterska</li>
                    <li><strong>Inger Hagström</strong>, legitimerad psykoterapeut, KBT</li>
                    <li><strong>Pascal Andersson</strong>, receptionist</li>
                </ul>
                <p>Vi har avtal med Landstinget enligt <a href="/vardval-stockholm">Vårdval Stockholm</a>, därför kan du lista dig hos oss. Mer information finner du <a href="/vardval-stockholm">här</a>.</p>
                <h2>Varför detta namn på en husläkarmottagning?</h2>
                <p>
                    Vi vet hur värdefullt ett hembesök kan vara, både för tryggheten och den personliga kontakten.
                    Somliga kan ha svårt att ta sig till mottagningen, det gäller såväl äldre som stressade barnfamiljer.
                </p>
                <p>
                    Vår ambition är att ge god plats för just hembesök åt våra listade patienter. Men vi är också, trots namnet, 
                    en helt vanlig husläkarmottagning som flyttat in på Lindhagensgatan 140-142.
                </p> 
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/sv/footer.php'); ?>