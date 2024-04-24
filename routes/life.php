<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/life', array(
        'methods' => 'POST',
        'callback' => 'post_life',
        'permission_callback' => '__return_true'
    ));
});
