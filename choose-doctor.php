<?php
    // Metadata
    $metaTitle = 'Vårdval Stockholm | Doktor Kom Hem Family doctor in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem is a genuine family practice in Hornsberg / Lindhagen at Kungsholmen in Stockholm. Here you\'ll find general practitioners and nurses with many years of experience';
    $canonical = 'choose-doctor';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'vardval'; // To set active in nav
    $pageTitle = 'Vårdval Stockholm - Choose Your Doctor/Practice';
    $pageImg = 'detalj.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <div class="cushycms">
                    <p>In Stockholm you can choose which family practice you would like to belong to.</p>
                    <p>If you choose Doktor Kom Hem as your medical practice you will need to fill in the form below "Vårdvalsblanketten". You can also come to us in person and we will help you to fill out the form.</p>
                </div>
                <ul>
                    <li><a href="<?php echo $docs; ?>vardvalsblankett_huslakare_vuxen.pdf" target="_blank">Listningsblankett Adults (Swedish)</a></li>
                    <li><a href="<?php echo $docs; ?>vardvalsblankett_huslakare_ungdom_barn.pdf" target="_blank">Listningsblankett Children/Youth under 18 yrs (Swedish)</a></li>
                </ul>
                <div class="cushycms">
                    <p>When the form is printed and filled out, please send it to our address:</p>
                    <p>
                        Doktor Kom Hem <br>
                        Lindhagensgatan 140-142 <br>
                        112 15 Stockholm <br>
                    </p>
                    <p>You can also choose us at Vårdguiden, under "Mina vårdkontakter". In "Mina Vårdval" select / change your family doctor or clinic.</p>
                </div>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/en/footer.php'); ?>