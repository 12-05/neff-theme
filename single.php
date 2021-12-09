<?php 

    get_header();?>
    <div class="page-wrapper blog-wrapper">
        <div className="thumbnail">
        <img src="<?php the_post_thumbnail_url('large');?>" />  
        </div>
        <span class="date"><?php echo get_the_date( 'd.m.Y', get_the_id() ); ?></span>
        <h1><?php the_title();?></h2>
    <?php the_content();?>
    </div>
    <?php get_footer();