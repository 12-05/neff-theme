<?php
/**
 * Template Name: Wrapped
 */
get_header();?>
    <div class="page-wrapper">
        <h1>Suchergebnisse für <?php echo $_GET['s']; ?></h2>
        <div class="result-grid">
    <?php if (have_posts()) {?>
        <?php while (have_posts()) {?>
            <?php the_post();?>
            <a href="<?php the_permalink();?>" class="post">
            <div class="post-type"><?php
$post_type = get_post_type();
// get post type name
    $post_type_object = get_post_type_object($post_type);
    echo $post_type_object->labels->singular_name;
    ?>

            </div>
                <h2><?php the_title();?></h2>
                <div class="thumbnail">
                    <?php the_post_thumbnail();?>
                </div>
                <?php the_excerpt();?>
                <span class="link"></span>
                <div style="clear:both"></div>
            </a>
        <?php }?>
    <?php } else {?>
        <p>Leider keine Suchergebnisse für <?php echo $_GET['s']; ?></p>
    <?php }?>
    </div>
    </div>
    <?php get_footer();