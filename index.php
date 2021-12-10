<?php 

    get_header();?>
    <?php    echo get_the_content(null, false, get_option( 'page_for_posts' ));?>
    <div class="page-wrapper blog-wrapper">
        <h1>Blog</h1>
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