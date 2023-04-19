<?php

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{

    // Gutenberg Block
    Block::make(__('Rich  Accordion'))
        ->add_fields(array(
            Field::make('complex', 'crb_richaccordion', 'Accordion')
                ->set_layout('tabbed-vertical')
                ->add_fields(array(
                    Field::make('text', 'title', __('Title')),
                    Field::make('rich_text', 'content', __('Content')),
                )),
        ))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            foreach ($fields['crb_richaccordion'] as $i) {
                $content = apply_filters('the_content', $i['content']);
                echo "<details>";
                echo "<summary>$i[title]</summary>";
                echo "<div>$content</div>";
                echo "</details>";
            }
        });

    // "Theme Options" tab
    Container::make('theme_options', __('Theme Options'))
        ->add_tab(__('Main Section'), array(
            Field::make('image', 'content_background_image', 'Background image'),
        ));
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

/**
 * Theme setup.
 */
function develtio_setup()
{
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'tailpress'),
        )
    );

    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');

    add_theme_support('editor-styles');
    add_editor_style('css/editor-style.css');
}

add_action('after_setup_theme', 'develtio_setup');

/**
 * Enqueue theme assets.
 */
function develtio_enqueue_scripts()
{
    $theme = wp_get_theme();

    wp_enqueue_style('tailpress', develtio_asset('css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tailpress', develtio_asset('js/app.js'), array(), $theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'develtio_enqueue_scripts');

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function develtio_asset($path)
{
    if (wp_get_environment_type() === 'production') {
        return get_stylesheet_directory_uri() . '/' . $path;
    }

    return add_query_arg('time', time(), get_stylesheet_directory_uri() . '/' . $path);
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function develtio_nav_menu_add_li_class($classes, $item, $args, $depth)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }

    if (isset($args->{"li_class_$depth"})) {
        $classes[] = $args->{"li_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'develtio_nav_menu_add_li_class', 10, 4);

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function develtio_nav_menu_add_submenu_class($classes, $args, $depth)
{
    if (isset($args->submenu_class)) {
        $classes[] = $args->submenu_class;
    }

    if (isset($args->{"submenu_class_$depth"})) {
        $classes[] = $args->{"submenu_class_$depth"};
    }

    return $classes;
}

add_filter('nav_menu_submenu_css_class', 'develtio_nav_menu_add_submenu_class', 10, 3);
