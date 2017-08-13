<nav id="main-nav" class="navbar navbar-default"> <!-- navbar-fixed-top -->
    <div class="container-fluid">

            <a href="<?php bloginfo('url') ?>" class="navbar-brand" href="#"><h1>Bootstrap theme</h1></a>
            <div class="burger-holder">
                <span class="menu-word">MENU</span>
                <span id="overlay_trigger" class="page-header__menu"><span>Menu</span></span>
            </div>
             <div class="clear"></div>

        
    </div>
</nav>

<div id="page-overlay" class="page-overlay">
           <?php wp_nav_menu( array(  
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 1,
                'container'         => 'div'
            )); ?>
        </div>