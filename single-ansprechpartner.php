<?php 
    get_header();?>
    <div class="template">
        <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
        <div class="profil">
            <div class="bild" style="background-image:url(<?php the_field('profilbild');?>)"></div>
            <div class="unternehmen"><?php the_field('unternehmen');?></div>
            <div class="name"><?php the_title();?></div>
            <div class="position"><?php the_field('position');?></div>
        </div>
        <div class="content">
            <h1 class="headline">Im Portrait</h1>
            <div class="text">
                <div class="subline">Expertise</div>
                <?php the_field('expertise');?>
            </div>
            <div class="info">
                <div class="subline">Kontakt</div>
                <div class="row">
                    <span class="label">Telefon:</span> <?php the_field('telefon');?>
                </div>
                <div class="row">
                    <span class="label">E-Mail:</span> <?php the_field('email');?> </a>
                </div>
                <div class="row">
                    <span class="label">Website:</span> <a href="<?php the_field('domain');?>" target="_blank"><?php the_field('domain');?></a>
                </div>
            </div>
        </div>
    </div>
    
    <?php 
    get_footer();