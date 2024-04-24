<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/transport', array(
        'methods' => 'POST',
        'callback' => 'post_transport',
        'permission_callback' => '__return_true'
    ));
});
