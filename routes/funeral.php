<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/funeral', array(
        'methods' => 'POST',
        'callback' => 'post_funeral',
        'permission_callback' => '__return_true'
    ));
});
