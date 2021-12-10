<?php 

    get_header();?>
    <div class="page-wrapper blog-wrapper">
        <div class="thumbnail">
        <img src="<?php the_post_thumbnail_url('large');?>" />  
        </div>
        <span class="date"><?php echo get_the_date( 'd.m.Y', get_the_id() ); ?></span>
        <h1><?php the_title();?></h2>
        <div class="content"><?php the_content();?></div>
    </div>
    <?php get_footer();