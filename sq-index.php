<?php

require_once __DIR__ . '/includes/sq-enqueue.php';
require_once __DIR__ . '/utilities/mime-types.php';

/**
 * @since 0.0.1
 * Plugin Name: Sabedeseguros Quoters Plugin
 * Description: Plugin para agregar el cotizador actualizado a la página Web de Wordpress.
 * Version: 0.0.1
 * Author: Luis José Medina
 */

if (!defined('ABSPATH')) {
    die('-1');
}


/**
 * The function `sq_start` includes necessary files for an API and an app in PHP plugin.
 */
function sq_start()
{
    // API
    require_once plugin_dir_path(__FILE__) . 'includes/sq-functions.php';

    // App
    require_once plugin_dir_path(__FILE__) . 'src/quoters.php';
}

/**
 * The function `sq_run` sets up actions and assets for the WordPress plugin using Vue.js.
 */
function sq_run()
{
    add_action('wp_enqueue_scripts', 'sq_enqueue_vue_app');
    add_action('init', 'sq_start');
}
sq_run();
