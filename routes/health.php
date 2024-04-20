<?php

add_action('rest_api_init', function () {
    register_rest_route('sq/v1', '/health', array(
        'methods' => 'GET',
        'callback' => 'get_health',
        'permission_callback' => '__return_true'
    ));

    register_rest_route('sq/v1', '/health/company', array(
        'methods' => 'GET',
        'callback' => 'get_health_companies',
        'permission_callback' => '__return_true'
    ));

    register_rest_route('sq/v1', '/health/insured-sum', array(
        'methods' => 'GET',
        'callback' => 'get_health_insured_sums',
        'permission_callback' => '__return_true'
    ));


    register_rest_route('sq/v1', '/health', array(
        'methods' => 'POST',
        'callback' => 'post_health',
        'permission_callback' => '__return_true'
    ));
});
