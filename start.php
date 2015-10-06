<?php
    // Metadata
    $metaTitle = 'Doktor Kom Hem | Family doctor in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem is a genuine family practice in Hornsberg / Lindhagen at Kungsholmen in Stockholm. Here you\'ll find general practitioners and nurses with many years of experience';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'start'; // To set active in nav
    $pageTitle = 'Your family doctor at Kungsholmen';
    $pageImg = 'flower.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <p>Doktor Kom Hem is a genuine family practice in Hornsberg / Lindhagen at Kungsholmen in Stockholm. Here you'll find general practitioners and nurses with many years of experience.</p>
                <p>We are located on Lindhagensgatan 140-142 and are open Mon-Fri 8.00-17.00.</p>
                <p>Welcome to contact us for more information or to book an appointment on <a href="tel:+4686569700">+46 (0) 8-656 97 00</a>.</p>
                <p>Emergency: When our clinic is closed, we recommend you to go to Bromma Akuten jourmottagning at Brommaplan. Phone: <a href="tel:+468-50585400">+46 (0) 8-505 854 00</a> Address: Tunnlandet 1.</p>
                <p>A warm welcome from us at Doktor Kom Hem!</p>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/en/footer.php'); ?>