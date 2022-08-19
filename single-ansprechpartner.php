<?php 
    get_header();?>

<?php if(get_field('big_as_images', 'option')) {?>
    <div class="template big_as">
        <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
        <div class="profilbild" style="background-size:cover;background-position:center;background-image:url(<?php the_field('profilbild');?>">
      
        </div>
        <div class="content">
            <h1 class="headline" style="color:#333"><?php the_title();?></h1>
            <div class="position" style="margin-bottom:3rem"><?php the_field('position');?></div>
            <div class="text">
                <div class="subline">Background</div>
                <?php the_field('expertise');?>
            </div>
            <div style="display:grid;grid-template-columns: 1fr 1fr;grid-gap:1rem;margin-top:2rem;">
            <div class="info">
                <div class="subline">Kontakt</div>
                <div class="row">
                    <span class="label" style="width:100px">Telefon:</span> <?php the_field('telefon');?>
                </div>
                <div class="row">
                    <span class="label" style="width:100px">E-Mail:</span> <?php the_field('email');?> </a>
                </div>
                
            </div>
            <div class="hashtags">
                <?php $hashtags = get_field('hashtags');
                if($hashtags) {
                    foreach($hashtags as $hashtag) {
                        echo '<div class="hashtag">/ '.$hashtag['text'].'</div>';
                    }
                }
                ?>
            </div>
            </div>
        </div>
    </div>

<?php } else { ?>

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
                <?php if(get_field('domain')) {?>
                    <div class="row">
                        <span class="label">Website:</span> <a href="<?php the_field('domain');?>" target="_blank"><?php the_field('domain');?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?> 


    
    
    <?php 
    get_footer();