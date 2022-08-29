<div class="block block-blog-preview">
    <h2><?php the_field('headline');?></h2>
    <div class="grid">
        <?php $posts = get_posts(array(
            'post_type' => 'post', 
            'posts_per_page' => 3
        ));?>
        <?php if($posts):foreach($posts as $post):?>
            <a  href="<?php echo get_permalink($post->ID);?>" class="post">
                <div class="thumb">
                    <img src="<?php echo get_the_post_thumbnail_url($post->ID);?>">
                </div>
                <div class="content">
                    <span class="date"><?php echo get_the_date('d.m.Y', $post->ID);?></span>
                    <h3><?php echo get_the_title($post->ID);?></h3>
                    <p><?php echo wpautop(get_the_excerpt($post->ID));?></p>

        
                </div>
            </a>
        <?php endforeach;endif;?>
    </div>
</div>
