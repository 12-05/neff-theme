<?php 
    
    class NEFF_Options {
        public function __construct() {
            add_action('acf/init', array($this, 'register_options_page'));
        }

        public function register_options_page() {
            acf_add_options_page(
                array(
                    'page_title' 	=> 'Theme Optionen',
                    'menu_title'	=> 'NEFF',
                    'menu_slug'	=> 'neff-settings', 
                    'capability'	=> 'edit_posts',
                )
            );
        }
    }

    new NEFF_Options();