<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/surety', array(
        'methods' => 'POST',
        'callback' => 'post_surety',
        'permission_callback' => '__return_true'
    ));
});
