<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/health', array(
        'methods' => 'GET',
        'callback' => 'get_health',
    ));

    register_rest_route('sq/v1', '/health/insured-sum', array(
        'methods' => 'GET',
        'callback' => 'get_health_insured_sum',
    ));


    register_rest_route('sq/v1', '/health', array(
        'methods' => 'POST',
        'callback' => 'post_health',
    ));
});
