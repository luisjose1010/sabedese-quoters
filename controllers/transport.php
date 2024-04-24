<?php

function post_transport($request)
{
    $request_body = $request->get_json_params();
    // $to = ['luis06jose@gmail.com', $request_body['company']['email']];
    $to = ['asecaventas2@gmail.com', 'jmontes1aseca@gmail.com', $request_body['client']['email'], 'luis06jose@gmail.com'];
    $subject = "Cotización de Transporte: {$request_body['company']['name']}";
    $message = '';

    $message .= "<h1>Cotización Transporte: {$request_body['company']['name']} ({$request_body['company']['rif']})</h1>";
    $message .= "<p><b>Nombre de la empresa: </b>{$request_body['company']['name']}</p>";
    $message .= "<p><b>RIF: </b>{$request_body['company']['rif']}</p>";
    $message .= "<p><b>Número de teléfono: </b>{$request_body['company']['phoneNumber']}</p>";
    $message .= "<p><b>Correo electrónico: </b>{$request_body['company']['email']}</p>";
    $message .= "<p><b>Persona a cargo: </b>{$request_body['company']['owner']}</p>";
    $message .= "<hr>";

    foreach ($request_body['questions'] as $value) {
        $message .= "<p><b>{$value['question']}</b></p>";
        $message .= "<p><b>R: </b>{$value['answer']}</p>";
        $message .= "<br>";
    }
    $message .= "<hr>";
    $message .= "<br>";

    $message .= "<a href='https://sabedeseguros.com/cotizador-funerario' class='button' style='background-color: #1867C0; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Nueva cotización</a>";
    $message .= "<br><br>";
    $message .= "<a href='https://sabedeseguros.com/citas/' class='button' style='background-color: #04AA6D; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Agendar cita</a>";

    $result = wp_mail($to, $subject, $message, 'Content-Type: text/html;charset=UTF-8' . "\r\n" . 'Bcc: luis_06_jose@hotmail.com');

    return $result;
}
