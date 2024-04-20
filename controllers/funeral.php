<?php

function post_funeral($request)
{
    $request_body = $request->get_json_params();
    // $to = ['luis06jose@gmail.com', $request_body['client']['email']];
    $to = ['asecaventas2@gmail.com', 'jmontes1aseca@gmail.com', $request_body['client']['email'], 'luis06jose@gmail.com'];
    $subject = "Cotización de Funerario: {$request_body['client']['name']}";
    $message = '';

    $message .= "<h1>Cotización Funerario: {$request_body['client']['name']} ({$request_body['client']['idCard']})</h1>";
    $message .= "<p><b>Edad: </b>{$request_body['client']['age']}</p>";
    $message .= "<p><b>Número: </b>{$request_body['client']['phoneNumber']}</p>";
    $message .= "<p><b>Correo electrónico: </b>{$request_body['client']['email']}</p>";
    $message .= "<p><b>Tipo: </b>{$request_body['funeralData']['type']}</p>";
    $message .= "<hr>";

    if ($request_body['funeralData']['type'] === 'Colectivo') {
        $message .= "<h2>Datos de la empresa</h2>";
        $message .= "<p><b>Nombre de la empresa: </b>{$request_body['funeralData']['company']['name']}</p>";
        $message .= "<p><b>RIF: </b>{$request_body['funeralData']['company']['rif']}</p>";
        $message .= "<p><b>Correo electrónico: </b>{$request_body['funeralData']['company']['email']}</p>";
        $message .= "<p><b>Número de teléfono: </b>{$request_body['funeralData']['company']['phoneNumber']}</p>";
        $message .= "<p><b>Persona encargada: </b>{$request_body['funeralData']['company']['owner']}</p>";
        $message .= "<hr>";
    }

    foreach ($request_body['funeralData']['beneficiaries'] as $index => $value) {
        $index += 1;
        $message .= "<h3>Beneficiario {$index}</h3>";
        $message .= "<p><b>Nombre: </b>{$value['name']}</p>";
        $message .= "<p><b>Parentesco: </b>{$value['relationship']}</p>";
        $message .= "<p><b>Edad: </b>{$value['age']}</p>";
        $message .= "<br>";
    }
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