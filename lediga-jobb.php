<?php
    // Metadata
    $metaTitle = 'Jobba på Doktor Kom Hem | Husläkarmottagning på Kungsholmen i Stockholm';
    $metaDescription = 'Vill du jobba på Doktor Kom Hem? Vi söker alltid kompetent personal! Varmt välkommen att höra av dig till pascal.andersson@doktorkomhem.nu';
    $canonical = 'lediga-jobb';

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'jobs'; // To set active in nav
    $pageTitle = 'Lediga jobb';
    $pageImg = 'korridor.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content cushycms"><h3>Vill du jobba p&aring; Doktor Kom Hem?</h3>

<p>Vi &auml;r alltid p&aring; jakt efter duktiga medarbetare!</p>
<p>
	Just nu söker vi en distriktssköterska då vår nuvarande distriktssköterska snart ska gå på föräldraledighet.<br />
	Vänligen se <a href="https://www.arbetsformedlingen.se/For-arbetssokande/Hitta-jobb/Platsbanken/annonser/22857888" title="Visa annons" target="_blank">vår annons på Arbetsförmedlingen</a>.
</p>
<p>&Auml;r du intresserad av att jobba hos oss &ndash; tveka inte att h&ouml;ra av dig till <a href="mailto:jobb@doktorkomhem.nu?subject=Jobbans%C3%B6kan%3A%20">jobb@doktorkomhem.nu</a>!</p>
</div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>
<?php require_once('assets/sv/footer.php'); ?>
