<?php 

    get_header();?>
   <?php 
    global $post;
    $page_for_posts_id = get_option('page_for_posts');
if ( $page_for_posts_id ) : 
    $post = get_page($page_for_posts_id);
    setup_postdata($post);
    ?>
       
            <?php the_content(); ?>
    <?php
    rewind_posts();
endif;?>
    <div class="page-wrapper blog-wrapper">
        <?php $posts = get_posts(array(
            'post_type' => 'post', 
            'posts_per_page' => -1
        ));?>
        <?php if($posts):foreach($posts as $post): ?>
            <a href="<?php echo get_permalink($post->ID);?>" class="post">
                <div className="thumbnail">
                <img src="<?php the_post_thumbnail_url('large');?>" />  
                </div>
                <span class="date"><?php echo get_the_date( 'd.m.Y', get_the_id() ); ?></span>
                <h1><?php the_title();?></h2>
                <div class="content"><?php the_excerpt();?></div>
            </a>
        <?php endforeach;endif;?>
    
    </div>
    <?php get_footer();