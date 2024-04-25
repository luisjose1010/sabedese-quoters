<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/patrimonial', array(
        'methods' => 'POST',
        'callback' => 'post_patrimonial',
        'permission_callback' => '__return_true'
    ));
});
