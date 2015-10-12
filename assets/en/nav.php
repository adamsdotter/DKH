    <div class="nav-toggler">
        <button type="button" id="toggle-nav">Menu</button>
    </div>
    <nav class="site-nav">
        <div class="container--full">
            <ul id="site-menu" accesskey="2">
                <li <?php if($pageName === 'start') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/start" title="Startpage">Start</a>
                </li>
                <li <?php if($pageName === 'about') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/about" title="About us">About us</a>
                </li>
                <li <?php if($pageName === 'book') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/appointments" title="Appointments">Appointments</a>
                </li>
                <li <?php if($pageName === 'prices') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/patient-fees" title="Patient fees">Patient fees</a>
                </li>
                <li <?php if($pageName === 'vardval') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/choose-doctor" title="Vårdval Stockholm - choose doctor">Vårdval Stockholm</a>
                </li>
                <li <?php if($pageName === 'contact') echo 'class="active"'; ?>>
                    <a class="site-nav-link" href="/contact" title="Contact">Contact</a>
                </li>
                <li>
                    <a class="icon-flag flag--swe site-nav-link" href="/" title="På svenska"><span >På svenska</span></a>
                </li>
            </ul>
        </div>
    </nav>