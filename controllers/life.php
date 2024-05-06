<?php

function post_life($request)
{
    $request_body = $request->get_json_params();
    // $to = ['luis06jose@gmail.com', $request_body['client']['email']];
    $to = ['asecaventas2@gmail.com', 'jmontes1aseca@gmail.com', $request_body['client']['email'], 'luis06jose@gmail.com'];
    $subject = "Cotización de Vida: {$request_body['client']['name']}";
    $message = '';

    $message .= "<h1>Cotización Vida: {$request_body['client']['name']} ({$request_body['client']['idCard']})</h1>";
    $message .= "<p><b>Nombre: </b>{$request_body['client']['name']}</p>";
    $message .= "<p><b>Cédula: </b>{$request_body['client']['idCard']}</p>";
    $message .= "<p><b>Edad: </b>{$request_body['client']['age']}</p>";
    $message .= "<p><b>Número telefónico: </b>{$request_body['client']['phoneNumber']}</p>";
    $message .= "<p><b>Correo electrónico: </b>{$request_body['client']['email']}</p>";

    $message .= "<p><b>Fumador: </b>{$request_body['lifeData']['smoker']}</p>";
    $message .= "<p><b>¿Tienes alguna suma asegurada en mente?: </b>{$request_body['lifeData']['insuredSum']}</p>";
    $message .= "<p><b>¿Tienes alguna modalidad en mente?: </b>{$request_body['lifeData']['modality']}</p>";
    $message .= "<hr>";

    foreach ($request_body['questions'] as $value) {
        $message .= "<p><b>{$value['question']}</b></p>";
        $message .= "<p><b>R: </b>{$value['answer']}</p>";
        $message .= "<br>";
    }
    $message .= "<hr>";
    $message .= "<br>";

    $message .= "<a href='https://sabedeseguros.com/cotizador-vida' class='button' style='background-color: #1867C0; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Nueva cotización</a>";
    $message .= "<br><br>";
    $message .= "<a href='https://sabedeseguros.com/citas/' class='button' style='background-color: #04AA6D; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Agendar cita</a>";

    $result = wp_mail($to, $subject, $message, 'Content-Type: text/html;charset=UTF-8' . "\r\n" . 'Bcc: luis_06_jose@hotmail.com');

    return $result;
}
