<?php 
    get_header();?>
    <div class="template">
         <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
        <div class="bild" style="background-image:url(<?php the_field('bild');?>)"></div>
        <div class="content">
            <span class="subline"><?php echo NEFF_EventModel::format_date(get_field('datum'));?> | <?php the_field('typ');?></span>
            <h1 class="headline"><?php the_title();?></h1>
            <div class="text">
                <?php the_field('beschreibung');?>
            </div>
            <div class="info">
                <div class="row">
                    <span class="label">Veranstaltungsort:</span><br />
                    <?php the_field('veranstaltungsort');?>
                </div>
                <div class="row">
                    <span class="label">Referenten:</span>
                    <?php the_field('referenten');?>
                </div>
              
            </div>
            <?php 
                $link = get_field('registrierung');
                if($link) {?>
             <div class="link">
                 <a href="<?php echo $link['url'];?>" target="<?php _e($link['target']);?>" class="register-link"><?php _e($link['title']);?></a>
            </div>
            <?php } ?>
 
        </div>
        <?php if(get_field('formular_aktiv')) {?>
            <div class="register">
                <h2 class="headline">Anmeldung</h2>
                <form>
                <div>
                    <input type="text" name="name" placeholder="Ihr Name" />
                    <input type="email" name="email" placeholder="Ihre E-Mail-Adresse" />
                    <input type="text" name="unternehmen" placeholder="Ihr Unternehmen/ Hochschule/Forschungseinrichtung" />
                </div>
                <div>
                    <div class="register_text">
                        <?php the_field('register_text');?>
                    </div>
                    <button type="submit">Verbindlich anmelden</button>
                </div>
                </form>
            </div>
        <?php } ?>
    </div>
    
    <?php 
    get_footer();