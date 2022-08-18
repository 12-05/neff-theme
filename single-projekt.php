<?php 
    get_header();
    $color = getProjectColor(get_the_id());
    
    ?>
    <div class="template">
         <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
        <div class="bild" style="background-image:url(<?php the_field('bild');?>)"></div>
        <div class="content">
            <span class="subline" style="color:<?php echo $color;?>">Projektvorstellung</span>
            <h1 class="headline"><?php the_title();?></h1>
            <div class="text">
                <?php the_field('beschreibung');?>
            </div>
            <div class="info">
                <div class="row">
                    <span class="label" style="color:<?php echo $color;?>">Projektlaufzeit:</span> <?php the_field('projekt_start');?> – <?php the_field('projekt_ende');?>
                </div>
                <div class="row">
                    <span class="label" style="color:<?php echo $color;?>">Kontakt:</span> <?php echo get_field('kontakt');?> <?php if( get_field('kontakt_email') ):?>  | <a href="mailto:<?php the_field('kontakt_email');?>"><?php the_field('kontakt_email');?></a><?php endif; ?>
                </div>
                <div class="row">
                    <span class="label" style="color:<?php echo $color;?>">Website:</span> 
					
					<a style="text-decoration:underline;color:#002aff" href="<?php the_field('website');?>" target="_blank"><?php the_field('website_name');?></a>
					
                </div>
            </div>
        </div>
    </div>

    <style>
        .close {
            fill: <?Php echo $color;?>!important;
        }
    </style>
    
    <?php 
    get_footer();