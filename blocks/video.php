<section  class="block block-video" style="height:<?php the_field('height');?>vh;background-image:url(<?php the_field('hintergrundbild');?>)">
<?php if(get_field('video')){?><video poster="<?php the_field('hintergrundbild');?>" autoplay="" loop="" muted="" playsinline="" src="<?php the_field('video');?>"><?php } ?>
</video>
    <?php if(get_field('headline')) {?>
        <div class="headline"><?php the_field('headline');?></div>
    <?php } ?> 
    <a class="play" target="_blank" href="<?php the_field('link');?>"><img src="<?php echo get_template_directory_uri().'/assets/images/play.svg';?>" alt="Play" /></a>
<?php if(get_field('iframe')) { ?>
        <iframe allow="fullscreen;" src="<?php the_field('link');?>"></iframe>
<?php } ?>
</section>
<?php if(get_field('iframe')) {?>
    <script>

    jQuery('.block-video a').click(function(e) {
        e.preventDefault();
        jQuery('.block-video iframe').fadeIn();
        jQuery(".block-video iframe")[0].src += "?autoplay=1";

    });

</script>
<?php }?>