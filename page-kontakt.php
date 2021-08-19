<?php 
    get_header();?>
    <div class="fullscreen">
       <button onClick="window.history.back()" class="close">
            <?php include get_template_directory().'/assets/images/close.php';?>
        </button>
    <?php the_content();?>
</div>

    <?php 
    get_footer();