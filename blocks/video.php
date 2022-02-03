<section class="block block-video">
<video autoplay="" loop="" muted="" playsinline="" src="<?php the_field('video');?>">
</video>
    <?php if(get_field('headline')) {?>
        <div class="headline"><?php the_field('headline');?></div>
    <?php } ?> 
    <a target="_blank" href="<?php the_field('link');?>"><img src="<?php echo get_template_directory_uri().'/assets/images/play.svg';?>" alt="Play" /></a>
</section>