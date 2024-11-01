<?php

function sq_health_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<health-quoter></health-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_health', 'sq_health_quoter'); // Cotizador de salud

function sq_funeral_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<funeral-quoter></funeral-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_funeral', 'sq_funeral_quoter'); // Cotizador funerario

function sq_personal_accidents_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<accidents-quoter></accidents-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_accidents', 'sq_personal_accidents_quoter'); // Cotizador de accidentes personales

function sq_life_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<life-quoter></life-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_life', 'sq_life_quoter'); // Cotizador de vida

function sq_transport_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<transport-quoter></transport-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_transport', 'sq_transport_quoter'); // Cotizador de transporte

function sq_car_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<car-quoter></car-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_car', 'sq_car_quoter'); // Cotizador de auto

function sq_patrimonial_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<patrimonial-quoter></patrimonial-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_patrimonial', 'sq_patrimonial_quoter'); // Cotizador de patrimoniales

function sq_surety_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<surety-quoter></surety-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_surety', 'sq_surety_quoter'); // Cotizador de fianzas

function sq_pet_quoter()
{
    $html = '<div id="sabedese-app">';
    $html .= '<pet-quoter></pet-quoter>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_pet', 'sq_pet_quoter'); // Cotizador de mascotas

function sq_all_quoters()
{
    $html = '<div id="sabedese-app">';
    $html .= '<dropdown-quoters></dropdown-quoters>';
    $html .= '</div>';

    return $html;
}
add_shortcode('sq_all_quoters', 'sq_all_quoters'); // Cotizadores desplegables
