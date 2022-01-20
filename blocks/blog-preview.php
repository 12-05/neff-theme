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
<<<<<<< HEAD
                    <p><?php echo get_the_excerpt($post->ID);?></p>
=======
                    <p><?php echo wpautop(get_the_excerpt($post->ID));?></p>

        
>>>>>>> 47631363d1e32e7a657d0ff249a7490ba7c578af
                </div>
            </a>
        <?php endforeach;endif;?>
    </div>
</div>
