    <html>
        <head>
            <title>
            </title>

            <?php wp_head(); ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <img src="<?php echo get_stylesheet_directory_uri(), "/logo2.jpg" ?>" height="30" alt="" class= "mr-5" loading="lazy"></img>
           
       
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- buton care deschide navbar-ul pe ecrane mici (butonul nu apare pe ecrane mari)-->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'depth' => 2,
            'container' => false,
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'navbar-nav mr-auto',
            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
            'walker' => new WP_Bootstrap_Navwalker()
            )); 
             ?>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
    
            </div>
            </nav>
        </head>
    <body>
    
    </body>

</html>