<html>
    <head>
        <style>
            :root {
                --main: <?php the_field('color-main','option');?>;
                --secondary: <?php the_field('color-secondary','option');?>;
            }
        </style>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo get_bloginfo('name');?> | <?php wp_title(''); ?></title>
    </head>
    <body <?php body_class();?>>
    <header role="header" class="header">
        <a class="logo" href="/"><img src="<?php the_field('logo','option');?>" alt="Logo" /></a>
        <div id="hamburger" class="hamburger-container">
            <span class="hamburger-icon"></span>
        </div>
        <div class="menu-wrapper">
            <div class="inner">
                <img id="hamburger-close" src="<?php echo get_stylesheet_directory_uri().'/assets/images/close.svg';?>" alt="Schließen" />
                <?php 
                    wp_nav_menu( 
                        array( 
                            'theme_location' => 'main-menu',
                            'container_class' => 'menu-container'
                        ) 
                    ); 
                ?>

            </div>
        </div>
    </header>
    <main class="main">