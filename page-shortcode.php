<?php 
/**
* Template Name: Shortcode
*/
    get_header();?>
    <?php $shortcode = get_field('shortcode');?>
    <?php echo do_shortcode($shortcode);?>
    <?php get_footer();