<?php

function sq_health_quoter()
{
?>
    <div id="sabedese-app">
        <health-quoter></health-quoter>
    </div>
<?php
}
add_shortcode('sq_health', 'sq_health_quoter'); // Cotizador de salud

function sq_funeral_quoter()
{
?>
    <div id="sabedese-app">
        <funeral-quoter></funeral-quoter>
    </div>
<?php
}
add_shortcode('sq_funeral', 'sq_funeral_quoter'); // Cotizador funerario

function sq_personal_accidents_quoter()
{
?>
    <div id="sabedese-app">
        <accidents-quoter></accidents-quoter>
    </div>
<?php
}
add_shortcode('sq_accidents', 'sq_personal_accidents_quoter'); // Cotizador de accidentes personales

function sq_life_quoter()
{
?>
    <div id="sabedese-app">
        <life-quoter></life-quoter>
    </div>
<?php
}
add_shortcode('sq_life', 'sq_life_quoter'); // Cotizador de vida

function sq_transport_quoter()
{
?>
    <div id="sabedese-app">
        <transport-quoter></transport-quoter>
    </div>
<?php
}
add_shortcode('sq_transport', 'sq_transport_quoter'); // Cotizador de transporte

function sq_car_quoter()
{
?>
    <div id="sabedese-app">
        <car-quoter></car-quoter>
    </div>
<?php
}
add_shortcode('sq_car', 'sq_car_quoter'); // Cotizador de auto

function sq_patrimonial_quoter()
{
?>
    <div id="sabedese-app">
        <patrimonial-quoter></patrimonial-quoter>
    </div>
<?php
}
add_shortcode('sq_patrimonial', 'sq_patrimonial_quoter'); // Cotizador de patrimoniales

function sq_surety_quoter()
{
?>
    <div id="sabedese-app">
        <surety-quoter></surety-quoter>
    </div>
<?php
}
add_shortcode('sq_surety', 'sq_surety_quoter'); // Cotizador de fianzas
