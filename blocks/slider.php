<?php $slides = get_field('slides');?>
<section class="block block-slider">
    <?php if($slides):foreach($slides as $slide):?>
        <?php if($slide['link']) {?>
          <a href="<?php echo $slide['link'];?>" class="slide position-<?php echo $slide['content_position'];?>" style="text-decoration:none;background-image:url(<?php echo $slide['bild'];?>);background-size:<?php echo $slide['format'];?> !important;background-repeat:no-repeat;">
            <div class="content">
                <?php if($slide['logo']) {?>
                     <img src="<?php echo $slide['logo'];?>" />
                <?php   } ?>
                <span class="headline">
                    <?php echo $slide['headline'];?>
                </span>
            </div>
            <?php if($slide['content']) {?>
                <div class="info">
                    <?php _e($slide['content']);?>
                </div>
            <?php } ?>
 
        </a>
        
        <?php } else {?>
            <div  class="slide position-<?php echo $slide['content_position'];?>" style="background-image:url(<?php echo $slide['bild'];?>);background-size:<?php echo $slide['format'];?> !important;background-repeat:no-repeat;">
            <div class="content">
                <?php if($slide['logo']) {?>
                     <img src="<?php echo $slide['logo'];?>" />
                <?php   } ?>
                <span class="headline">
                    <?php echo $slide['headline'];?>
                </span>
            </div>
            <?php if($slide['content']) {?>
                <div class="info">
                    <?php _e($slide['content']);?>
                </div>
            <?php } ?>
 
        </div>
        <?php } ?> 
       
    <?php endforeach;endif;?>
</section>
<script>
    jQuery(document).ready(function($) {
        $('.block-slider').slick({
            dots:true,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 800
        });
    });
</script>