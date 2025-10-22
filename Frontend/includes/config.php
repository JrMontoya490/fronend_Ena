<?php
// URL base del backend Strapi (Render)
$backendUrl = "https://backend-ena.onrender.com";

// Función para obtener datos desde el backend con cURL
function getApiData($endpoint) {
    global $backendUrl;
    $url = $backendUrl . $endpoint;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}
?>
