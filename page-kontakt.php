<?php 
    get_header();?>
    <div class="fullscreen">
        <img class="close" onClick="window.history.back()" src="<?php echo get_stylesheet_directory_uri().'/assets/images/close.svg';?>" />
    <?php the_content();?>
</div>

    <?php 
    get_footer();