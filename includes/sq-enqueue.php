<?php

/**
 * The function `sq_enqueue_asset` in PHP sets up custom rewrite rules to serve images from a specific
 * directory based on the URL.
 */
function sq_enqueue_assets()
{
    function custom_rewrite_rule()
    {
        add_rewrite_rule('^assets/(.*)$', 'index.php?assets=$matches[1]', 'top');
    }
    add_action('init', 'custom_rewrite_rule');

    function custom_rewrite_tag()
    {
        add_rewrite_tag('%assets%', '([^&]+)');
    }
    add_action('init', 'custom_rewrite_tag');

    function custom_template_include($original_template)
    {
        if (get_query_var('assets')) {
            $image_path = plugin_dir_path(__FILE__) . '/../src/app/assets/' . get_query_var('assets');

            // Verifica si el archivo de imagen existe
            if (file_exists($image_path)) {
                $image_data = file_get_contents($image_path);
                $mime_type = get_mime($image_path);

                // Envía la respuesta de la imagen
                header("Content-Type: $mime_type");
                echo $image_data;
                exit;
            }
        }
        return $original_template;
    }
    add_filter('template_include', 'custom_template_include');
}

/**
 * The function `sq_enqueue_scripts_app` enqueues all JavaScript files located in the
 * specified directory of a WordPress plugin.
 */
function sq_enqueue_scripts_app()
{
    foreach (glob(plugin_dir_path(__FILE__) . '/../src/app/assets/*.js') as $file) {
        // $file contains the name and extension of the file
        wp_enqueue_script($file, plugins_url('/../src/app/assets/' . basename($file), __FILE__), array(), null, true);
    }
}

/**
 * The function `sq_enqueue_styles_app` enqueues all CSS files located in the specified directory
 * within a WordPress plugin.
 */
function sq_enqueue_styles_app()
{
    foreach (glob(plugin_dir_path(__FILE__) . '/../src/app/assets/*.css') as $file) {
        // $file contains the name and extension of the file
        wp_enqueue_style($file, plugins_url('/../src/app/assets/' . basename($file), __FILE__));
    }
}

function sq_enqueue_vue_app()
{
    sq_enqueue_scripts_app();
    sq_enqueue_styles_app();
}
sq_enqueue_assets();
