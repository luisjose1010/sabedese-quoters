<?php

function post_surety($request)
{
    $request_body = $request->get_json_params();
    // $to = ['luis06jose@gmail.com', $request_body['suretyData']['email']];
    $to = ['asecaventas2@gmail.com', 'jmontes1aseca@gmail.com', $request_body['suretyData']['email'], 'luis06jose@gmail.com'];
    $subject = "Cotización de Fianzas: {$request_body['suretyData']['name']}";
    $message = '';

    $message .= "<h1>Cotización Fianzas: {$request_body['suretyData']['name']}</h1>";
    $message .= "<p><b>Tipo de fianza: </b>{$request_body['suretyData']['type']}</p>";
    $message .= "<p><b>Nombre y apellido: </b>{$request_body['suretyData']['name']}</p>";
    $message .= "<p><b>Nombre de la empresa: </b>{$request_body['suretyData']['companyName']}</p>";
    $message .= "<p><b>Correo electrónico: </b>{$request_body['suretyData']['email']}</p>";
    $message .= "<p><b>Número de teléfono: </b>{$request_body['suretyData']['phoneNumber']}</p>";
    $message .= "<hr>";

    foreach ($request_body['questions'] as $value) {
        $message .= "<p><b>{$value['question']}</b></p>";
        $message .= "<p><b>R: </b>{$value['answer']}</p>";
        $message .= "<br>";
    }
    $message .= "<br>";

    $message .= "<a href='https://sabedeseguros.com/cotizador-fianzas' class='button' style='background-color: #1867C0; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Nueva cotización</a>";
    $message .= "<br><br>";
    $message .= "<a href='https://sabedeseguros.com/citas/' class='button' style='background-color: #04AA6D; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Agendar cita</a>";

    $result = wp_mail($to, $subject, $message, 'Content-Type: text/html;charset=UTF-8' . "\r\n" . 'Bcc: luis_06_jose@hotmail.com');

    return $result;
}
