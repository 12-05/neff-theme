<?php 
    class NEFF_EventModel {
        public function __construct() {
            add_action('init',  array($this, 'register_post_type'));
            add_filter('manage_event_posts_columns', array($this, 'manage_columns'));
            add_action('manage_event_posts_custom_column', array($this, 'fill_columns'),10,2);

        }

        public function register_post_type() {
            $labels = array(
                'name' => _x( 'Veranstaltung', 'Post Type General Name', 'textdomain' ),
                'singular_name' => _x( 'Veranstaltung', 'Post Type Singular Name', 'textdomain' ),
                'menu_name' => _x( 'Veranstaltungen', 'Admin Menu text', 'textdomain' ),
                'name_admin_bar' => _x( 'Veranstaltung', 'Add New on Toolbar', 'textdomain' ),
                'archives' => __( 'Archiv', 'textdomain' ),
                'attributes' => __( 'Attribute', 'textdomain' ),
                'parent_item_colon' => __( 'Eltern:', 'textdomain' ),
                'all_items' => __( 'Alle Veranstaltungen', 'textdomain' ),
                'add_new_item' => __( 'Neu hinzufügen', 'textdomain' ),
                'add_new' => __( 'Neu hinzufügen ', 'textdomain' ),
                'new_item' => __( 'Neue Veranstaltungen', 'textdomain' ),
                'edit_item' => __( 'Veranstaltung bearbeiten', 'textdomain' ),
                'update_item' => __( 'Update Event', 'textdomain' ),
                'view_item' => __( 'Ansehen', 'textdomain' ),
                'view_items' => __( 'Ansehen', 'textdomain' ),
                'search_items' => __( 'Search Event', 'textdomain' ),
                'not_found' => __( 'Not found', 'textdomain' ),
                'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
                'featured_image' => __( 'Featured Image', 'textdomain' ),
                'set_featured_image' => __( 'Set featured image', 'textdomain' ),
                'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
                'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
                'insert_into_item' => __( 'Insert into Event', 'textdomain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this Event', 'textdomain' ),
                'items_list' => __( 'Event list', 'textdomain' ),
                'items_list_navigation' => __( 'Event list navigation', 'textdomain' ),
                'filter_items_list' => __( 'Filter Event list', 'textdomain' ),
            );
            $args = array(
                'label' => __( 'Event', 'textdomain' ),
                'description' => __( '', 'textdomain' ),
                'labels' => $labels,
                'menu_icon' => 'dashicons-calendar',
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
            register_post_type( 'event', $args );
        }

        public function register_fields() {

        }

        public static function get_upcoming() {
            $today = date('Ymd');
            $events = get_posts(array(
                'post_type'		=> 'event',
                'posts_per_page'	=> -1,
                'meta_key'		=> 'event_start',
                'meta_compare'	=> '>=',
	        'meta_value'		=> $today,
            ));
            function sortFunction($a,$b) {
                $event_a_start = DateTime::createFromFormat('d.m.Y', get_field('event_start', $a->ID))->getTimestamp();
                $event_b_start = DateTime::createFromFormat('d.m.Y', get_field('event_start', $b->ID))->getTimestamp();
                return $event_a_start - $event_b_start;
            }
            usort($events, 'sortFunction');
            return $events; 
        }

        public static function get_past() {
            $today = date('Ymd');
            $events = get_posts(array(
                'post_type'		=> 'event',
                'posts_per_page'	=> -1,
                'meta_key'		=> 'event_start',
            
                'meta_compare'	=> '<',
	            'meta_value'		=> $today,
            ));
            function sortFunction2($a,$b) {
                $event_a_start = DateTime::createFromFormat('d.m.Y', get_field('event_start', $a->ID))->getTimestamp();
                $event_b_start = DateTime::createFromFormat('d.m.Y', get_field('event_start', $b->ID))->getTimestamp();
                return $event_b_start - $event_a_start;
            }
            usort($events, "sortFunction2");
            return $events;
        }
        public static function get_apartner() {
         
                $apartners = get_posts(array(
                    'post_type'		=> 'ansprechpartner',
                    'posts_per_page'	=> -1,
              
                ));
                return $apartners;
            }
        public static function format_date($date) {
            $date = new DateTime($date);
            if(!$date) return "";
            return $date->format('d.m.Y');

        }

        public function manage_columns($columns) {
            $columns['type'] = __('Typ');
            $columns['event_date'] = __('Datum');
            unset($columns['date']);
            return $columns;
        }

        public function fill_columns($column, $post_id ) {
            if ( 'event_date' === $column ) {
                echo NEFF_EventModel::format_date(get_field('event_start', $postid));
            }
             if ( 'type' === $column ) {
                echo get_field('typ', $postid);
            }                          
        }


    }
    new NEFF_EventModel();



