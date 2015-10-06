<?php
    // Metadata
    $metaTitle = 'Jobba på Doktor Kom Hem | Husläkarmottagning på Kungsholmen i Stockholm';
    $metaDescription = 'Vill du jobba på Doktor Kom Hem? Vi söker alltid kompetent personal! Varmt välkommen att höra av dig till pascal.andersson@doktorkomhem.nu';

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'jobs'; // To set active in nav
    $pageTitle = 'Lediga jobb';
    $pageImg = 'tittut.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <p>Vill du jobba på Doktor Kom Hem? Just nu söker vi:</p>
                <h2>
                    Specialist i Allmänmedicin / Vik. Distriksläkare
                </h2>
                <p>Vi söker dig som vill jobba på en liten och välfungerande husläkarmottagning på Kungsholmen.</p>
                <p>
                    Vi har ett ständigt växande patientunderlag med många barnfamiljer och unga patienter. 
                    Vår hemsjukvård är liten, vi gör hembesök när det behövs.
                </p>
                <p>
                    2011 flyttade vi in i helt nybyggda lokaler. Mottagningen ligger invid Hornsbergsstrand, 
                    ett nytt och lättillgängligt område på Kungsholmen med många restauranger i omgivningen.
                </p>
                <p>
                    Hos oss jobbar kompetent och professionell personal som strävar efter att ge den bästa vården 
                    och ett trevligt bemötande till alla patienter. 
                    På mottagningen är vi två sjuksköterskor och en distriktssköterska, en psykoterapeut och en receptionist. 
                    Just nu har vi en ordinarie- och en vikarierande specialist i allmänmedicin.
                </p>
                <p>
                    Vill du vara med och utveckla denna välfungerade mottagning är du varmt välkommen att höra av dig till  
                    Pascal Andersson, <a href="mailto:pascal.andersson@doktorkomhem.nu">pascal.andersson@doktorkomhem.nu</a>
                </p>
            </div>
            <figure class="page-img">
                <img src="ui/images/page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>
<?php require_once('assets/sv/footer.php'); ?>