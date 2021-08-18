<?php 
define('NEFFPATH', get_template_directory());
define('NEFFURL', get_template_directory_URI());

    class NEFF_Theme_Class {
        public function __construct() {
            $this->load_inc_files();
            $this->page_builder();
            add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
            add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        }

        public function enqueue_scripts()  {
            wp_enqueue_script('jquery');
            wp_enqueue_script( 'neff-theme-script', get_stylesheet_directory_uri().'/assets/scripts/theme.js', array(), false, true );
        }

        public function enqueue_styles()  {
            wp_enqueue_style( 'neff-theme-style', get_stylesheet_directory_uri().'/assets/styles/compiled/theme.css', array(), false,'all' );
        }

        public function load_inc_files() {
            require_once NEFFPATH.'/inc/blocks.php';
            require_once NEFFPATH.'/inc/menus.php';
            require_once NEFFPATH.'/inc/options.php';
            require_once NEFFPATH.'/inc/ansprechpartner.model.php';
            require_once NEFFPATH.'/inc/event.model.php';
            require_once NEFFPATH.'/inc/partner.model.php';
            require_once NEFFPATH.'/inc/projekt.model.php';

        }

        public function page_builder() {
            add_theme_support('align-wide'); 
        }
    }

    new NEFF_Theme_Class();
