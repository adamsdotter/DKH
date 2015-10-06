<?php
    function getSecondURL($page){
        $scndURL = 'http://';
        if($page == 'one') {$scndURL .= $_SERVER["SERVER_NAME"].'/'.'welcome.php';}
        if($page == 'two') {$scndURL .= $_SERVER["SERVER_NAME"].'/'.'about.php';}
        if($page == 'three') {$scndURL .= $_SERVER["SERVER_NAME"].'/'.'appointments.php';}
        if($page == 'four') {$scndURL .= $_SERVER["SERVER_NAME"].'/'.'patient-fees.php';}
        if($page == 'five') {$scndURL .= $_SERVER["SERVER_NAME"].'/'.'contact.php';}
        if($page == 'six') {$scndURL .= $_SERVER["SERVER_NAME"].'/'.'choose-doctor.php';}

        return $scndURL;
    }
?>

    <ul class="site-lang">
        <li>(($lang == 'sv') ? '<img src="../ui/images/flag-sv.gif" alt="Svenska flaggan" />' : '<a href="<?php echo getSecondURL($page); ?>"><img src="images/flag-sv.gif" alt="Svenska flaggan" /></a>')</li>
        <li>(($lang == 'sv') ? '<a href="'.getSecondURL($page).'"><img src="images/flag-en.gif" alt="English flag" /></a>' : '<a href="'.$pageURL.'"><img src="images/flag_en.gif" alt="English flag" /></a>')</li>
    </ul>
