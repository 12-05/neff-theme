<?php 
    class NEFF_PartnerModel {
        public function __construct() {
            add_action('init',  array($this, 'register_post_type'));
        }

        public function register_post_type() {
            $labels = array(
                'name' => _x( 'Partner', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Partner', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Partner', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Partner', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Partner Archives', 'textdomain' ),
                'attributes' => __( 'Partner Attributes', 'textdomain' ),
                'parent_item_colon' => __( 'Parent Partner:', 'textdomain' ),
                'all_items' => __( 'All Partner', 'textdomain' ),
                'add_new_item' => __( 'Add New Partner', 'textdomain' ),
                'add_new' => __( 'Add New', 'textdomain' ),
                'new_item' => __( 'New Partner', 'textdomain' ),
                'edit_item' => __( 'Edit Partner', 'textdomain' ),
                'update_item' => __( 'Update Partner', 'textdomain' ),
                'view_item' => __( 'View Partner', 'textdomain' ),
                'view_items' => __( 'View Partner', 'textdomain' ),
                'search_items' => __( 'Search Partner', 'textdomain' ),
                'not_found' => __( 'Not found', 'textdomain' ),
                'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
                'featured_image' => __( 'Featured Image', 'textdomain' ),
                'set_featured_image' => __( 'Set featured image', 'textdomain' ),
                'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
                'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
                'insert_into_item' => __( 'Insert into Partner', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this Partner', 'textdomain' ),
                'items_list' => __( 'Partner list', 'textdomain' ),
                'items_list_navigation' => __( 'Partner list navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Partner list', 'textdomain' ),
            );
            $args = array(
                'label' => __( 'Partner', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-building',
                'supports' => array('title'),
                'taxonomies' => array(),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'menu_position' => 5,
                'show_in_admin_bar' => true,
                'show_in_nav_menus' => true,
                'can_export' => true,
                'has_archive' => true,
                'hierarchical' => false,
                'exclude_from_search' => false,
                'show_in_rest' => true,
                'publicly_queryable' => true,
                'capability_type' => 'post',
            );
            register_post_type( 'partner', $args );
        }

        public function register_fields() {

        }

    }
    new NEFF_PartnerModel();