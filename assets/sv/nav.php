    <div class="nav-toggler">
        <button type="button" id="toggle-nav">Meny</button>
    </div>
    <nav class="site-nav">
        <div class="container--full">
            <ul id="site-menu" accesskey="2">
                <li <?php if($pageName === 'start') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/" title="Startsidan">Start</a>
                </li>
                <li <?php if($pageName === 'about') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/om-oss" title="Om oss">Om oss</a>
                </li>
                <li <?php if($pageName === 'book') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/tidsbokning" title="Tidsbokning">Tidsbokning</a>
                </li>
                <li <?php if($pageName === 'prices') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/patientavgifter" title="Patientavgifter">Patientavgifter</a>
                </li>
                <li <?php if($pageName === 'contact') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/kontakt" title="Kontakta oss">Kontakt</a>
                </li>
                <li <?php if($pageName === 'jobs') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/lediga-jobb" title="Jobba hos oss">Lediga jobb</a>
                </li>
                <li <?php if($pageName === 'vardval') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/vardval-stockholm" title="Vårdval Stockholm">Vårdval Stockholm</a>
                </li>
            </ul>
        </div>
    </nav>