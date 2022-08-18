<?php 
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array (
        'key' => 'bm_shortcode',
        'title' => 'Shortcode',
        'fields' => array (
            array (
                'key' => 'bm_shortcode_page',
                'label' => 'Shortcode',
                'name' => 'shortcode',
                'type' => 'text',
                'prefix' => '',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
                'readonly' => 0,
                'disabled' => 0,
            )
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-shortcode.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
    ));
    
    endif;


    add_filter( 'use_block_editor_for_post', 'my_disable_gutenberg', 10, 2 );

