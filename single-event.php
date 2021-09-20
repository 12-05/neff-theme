<?php 
    get_header();?>
    <div class="template">
         <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
        <div class="bild" style="background-image:url(<?php the_field('bild');?>)"></div>
        <div class="content">
			<div class="subline" style='color:#a82717'><?php echo strtoupper(get_field('typ'));?></div>
            <h1 class="headline" style='color:#565656'><?php strtoupper(the_title());?></h1>
            <div class="text">
                <?php the_field('beschreibung');?>
            </div>
			<div class="row" style='margin-top:64px'>
					<span class="label" style='width:100px'>DATUM</span>
<span><?php echo NEFF_EventModel::format_date(get_field('event_start'));?> <?php if(get_field('event_ende')) : ?> – <?php echo NEFF_EventModel::format_date(get_field('event_ende'));?> <?php endif; ?><?php if(get_field('event_uhrzeit')): echo ' | '.get_field('event_uhrzeit').' Uhr'; ?><?php endif;?><?php if(get_field('event_end_uhrzeit')): echo ' - '.get_field('event_end_uhrzeit').' Uhr';?><?php endif;?> </span>
			          
				</div>
            <div class="info">
				
				  <?php if(get_field('referenten')):?>
				  <div class="row">
					  <span class="label">REFERENT*INNEN:</span>
					  <?php the_field('referenten');?> 
                 </div>
				<?php endif;?>
				<?php if(get_field('veranstaltungsort')):?>
				  <div class="row">
					  <span class="label">VERANSTALTUNGSORT:</span>
					  <?php the_field('veranstaltungsort');?>
                 </div>
		       <?php endif;?>
					 
                  
               
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
                <form action=”mailto:y.liu@12-05.de” ethod=”POST”


enctype=”multipart/form-data”


name=”EmailForm”>
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