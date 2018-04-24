<?php
    // Metadata
    $metaTitle = 'Appointments at Doktor Kom Hem | Family practice in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Tired of long waiting times? - Book an appointment with Doktor Kom Hem!';
    $canonical = 'appointments';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'book'; // To set active in nav
    $pageTitle = 'Appointments';
    $pageImg = 'clock.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content cushycms"><p><b>Tired of long waiting times? - Book an appointment with us!</b></p>

<p>Please call our reception to make an appointment:</p>

<p class="large"><a href="tel:+46-86569700">+46 (0) 8-656 97 00</a></p>

<p>Open Monday - Friday: 08:00-17:00</p>

<p>We no longer have any drop-in appointments. Please call our reception at 08.00 am, this is when we release the emergency times for&nbsp;the day.</p>

<p>Home visits are only made to our listed patients at Kungsholmen.</p>

<p>Welcome!</p>
</div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/en/footer.php'); ?>