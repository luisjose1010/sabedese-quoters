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
