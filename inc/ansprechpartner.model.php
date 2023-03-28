<?php 
    class NEFF_AnsprechpartnerModel {
        public function __construct() {
            add_action('init',  array($this, 'register_post_type'));
        }

        public function register_post_type() {
            $labels = array(
                'name' => _x( 'Ansprechpartner', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Ansprechpartner', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Ansprechpartner', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Ansprechpartner', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Ansprechpartner Archives', 'textdomain' ),
                'attributes' => __( 'Ansprechpartner Attributes', 'textdomain' ),
                'parent_item_colon' => __( 'Parent Ansprechpartner:', 'textdomain' ),
                'all_items' => __( 'All Ansprechpartner', 'textdomain' ),
                'add_new_item' => __( 'Add New Ansprechpartner', 'textdomain' ),
                'add_new' => __( 'Add New', 'textdomain' ),
                'new_item' => __( 'New Ansprechpartner', 'textdomain' ),
                'edit_item' => __( 'Edit Ansprechpartner', 'textdomain' ),
                'update_item' => __( 'Update Ansprechpartner', 'textdomain' ),
                'view_item' => __( 'View Ansprechpartner', 'textdomain' ),
                'view_items' => __( 'View Ansprechpartner', 'textdomain' ),
                'search_items' => __( 'Search Ansprechpartner', 'textdomain' ),
                'not_found' => __( 'Not found', 'textdomain' ),
                'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
                'featured_image' => __( 'Featured Image', 'textdomain' ),
                'set_featured_image' => __( 'Set featured image', 'textdomain' ),
                'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
                'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
                'insert_into_item' => __( 'Insert into Ansprechpartner', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this Ansprechpartner', 'textdomain' ),
                'items_list' => __( 'Ansprechpartner list', 'textdomain' ),
                'items_list_navigation' => __( 'Ansprechpartner list navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Ansprechpartner list', 'textdomain' ),
            );
            $args = array(
                'label' => __( 'Ansprechpartner', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-admin-users',
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
            register_post_type( 'ansprechpartner', $args );
        }

        public function register_fields() {
     
        }

        public static function get_vcard() {
            if(!is_user_logged_in())return;
            $vcard = 
             'BEGIN:VCARD
             VERSION:3.0 
             N:'.get_the_title().';;;
             FN:'.get_the_title().'
             TEL;WORK;VOICE:'.get_field('telefon').'
             EMAIL;WORK:'.get_field('email').'
             ADR;CHARSET=UTF-8;TYPE=WORK:;;Bärenstraße 11-13;Wuppertal;NRW;42117;Deutschland;;
             ORG;CHARSET=UTF-8:Neue Effizienz gemeinnützige GmbH
             URL;CHARSET=UTF-8;type=WORK:https://neue-effizienz.de
             END:VCARD';
             $vcard_file = 'neue-effizienz-'.get_the_title().'.vcf';                     
            echo '<a href="data:text/vcard;charset=utf-8,'.rawurlencode($vcard).'" download="'.$vcard_file.'" class="download-button">';
            echo '<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#666" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg></span>';
            echo '</a>';
        }

    }
    new NEFF_AnsprechpartnerModel();