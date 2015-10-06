<?php
    // Metadata
    $metaTitle = 'Patient fees | Doktor Kom Hem Family doctor in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem is a genuine family practice in Hornsberg / Lindhagen at Kungsholmen in Stockholm. Here you\'ll find general practitioners and nurses with many years of experience';
    $canonical = 'patient-fees';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'prices'; // To set active in nav
    $pageTitle = 'Patient fees';
    $pageImg = 'teddy.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="price-list">
                <h3>Visits</h3>
                <dl>
                    <dt>Visit doctor</dt><dd>200 kr</dd>
                    <dt>Visit doctor &lt; 18 yrs</dt><dd>Free</dd>
                    <dt>Home visis by doctor</dt><dd>300 kr</dd>
                    <dt>Visit nurse</dt><dd>100 kr</dd>
                    <dt>Curator first visit</dt><dd>100 kr</dd>
                    <dt>Curator revists</dt><dd>100 kr</dd>
                    <dt>Prescription by phone</dt><dd>Gratis</dd>
                    <dt>Influenza vaccination</dt><dd>200 kr</dd>
                    <dt>Pneumococcal vaccination</dt><dd>300 kr</dd>
                    <dt>Health checkup</dt><dd>2000 kr</dd>
                    <dt>TBE vaccine</dt><dd>300 kr</dd>
                </dl>
            </div>
            <div class="price-list">
                <h3>Certificates</h3>
                <dl class="price-list">
                    <dt>Driving license</dt><dd>700 kr</dd>
                    <dt>Adoption + HIV test</dt><dd>800 kr</dd>
                    <dt>Health Certificate</dt><dd>700 kr</dd>
                    <dt>Studying abroad</dt><dd>700 kr</dd>
                    <dt>Seafarers</dt><dd>700 kr *</dd>
                    <dt>Insurance Certificate</dt><dd>1400 kr</dd>
                    <dt>Cancelation of trip</dt><dd>500 kr</dd>
                    <dt>First Day Declaration</dt><dd>313 kr **</dd>
                </dl>
                <small>* In case of chest X-ray, an additional fee of 600 SEK will apply.</small>
                <small>** The fee for a physician visit will apply.</small>
            </div>
            <div class="page-content">
                <h2>Cancellation</h2>
                <p>
                    In January 2015, the Stockholm County Council (Stockholms Läns Landsting) decided that <i>cancellations 
                    must be made 24 hours prior to scheduled appointment</i>, to avoid being charged for the appointment. 
                    Thereafter, ordinary patient fees will be charged. This also applies to children and young people under 18 
                    and patients carrying a "frikort".
                </p>
                <h2>Högkostnadsskydd and frikort</h2>
                <p>
                    Högkostnadsskydd (high-cost) means that you do not have to pay more than a maximum amount of 
                    patient fees during one year. Once you have reached the maximum amount you will receive a Frikort (free pass), 
                    which provides free health care. The Frikort is valid for twelve months after the day you made the first visit.
                </p>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/en/footer.php'); ?>