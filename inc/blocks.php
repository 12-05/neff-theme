<?php 
    class NEFF_Blocks {
        public function __construct() {
            add_filter('block_categories_all', array($this, 'add_block_category'));
            add_action('acf/init', array($this, 'register_blocks'));

        }
        
        public function add_block_category($block_categories) {
            array_push(
                $block_categories,
                array(
                    'slug'  => 'neff-blocks',
                    'title' => __( 'NEFF', 'neff' ),
                    'icon'  => null,
                )
            );
            return $block_categories;
        }

        public function register_blocks() {
            $styleuri = get_stylesheet_directory_uri().'/assets/styles/compiled/theme.css';
            acf_register_block_type(array(
                'name'              => 'slider',
                'title'             => __('Slider'),
                'render_template'   => '/blocks/slider.php',
                'category'          => 'neff-blocks',
                'icon'              => 'image-flip-horizontal',
                'align' => 'full',
                'enqueue_style'     => $styleuri,
                'enqueue_assets' => function(){
                    wp_enqueue_style( 'neff-slider-css', get_template_directory_uri() . '/assets/styles/slick.css' );
                    wp_enqueue_script( 'neff-slider-js', get_template_directory_uri() . '/assets/scripts/slick.js', array('jquery'), false, false );
                },
            ));

            acf_register_block_type(array(
                'name'              => 'block',
                'title'             => __('Block'),
                'render_template'   => '/blocks/block.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
                'enqueue_style'     => $styleuri,
            ));
            
            acf_register_block_type(array(
                'name'              => 'Intro',
                'title'             => __('Intro'),
                'render_template'   => '/blocks/intro.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));

            acf_register_block_type(array(
                'name'              => 'grid',
                'title'             => __('Grid'),
                'render_template'   => '/blocks/grid.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));

             acf_register_block_type(array(
                'name'              => 'ansprechpartner',
                'title'             => __('Ansprechpartner'),
                'render_template'   => '/blocks/ansprechpartner.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));

            acf_register_block_type(array(
                'name'              => 'text',
                'title'             => __('Text'),
                'render_template'   => '/blocks/text.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));

            acf_register_block_type(array(
                'name'              => 'bild',
                'title'             => __('Bild'),
                'render_template'   => '/blocks/bild.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));

             acf_register_block_type(array(
                'name'              => 'projektloop',
                'title'             => __('Projektloop'),
                'render_template'   => '/blocks/projektloop.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));

            acf_register_block_type(array(
                'name'              => 'eventloop',
                'title'             => __('Eventloop'),
                'render_template'   => '/blocks/eventloop.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));         
            
            acf_register_block_type(array(
                'name'              => 'eventslider',
                'title'             => __('Eventslider'),
                'render_template'   => '/blocks/eventslider.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'align-none',
            ));    
            acf_register_block_type(array(
                'name'              => 'kontaktformular',
                'title'             => __('Kontaktformular'),
                'render_template'   => '/blocks/kontaktformular.php',
                'category'          => 'neff-blocks',
                'align' => 'full',
                'icon'              => 'email',
            ));         
           

        }

        public function deregister_styles() {
            wp_dequeue_style( 'wp-block-library' );
        }
    }
    new NEFF_Blocks();