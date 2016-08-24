
    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

<!-- HEADER -->
<header id="header">

    <!-- HEADER TOP -->
    <div class="header_top">
        <div class="container">
            <div class="header_left float-left">
                <span><i class="hillter-icon-cloud"></i> <?php global $weather; echo $weather; ?></span>
                <span><i class="hillter-icon-location"></i> Zrtava Fasizma 136, 85310 Budva, Montenegro</span>
                <span><i class="hillter-icon-phone"></i> +49 176 6789 5189</span>
            </div>
            <div class="header_right float-right">

                <div class="dropdown language">
                    <span class="uppercase"><?php echo $lang; ?>&nbsp;<img width="14" src="/images/flags/<?php echo $lang; ?>.png"></span>

                    <ul>
					<?php foreach ($languages as $value) { ?>
                       <li<?php if($lang == $value) echo ' class="active" '; ?>><a class="uppercase" href="/<?php echo $value; ?>/"><?php echo $value; ?>&nbsp;<img width="14" src="/images/flags/<?php echo $value; ?>.png"></a></li>
                    <?php }  ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- END / HEADER TOP -->

    <!-- HEADER LOGO & MENU -->
    <div class="header_content" id="header_content">

        <div class="container">
            <!-- HEADER LOGO -->
            <div class="header_logo">
                <a href="/<?php if($lang != DEFAULT_LANG) echo $lang; ?>"><img src="/images/logo-header.png" alt=""></a>
            </div>
            <!-- END / HEADER LOGO -->

            <!-- HEADER MENU -->
            <nav class="header_menu">
                <ul class="menu">
                    <li><a href="/<?php if($lang != DEFAULT_LANG) echo $lang."/"; ?>"><?php echo $langs['home']; ?></a></li>
                    <li><a href="/<?php if($lang != DEFAULT_LANG) echo $lang."/"; ?>about"><?php echo $langs['about']; ?></a></li>
                    <li><a href="/<?php if($lang != DEFAULT_LANG) echo $lang."/"; ?>gallery"><?php echo $langs['gallery']; ?></a></li>
                    <li><a href="/<?php if($lang != DEFAULT_LANG) echo $lang."/"; ?>budva"><?php echo $langs['budva']; ?></a></li>
                    <li><a href="/<?php if($lang != DEFAULT_LANG) echo $lang."/"; ?>guestbook"><?php echo $langs['guestbook']; ?></a></li>
                    <li><a href="/<?php if($lang != DEFAULT_LANG) echo $lang."/"; ?>contact"><?php echo $langs['contact']; ?></a></li>
                </ul>
            </nav>
            <!-- END / HEADER MENU -->

            <!-- MENU BAR -->
            <span class="menu-bars">
                <span></span>
            </span>
            <!-- END / MENU BAR -->

        </div>
    </div>
    <!-- END / HEADER LOGO & MENU -->

</header>
<!-- END / HEADER -->
