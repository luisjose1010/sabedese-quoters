<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/car', array(
        'methods' => 'POST',
        'callback' => 'post_car',
        'permission_callback' => '__return_true'
    ));
});
