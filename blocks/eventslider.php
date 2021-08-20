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
                        <span class="date"><?php echo NEFF_EventModel::format_date(get_field('datum', $event->ID));?></span>
                    </div>
                    <div class="headline"><?php echo $event->post_title;?></div>
                    <div class="link"></div>
                    <div style="clear:both"></div>
                </div>
            </a>
        <?php endforeach;endif;?>
    </div>
</section>
<script>
    jQuery(document).ready(function($) {
        $('.block-eventslider .slider').slick({
            dots:false,
            arrows:false,
            slidesToShow: 4,
  responsive: [
    {
      breakpoint: 1377,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
        });
    });
</script>