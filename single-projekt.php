<?php 
    get_header();?>
    <div class="template">
         <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
        <div class="bild" style="background-image:url(<?php the_field('bild');?>)"></div>
        <div class="content">
            <span class="subline">Projektvorstellung</span>
            <h1 class="headline"><?php the_title();?></h1>
            <div class="text">
                <?php the_field('beschreibung');?>
            </div>
            <div class="info">
                <div class="row">
                    <span class="label">Projektlaufzeit:</span> <?php the_field('projekt_start');?> – <?php the_field('projekt_ende');?>
                </div>
                <div class="row">
                    <span class="label">Kontakt:</span> <?php echo get_field('kontakt');?> | <a href="mailto:<?php the_field('kontakt_email');?>"><?php the_field('kontakt_email');?></a>
                </div>
                <div class="row">
                    <span class="label">Website:</span> <a href="<?php the_field('website');?>" target="_blank"><?php the_field('website');?></a>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    get_footer();