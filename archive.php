<?php 

    get_header();?>
    <div class="page-wrapper blog-wrapper">
        <?php $posts = get_posts(array(
            'post_type' => 'post', 
            'posts_per_page' => -1
        ));?>
        <?php if($posts):foreach($posts):?>
            <div class="post">
                <div className="thumbnail">
                <img src="<?php the_post_thumbnail_url('large');?>" />  
                </div>
                <span class="date"><?php echo get_the_date( 'd.m.Y', get_the_id() ); ?></span>
                <h1><?php the_title();?></h2>
            </div>
        <?php endforeach;endif;?>
    
    <?php the_content();?>
    </div>
    <?php get_footer();