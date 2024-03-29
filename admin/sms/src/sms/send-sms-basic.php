<?php
session_start();
$message = $_GET['message'];
$_SESSION['msg'] = $message;
/**
 * Send an SMS message directly by calling HTTP endpoint.
 *
 * For your convenience, environment variables are already pre-populated with your account data
 * like authentication, base URL and phone number.
 *
 * Please find detailed information in the readme file.
 */

require '../../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

$client = new Client([
    'base_uri' => "https://xlme9q.api.infobip.com/",
    'headers' => [
        'Authorization' => "App 5fcd68769431a3cc8a46e2439d7c2cdc-24b3f473-ecd6-4599-ae63-0205d6b92f8d",
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ]
]);

$response = $client->request(
    'POST',
    'sms/2/text/advanced',
    [
        RequestOptions::JSON => [
            'messages' => [
                [
                    'from' => 'InfoSMS',
                    'destinations' => [
                        ['to' => "639095019617"]
                    ],
                    'text' => $_SESSION['msg'] ,
                ]
            ]
        ],
    ]
);

echo("HTTP code: " . $response->getStatusCode() . PHP_EOL);
echo("Response body: " . $response->getBody()->getContents() . PHP_EOL);
header("refresh:0;url=../../../announcement.php");
