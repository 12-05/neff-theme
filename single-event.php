<?php 
    get_header();?>
    <div class="template">
         <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
        <div class="bild">
            <img src="<?php the_field('bild');?>" alt="Bild" />
        </div>
        <div class="content">
			<div class="subline" style='color:var(--main)'><?php echo strtoupper(get_field('typ'));?></div>
            <h1 class="headline" style='color:var(--secondary)'><?php strtoupper(the_title());?></h1>
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
                <form id="eventform" action="/wp-json/neff/v1/register/<?php echo get_the_id();?>" method=”POST”>
                <div>
                    <input type="text" name="name" placeholder="Ihr Name" />
                    <input type="email" name="email" placeholder="Ihre E-Mail-Adresse" />
                    <input type="text" name="company" placeholder="Ihr Unternehmen/ Hochschule/Forschungseinrichtung" />
                    <span id="error"></span>
                    <span id="success"></span>
                </div>
                <div>
                    <div class="register_text">
                        <?php the_field('register_text');?>
                    </div>
                    <button type="submit">Verbindlich anmelden</button>
                </div>
                </form>
                <script>
                    jQuery(document).ready(function($) {
                        jQuery('#error').html("");
                        jQuery('#success').html("");
                        $('#eventform').on('submit', function(e) {
                            e.preventDefault();
                            var form = $(this);
                            var url = form.attr('action');
                            var name = $('input[name="name"]');
                            var email = $('input[name="email"]');
                            if(!name.val()) {
                                $('#error').html("Bitte geben Sie einen Namen an.");
                                return;
                            }
                            if(!email.val()) {
                                $('#error').html("Bitte geben Sie eine E-Mail Adresse an.");
                                return;
                            }
                            $.ajax({
                                type: "POST",
                                url: url,
                                data: form.serialize(), // serializes the form's elements.
                                success: function(data)
                                {
                                    jQuery('#error').html('Die Anmeldung war erfolgreich.');
                                },
                                error: function(data) {
                                    jQuery('#error').html('Es ist ein Fehler aufgetreten.');
                                }
                            });
                        });
                    });
                </script>
            </div>
        <?php } ?>
    </div>
    
    <?php 
    get_footer();