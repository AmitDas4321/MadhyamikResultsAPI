<?php
header('Content-Type: application/json');

// API Endpoint
$url = 'https://api.linkpc.net/WBBSE/Madhyamik-Results/';
$params = [
    'roll_no' => '601382N0010',
    'dob' => '2008-08-14'
];

// Append query parameters
$apiUrl = $url . '?' . http_build_query($params);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

// Execute request
$response = curl_exec($ch);

// Handle errors
if (curl_errno($ch)) {
    echo json_encode([
        'status' => 'error',
        'message' => curl_error($ch)
    ]);
} else {
    // Print the response from the API
    echo $response;
}

// Close the cURL session
curl_close($ch);
