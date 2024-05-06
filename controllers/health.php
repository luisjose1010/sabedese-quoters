<?php

/**
 * The function `get_health` retrieves health insurance data based on company, type, and insured sum
 * from a WordPress database.
 */
function get_health($request)
{
    global $wpdb;
    $company = $request->get_param('company');
    $type = $request->get_param('type');
    $insuredSum = $request->get_param('insured_sum');
    $query = "SELECT * FROM `wp81_sq_health` WHERE `company`='$company' AND `type`='$type' AND `insured_sum`='$insuredSum'";
    $results = $wpdb->get_results($query);
    return $results;
}

function get_health_companies($request)
{
    global $wpdb;
    $type = $request->get_param('type');
    $query = "SELECT `company` FROM `wp81_sq_health` WHERE `type`='$type' GROUP BY `company` DESC";
    $results = $wpdb->get_results($query);
    $response = Array();

    for ($i=0; $i < count($results); $i++) { 
        $response[] = $results[$i]->company;
    }
    return $response;
}

function get_health_insured_sums($request)
{
    global $wpdb;
    $company = $request->get_param('company');
    $type = $request->get_param('type');
    $query = "SELECT `insured_sum` FROM `wp81_sq_health` WHERE `company` = '$company' AND `type` = '$type' GROUP BY `insured_sum` ORDER BY CAST(REPLACE(`insured_sum`, ',', '') AS UNSIGNED) ASC";
    $results = $wpdb->get_results($query);
    $response = Array();

    for ($i=0; $i < count($results); $i++) { 
        $response[] = $results[$i]->insured_sum;
    }
    return $response;
}


function post_health($request)
{
    $request_body = $request->get_json_params();
    // $to = ['luis06jose@gmail.com', $request_body['client']['email']];
    $to = ['asecaventas2@gmail.com', 'jmontes1aseca@gmail.com', $request_body['client']['email'], 'luis06jose@gmail.com'];
    $subject = "Cotización de Salud: {$request_body['client']['name']}";
    $message = '';

    $message .= "<h1>Cotización Salud: {$request_body['client']['name']} ({$request_body['client']['idCard']})</h1>";
    $message .= "<p><b>Nombre: </b>{$request_body['client']['name']}</p>";
    $message .= "<p><b>Cédula: </b>{$request_body['client']['idCard']}</p>";
    $message .= "<p><b>Edad: </b>{$request_body['client']['age']}</p>";
    $message .= "<p><b>Número telefónico: </b>{$request_body['client']['phoneNumber']}</p>";
    $message .= "<p><b>Correo electrónico: </b>{$request_body['client']['email']}</p>";
    $message .= "<hr>";
    $message .= "<p><b>Empresa: </b>{$request_body['healthData']['company']}</p>";
    $message .= "<p><b>Suma asegurada: </b>{$request_body['healthData']['insuredSum']}</p>";
    $message .= "<p><b>Tipo: </b>{$request_body['healthData']['type']}</p>";
    $message .= "<p><b>Modo: </b>{$request_body['healthData']['mode']}</p>";
    $message .= "<p><b>Total: </b>\${$request_body['healthData']['total']}</p>";
    $message .= "<hr>";

    foreach ($request_body['healthData']['beneficiaries'] as $index => $value) {
        $index += 1;
        $message .= "<h3>Beneficiario {$index}</h3>";
        $message .= "<p><b>Edad: </b>{$value['age']}</p>";
        $message .= "<p><b>Parentesco: </b>{$value['relationship']}</p>";
        $message .= "<p><b>Prima: </b>\${$value['amount']}</p>";
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

    $message .= "<a href='https://sabedeseguros.com/cotizador-salud' class='button' style='background-color: #1867C0; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Nueva cotización</a>";
    $message .= "<br><br>";
    $message .= "<a href='https://sabedeseguros.com/citas/' class='button' style='background-color: #04AA6D; border: none; color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block; font-size: 16px; border-radius: 0.5rem;'>Agendar cita</a>";

    $result = wp_mail($to, $subject, $message, 'Content-Type: text/html;charset=UTF-8' . "\r\n" . 'Bcc: luis_06_jose@hotmail.com');

    return $result;
}
