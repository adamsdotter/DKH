<?php
    // Metadata
    $metaTitle = 'About Doktor Kom Hem | Family doctor in Hornsberg/Lindhagen, Kungsholmen Stockholm';
    $metaDescription = 'Doktor Kom Hem is a genuine family practice in Hornsberg / Lindhagen at Kungsholmen in Stockholm. Here you\'ll find general practitioners and nurses with many years of experience';
    $canonical = 'about';

    // Page specifict
    $siteLang = 'en';
    $pageName = 'about'; // To set active in nav
    $pageTitle = 'About Doktor Kom Hem';
    $pageImg = 'korridor.jpg';
?>

<?php require_once('assets/head.php'); ?>
    <?php require_once('assets/en/header.php'); ?>
        <main class="main container--full bg">
            <h1><?php echo $pageTitle; ?></h1>
            <div class="page-content cushycms"><p>Here at Doktor Kom Hem, you will meet friendly doctors and nurses with many years of experience.</p>

<p>We who work at the clinic:</p>

<ul class="staff color-box">
	<li><strong>Dr. Ewabritt Andersson</strong>, manager, general practitioner</li>
	<li><strong>Dr. Kadir Kakili</strong>, general practitioner</li>
	<li><strong>Dr. Eva Maria Lundell</strong>, general practitioner</li>
	<li><strong>Magdalena &Aring;senblom</strong>,&nbsp;licensed district- and diabetes nurse</li>
	<li><strong>Kerstin Eklund</strong>, licensed district nurse</li>
	<li><strong>Maria Rollstedt</strong>, licensed nurse</li>
	<li><strong>Malin K&auml;llgren</strong>, licensed&nbsp;nurse</li>
	<li><strong>Inger Hagstr&ouml;m</strong>, licensed psychotherapist, CBT</li>
	<li><strong>Pascal Andersson</strong>, receptionist</li>
</ul>

<h2>Why this name on a family practice?</h2>

<p>&quot;Doktor Kom Hem&quot; means &quot;Doctor Come Home&quot; in Swedish. We know how valuable a home visit can be, both for security and personal contact. Some people may have difficultyies getting to and from the clinic, elder people as well as busy families.</p>

<p>Our ambition is to provide plenty of room for a home visits for our listed patients at Kungsholmen. But we are also, despite the name, a completely ordinary Family Practice.</p>
</div>
            <figure class="page-img">
                <img src="<?php echo $images; ?>page-img/<?php echo $pageImg; ?>" alt="" />
            </figure>
        </main>

<?php require_once('assets/en/footer.php'); ?>