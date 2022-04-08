<?php 
/**
* Template Name: Shortcode
*/
    get_header();?>
    <?php $shortcode = get_field('shortcode');?>
    <?php do_shortcode($shortcode);?>
    <?php get_footer();