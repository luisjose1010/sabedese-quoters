<?php

function post_patrimonial($request)
{
    $request_body = $request->get_json_params();
    // $to = ['luis06jose@gmail.com', $request_body['client']['email']];
    $to = ['asecaventas2@gmail.com', 'jmontes1aseca@gmail.com', $request_body['client']['email'], 'luis06jose@gmail.com'];
    $subject = "Cotización de Patrimoniales: ";
    $message = '';

    $message .= "<h1>Cotización Patrimoniales: {$request_body['client']['name']} ({$request_body['client']['idCard']})</h1>";
    $message .= "<p><b>Tipo: </b>{$request_body['client']['age']}</p>";

    if ($request_body['patrimonialData']['type'] === 'Empresa') {
        $subject .= "{$request_body['company']['name']} ({$request_body['company']['rif']})";

        $message .= "<h2>Datos de Empresa</h2>";
        $message .= "<p><b>Nombre: </b>{$request_body['company']['name']}</p>";
        $message .= "<p><b>RIF: </b>{$request_body['company']['rif']}</p>";
        $message .= "<p><b>Correo electrónico: </b>{$request_body['company']['email']}</p>";
        $message .= "<p><b>Número de teléfono: </b>{$request_body['company']['phoneNumber']}</p>";
        $message .= "<p><b>Persona a cargo: </b>{$request_body['company']['owner']}</p>";
        $message .= "<hr>";
        $message .= "<br>";
    }

    if ($request_body['patrimonialData']['type'] === 'Hogar') {
        $subject .= "{$request_body['client']['name']} ({$request_body['client']['idCard']})";

        $message .= "<h2>Datos de Hogar</h2>";
        $message .= "<p><b>Nombre: </b>{$request_body['client']['name']}</p>";
        $message .= "<p><b>Cédula: </b>{$request_body['client']['idCard']}</p>";
        $message .= "<p><b>Edad: </b>{$request_body['client']['age']}</p>";
        $message .= "<p><b>Número de teléfono: </b>{$request_body['client']['phoneNumber']}</p>";
        $message .= "<p><b>Correo electrónico: </b>{$request_body['client']['email']}</p>";
        $message .= "<hr>";
        $message .= "<br>";
    }

    foreach ($request_body['questions'] as $value) {
        $message .= "<p><b>{$value['question']}</b></p>";
        $message .= "<p><b>R: </b>{$value['answer']}</p>";
        $message .= "<br>";
    }
    $message .= "<hr>";
    $message .= "<br>";

    $message .= "<a href='https://sabedeseguros.com/cotizador-automovil' class='button' style='background-color: #1867C0; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Nueva cotización</a>";
    $message .= "<br><br>";
    $message .= "<a href='https://sabedeseguros.com/citas/' class='button' style='background-color: #04AA6D; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Agendar cita</a>";

    $result = wp_mail($to, $subject, $message, 'Content-Type: text/html;charset=UTF-8' . "\r\n" . 'Bcc: luis_06_jose@hotmail.com');

    return $result;
}
