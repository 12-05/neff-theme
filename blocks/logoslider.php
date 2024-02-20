<?php $slides = get_field('slides');?>
<section class="block block-logoslider block-slider">
    <div class="logoslider-inner">
    <?php if ($slides): foreach ($slides as $slide): ?>
																            <a target="_blank" href="<?php echo $slide['link']; ?>"  class="slide">
																                <?php if ($slide['logo']) {?>
																                    <img style="<?php if ($slide['height']) {echo 'height:' . $slide['height'];}?>px" src="<?php echo $slide['logo']; ?>" />
																                <?php }?>
																            </a>

														<?php endforeach;endif;?>
                                                </div>
                                            </section>
<script>
    jQuery(document).ready(function($) {
        $('.logoslider-inner').slick({
            dots:true,
            arrows:false,
            autoplay: true,
            autoplaySpeed: 4000,
            speed: 800,
            slidesToShow: 5,
            slidesToScroll: 3,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
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
            ]
        });
    });
</script>