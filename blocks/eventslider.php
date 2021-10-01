<?php if(get_field('auswahl')=='Event') { ?>
<section class="block block-eventslider">
    <div class="slider">
        <?php 
            if(get_field('erstes_objekt_anders')) {?>
            <a target="<?php echo get_field('link')['target'];?>" href="<?php echo get_field('link')['url'];?>" class="event">
                <div class="bild" style="background-image:url(<?php the_field('erstes_bild');?>)"></div>
                <div class="content">
                    <div class="subline">
                        <?php the_field('subline');?>
                        
                    </div>
                    <div class="headline"><?php the_field('headline');?></div>
                    <div class="link"></div>
                    <div style="clear:both"></div>
                </div>
            </a>
            <?php } ?>
        <?php $events = NEFF_EventModel::get_upcoming();
        if($events):foreach($events as $event):?>
            <a href="<?php echo get_permalink($event->ID);?>" class="event">
                <div class="bild" style="background-image:url(<?php the_field('bild', $event->ID);?>)"></div>
                <div class="content">
                    <div class="subline">
                        <?php the_field('typ', $event->ID);?>
                        <span class="date"><?php echo NEFF_EventModel::format_date(get_field('event_start',$event->ID));?> <?php if(get_field('event_ende',$event->ID)) : ?> – <?php echo NEFF_EventModel::format_date(get_field('event_ende',$event->ID));?> <?php endif; ?></span>
                    </div>
                    <div class="headline"><?php echo $event->post_title;?></div>
                    <div class="link"></div>
                    <div style="clear:both"></div>
                </div>
            </a>
        <?php endforeach;endif;?>
		 
    </div>
	</section>
	<?php } else { ?>
			         
<section style='padding-bottom:100px;' class="block block-ansprechpartnerslider">
  <h2 class='block-ansprechpartnerslider-headline' style='padding:0 10vw;color:#a82717;font-size:50px;line-height:1.1;text-transform:uppercase;font-weight:normal;'>ANSPRECHPARTNER*INNEN</h2>
	 <div class="slider ansprechpartner_slider">
 
        <?php $apartners = NEFF_EventModel::get_apartner();
        if($apartners):foreach($apartners as $apartner):?>
            <a href="<?php echo get_permalink($apartner->ID);?>" class="item">
                <div class="profilbild" style="background-image:url(<?php the_field('profilbild', $apartner->ID);?>)"></div>
                <div class="content">
                    	<?php if( get_field('unternehmen_kurz', $apartner->ID) ): ?>
				<div class="unternehmen"><?php the_field('unternehmen_kurz', $apartner->ID);?></div>
                     <?php elseif(get_field('unternehmen', $apartner->ID) ) : ?>
			     <div class="unternehmen"><?php the_field('unternehmen', $apartner->ID);?></div>
					<?php endif; ?>
					    <div class="name"><?php echo get_the_title($apartner->ID);?></div> 
                   <div class="position"><?php the_field('position_kurz',$apartner->ID);?></div> 
                    <div style="clear:both"></div>
                </div>
            </a>
        <?php endforeach;endif;?>
    </div>
	</section>
	<?php }  ?> 
	
	<style>
.ansprechpartner_slider a.item.slick-slide {
    padding: 25px;
}
.ansprechpartner_slider .slick-slide {
    height: auto;

}
</style>

<script>
    
jQuery(document).ready( function($) {
  
  

	const aslider  =   
  $(".block-ansprechpartnerslider .slider");
  
  $(".block-ansprechpartnerslider .slider").slick({
            dots:true,
			
            slidesToShow: 5.5,
			infinite:false,
			 arrows:true,
			
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 3.5,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2.5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1.5,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
        });
		
	const eventSlider = $(".block-eventslider .slider");
        $('.block-eventslider .slider').slick({
            dots:false,
            arrows:true,
            slidesToShow: 4.5,
	    infinite:false,
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 3.5,
        slidesToScroll: 1,
        infinite: false,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2.5,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1.5,
        slidesToScroll: 1
      },
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
        });
	

  jQuery(".block-ansprechpartnerslider .slider").on('mousewheel', function(e){
    const deltax = e.originalEvent.deltaX;
    console.log(deltax);
    if(deltax > 3) {
      alisder.slickNext();
    }
    if(deltax < -5) {
            alisder.slickPrev();

    }
  });

    jQuery(".block-eventslider .slider").on('mousewheel', function(e){
       const deltax = e.originalEvent.deltaX;
    console.log(deltax);

  if(deltax > 3) {
      eventSlider.slickNext();
    }
    if(deltax < -5) {
      eventSlider.slickPrev();

    }

  });
 
 
		
		
    });
	




</script>