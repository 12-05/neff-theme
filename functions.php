<?php
define('NEFFPATH', get_template_directory());
define('NEFFURL', get_template_directory_URI());

class NEFF_Theme_Class
{
    public function __construct()
    {
        $this->load_inc_files();
        $this->page_builder();
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_filter('acf/settings/save_json', array($this, 'save_json'));
        add_filter('acf/settings/load_json', array($this, 'load_json'));
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        // add_filter( 'the_password_form', array($this, 'custom_form') );

        add_filter('get_search_form', array($this, 'search_placeholder'));

    }

    public function enqueue_scripts()
    {
        wp_enqueue_script('jquery');
        wp_enqueue_script('neff-theme-script', get_stylesheet_directory_uri() . '/assets/scripts/theme.js', array(), false, true);
        wp_enqueue_script('neff-theme-script-slick', get_stylesheet_directory_uri() . '/assets/scripts/slick.js');
    }

    public function enqueue_styles()
    {
        wp_enqueue_style('neff-theme-style', get_stylesheet_directory_uri() . '/assets/styles/compiled/theme.css', array(), false, 'all');
        wp_enqueue_style('neff-theme-extended', get_stylesheet_directory_uri() . '/assets/styles/extended.css', array(), false, 'all');

        wp_enqueue_style('neff-slider-css', get_template_directory_uri() . '/assets/styles/slick.css');
    }

    public function load_inc_files()
    {
        require_once NEFFPATH . '/inc/pagefields.php';
        require_once NEFFPATH . '/inc/blocks.php';
        require_once NEFFPATH . '/inc/menus.php';
        require_once NEFFPATH . '/inc/options.php';
        require_once NEFFPATH . '/inc/ansprechpartner.model.php';
        require_once NEFFPATH . '/inc/event.model.php';
        require_once NEFFPATH . '/inc/partner.model.php';
        require_once NEFFPATH . '/inc/projekt.model.php';
        require_once NEFFPATH . '/inc/register.service.php';
        require_once NEFFPATH . '/inc/partner.api.php';

    }

    public function page_builder()
    {
        add_theme_support('align-wide');
    }

    public function save_json($path)
    {
        $path = get_stylesheet_directory() . '/fields';
        return $path;
    }

    public function load_json($paths)
    {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/fields';
        return $paths;
    }

    public function custom_form()
    {
        return;
        global $post;
        $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
        $o = '<section style="max-width:800px;margin:0 auto;" class="block block-text"><h1>' . get_the_title() . '</h1><form class="protected-post-form" action="' . get_option('siteurl') . '/wp-pass.php" method="post">
                ' . __("Bitte geben Sie das Passwort ein.") . '
                <label class="pass-label" for="' . $label . '">' . __("Passwort:") . ' </label><input name="post_password" id="' . $label . '" type="password" style="background: #ffffff; border:1px solid #999; color:#333333; padding:10px;" size="20" /><br /><input type="submit" name="Submit" class="button" value="' . esc_attr__("Abschicken") . '" />
                </form></section>
                ';
        return $o;
    }

    public function search_placeholder($form)
    {

        $pattern = '/(placeholder=)".*"/';
        $replacement = "$1" . "'Type any text...'";
        $form = preg_replace($pattern, $replacement, $form);
        return $form;
    }
}

new NEFF_Theme_Class();

//  MISC

function getProjectColor($id)
{
    // get first term of project
    $terms = get_the_terms($id, 'projektkategorie');
    if ($terms) {
        $term = array_shift($terms);
        $farbe = get_field('farbe', 'term_' . $term->term_id);
        return $farbe;
    }
    return $terms;
}
