<?php 
    class NEFF_AnsprechpartnerModel {
        public function __construct() {
            add_action('init',  array($this, 'register_post_type'));
            add_action('acf/init',  array($this, 'register_fields'));

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
            if( function_exists('acf_add_local_field_group') ):

                acf_add_local_field_group(array(
                    'key' => 'group_6422a6e908de0',
                    'title' => 'VCard Optionen',
                    'fields' => array(
                        array(
                            'key' => 'field_6422a6e9a4bc0',
                            'label' => 'VCards Aktiv',
                            'name' => 'vcard_active',
                            'aria-label' => '',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'message' => '',
                            'default_value' => 0,
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                        ),
                        array(
                            'key' => 'field_6422a70da4bc1',
                            'label' => 'Firmierung',
                            'name' => 'org',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                        ),
                        array(
                            'key' => 'field_6422a715a4bc2',
                            'label' => 'Straße und Nr',
                            'name' => 'street',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                        ),
                        array(
                            'key' => 'field_6422a71da4bc3',
                            'label' => 'Postleitzahl',
                            'name' => 'zip',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                        ),
                        array(
                            'key' => 'field_6422a727a4bc4',
                            'label' => 'Stadt',
                            'name' => 'city',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                        ),
                        array(
                            'key' => 'field_6422a731a4bc5',
                            'label' => 'Bundesland',
                            'name' => 'bundesland',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                        ),
                        array(
                            'key' => 'field_6422a737a4bc6',
                            'label' => 'Website',
                            'name' => 'website',
                            'aria-label' => '',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                        ),
                    ),
                    'location' => array(
                        array(
                            array(
                                'param' => 'options_page',
                                'operator' => '==',
                                'value' => 'neff-settings',
                            ),
                        ),
                    ),
                    'menu_order' => 0,
                    'position' => 'normal',
                    'style' => 'default',
                    'label_placement' => 'top',
                    'instruction_placement' => 'label',
                    'hide_on_screen' => '',
                    'active' => true,
                    'description' => '',
                    'show_in_rest' => 0,
                ));
                
                endif;		
        }

        public static function get_vcard() {
            $org = get_field('unternehmen') ? get_field('unternehmen'):get_field('org','option');
            $domain = get_field('domain') ? get_field('domain'):get_field('website','option');
            $vcard = 
'BEGIN:VCARD
VERSION:3.0 
N:'.get_the_title().';;;
FN:'.get_the_title().'
TEL;WORK;VOICE:'.get_field('telefon').'
EMAIL;WORK:'.get_field('email').'
ADR;TYPE=WORK:;;'.get_field('street','option').';'.get_field('city','option').';'.get_field('bundesland','option').';'.get_field('zip','option').';Deutschland;;
ORG:'.$org.'
URL;type=WORK:'.$domain.'
END:VCARD';
             $vcard_file = 'neue-effizienz-'.str_replace(' ', '-', get_the_title()).'.vcf';                     
            echo '<a href="data:text/vcard;charset=utf-8,'.rawurlencode($vcard).'" download="'.$vcard_file.'" class="download-button">';
            echo '<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#666" d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg></span>';
            echo '</a>';
        }

    }
    new NEFF_AnsprechpartnerModel();