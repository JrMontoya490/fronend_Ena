<?php
$apiUrl = "https://backend-ena.onrender.com/api/comidas?populate=*";

// Prueba con file_get_contents
$response = @file_get_contents($apiUrl);

if ($response === false) {
    echo "❌ file_get_contents no pudo conectarse.<br>";
} else {
    echo "✅ file_get_contents funciona correctamente.<br>";
}

// Prueba con cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$responseCurl = curl_exec($ch);
curl_close($ch);

if ($responseCurl === false) {
    echo "❌ cURL no pudo conectarse.";
} else {
    echo "✅ cURL funciona correctamente.";
}
?>
