<?php
    // Metadata
    $metaTitle = 'About Doktor Kom Hem | Family doctor in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem is a genuine family practice in Hornsberg / Lindhagen at Kungsholmen in Stockholm. Here you\'ll find general practitioners and nurses with many years of experience';
    $canonical = 'about';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'about'; // To set active in nav
    $pageTitle = 'About Doktor Kom Hem';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content no-image cushycms">
              <p>Here at Doktor Kom Hem, you will meet friendly doctors and nurses with many years of experience.</p>
            </div>

            <div class="page-content no-image cushycms">
              <h2>Why this name on a family practice?</h2>
              <p>&quot;Doktor Kom Hem&quot; means &quot;Doctor Come Home&quot; in Swedish. We know how valuable a home visit can be, both for security and personal contact. Some people may have difficultyies getting to and from the clinic, elder people as well as busy families.</p>
              <p>Our ambition is to provide plenty of room for a home visits for our listed patients at Kungsholmen. But we are also, despite the name, a completely ordinary Family Practice.</p>
            </div>
            <div class="page-content no-image cushycms">
              <h2>Our staff</h2>
            </div>
            <?php require_once('assets/en/staff.php'); ?>
        </main>

<?php require_once('assets/en/footer.php'); ?>
