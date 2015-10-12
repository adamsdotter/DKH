<?php
    // Metadata
    $metaTitle = 'Vårdval Stockholm | Doktor Kom Hem Husläkarmottagning i Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Välkommen att lista dig hos Doktor Kom Hem! Här finner ni listningsblanketter och information om Vårdval Stockholm. ';
    $canonical = 'vardval-stockholm';

    // Page specifict
    $siteLang = 'sv';
    $pageName = 'vardval'; // To set active in nav
    $pageTitle = 'Vårdval Stockholm';
    $pageImg = 'detalj.jpg';
?>

<?php require_once('assets/head.php'); ?>
<?php require_once('assets/sv/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content">
                <div class="cushycms">
                    <p>I Stockholm kan du själv välja vilken mottagning du vill tillhöra.</p>
                    <p>Du är välkommen att lista dig hos oss. Detta gör Du genom att fylla i Vårdvalsblanketten, som finns att hämta på vår mottagning alternativt att ladda ner här:</p>
                </div>
                <ul>
                    <li><a href="<?php echo $docs; ?>vardvalsblankett_huslakare_vuxen.pdf" target="_blank">Listningsblankett Vuxna</a></li>
                    <li><a href="<?php echo $docs; ?>vardvalsblankett_huslakare_ungdom_barn.pdf" target="_blank">Listningsblankett Barn/Ungdom under 18 år</a></li>
                </ul>
                <div class="cushycms">
                    <p>När blanketten är utskriven och ifylld lämnas den i receptionen alternativt skickas till vår adress:</p>
                    <p>
                        Doktor Kom Hem <br>
                        Lindhagensgatan 140-142 <br>
                        112 15 Stockholm <br>
                    </p>
                    <p>Du kan också lista dig via Vårdguiden, Mina Vårdkontakter. Under "Mina Vårdval" väljer/byter du husläkare eller mottagning.</p>
                </div>
            </div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>
<?php require_once('assets/sv/footer.php'); ?>