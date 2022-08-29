<html>
    <head>
        <style>
            :root {
                --main: <?php echo get_field('separate_farbe',get_the_id()) ? get_field('separate_farbe', get_the_id()):get_field('color-main','option');?>;
                --secondary: <?php the_field('color-secondary','option');?>;
            }
        </style>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php the_field('logo','option');?>">
    </head>
    <body <?php body_class();?>>
    <header  role="header" class="header">
        <a class="logo" href="/"><img src="<?php the_field('logo','option');?>" alt="Logo" /></a>
        
        <div id="hamburger" style="z-index:999999"  class="hamburger-container  <?php if(get_field('hamburger_backdrop', 'option')) { echo 'backdrop';}?>">
            <div class="wrap">
            <span class="hamburger-icon"></span>
        </div>
        </div>
        <style>
.sub-menu {
    margin-top:25px!important;
}
.header .menu-wrapper ul.sub-menu li {
    opacity:0.5;
    margin-bottom:25px!important;
}

            </style>
        <div  style="z-index:1000000" class="menu-wrapper">
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