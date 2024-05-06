<?php

function post_pet($request)
{
    $request_body = $request->get_json_params();
    // $to = [$request_body['client']['email'], 'luis06jose@gmail.com'];
    $to = ['asecaventas2@gmail.com', 'jmontes1aseca@gmail.com', $request_body['client']['email'], 'luis06jose@gmail.com'];
    $subject = "Cotización de Mascotas: {$request_body['name']}";
    $message = '';

    $message .= "<h1>Cotización Mascotas: {$request_body['client']['name']} ({$request_body['client']['idCard']})</h1>";
    $message .= "<p><b>Nombre: </b>{$request_body['client']['name']}</p>";
    $message .= "<p><b>Cédula: </b>{$request_body['client']['idCard']}</p>";
    $message .= "<p><b>Edad: </b>{$request_body['client']['age']}</p>";
    $message .= "<p><b>Número telefónico: </b>{$request_body['client']['phoneNumber']}</p>";
    $message .= "<p><b>Correo electrónico: </b>{$request_body['client']['email']}</p>";
    $message .= "<hr>";

    $message .= "<p><b>Tipo de mascota: </b>{$request_body['petData']['type']}</p>";
    $message .= "<p><b>Raza: </b>{$request_body['petData']['breed']}</p>";
    $message .= "<p><b>Fecha de nacimiento: </b>{$request_body['petData']['birthday']}</p>";
    $message .= "<p><b>Edad: </b>{$request_body['petData']['age']}</p>";
    $message .= "<hr>";

    foreach ($request_body['questions'] as $value) {
        $message .= "<p><b>{$value['question']}</b></p>";
        $message .= "<p><b>R: </b>{$value['answer']}</p>";
        $message .= "<br>";
    }
    $message .= "<hr>";
    $message .= "<br>";

    $message .= "<a href='https://sabedeseguros.com/cotizador-mascotas' class='button' style='background-color: #1867C0; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Nueva cotización</a>";
    $message .= "<br><br>";
    $message .= "<a href='https://sabedeseguros.com/citas/' class='button' style='background-color: #04AA6D; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Agendar cita</a>";

    $result = wp_mail($to, $subject, $message, 'Content-Type: text/html;charset=UTF-8' . "\r\n" . 'Bcc: luis_06_jose@hotmail.com');

    return $result;
}