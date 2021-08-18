<?php 

    class NEFF_Menus {
        public function __construct() {
            add_action('init', array($this, 'register_menus'));
        }

        public function register_menus() {
            register_nav_menus(array(
                'footer-menu' => __('Footer Menü'),
                'main-menu' => __('Hauptmenü')
            ));
        }
    }

    new NEFF_Menus();