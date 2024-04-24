<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/personal-accidents', array(
        'methods' => 'POST',
        'callback' => 'post_personal_accidents',
        'permission_callback' => '__return_true'
    ));
});
