<?php 

require __DIR__ . '../../vendor/autoload.php';

// configure the Google Client
$client = new \Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
// credentials.json is the key file we downloaded while setting up our Google Sheets API
$path = 'credentials.json';
$client->setAuthConfig($path);

// configure the Sheets Service
$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1ZuRMKsmUbuDVibQzBQpMzRjWgePE9bPuMRElx2ePJL8';
$spreadsheet = $service->spreadsheets->get($spreadsheetId);


$range_QT = 'ตอบคำถามวิทย์!A3:G150'; // here we use the name of the Sheet to get all the rows
$response_QT = $service->spreadsheets_values->get($spreadsheetId, $range_QT);
$values_QT = $response_QT->getValues();
//echo '<pre>'; print_r($values);

$range_WP = 'วาดภาพ!A3:G150'; // here we use the name of the Sheet to get all the rows
$response_WP = $service->spreadsheets_values->get($spreadsheetId, $range_WP);
$values_WP = $response_WP->getValues();


$range_egg = 'ไข่ตกตึก!A3:G150'; // here we use the name of the Sheet to get all the rows
$response_egg = $service->spreadsheets_values->get($spreadsheetId, $range_egg);
$values_egg = $response_egg->getValues();

$range_ROV = 'ROV!A3:G150'; // here we use the name of the Sheet to get all the rows
$response_ROV = $service->spreadsheets_values->get($spreadsheetId, $range_ROV);
$values_ROV = $response_ROV->getValues();

$spreadsheetId = '1W3NB3czGyFiwfDsLl2vhwZa0SVzf0dXatYdK8QN8b2Y';
$spreadsheet = $service->spreadsheets->get($spreadsheetId);

$range_23 = '23 สิงหาคม 2565!A2:F5'; // here we use the name of the Sheet to get all the rows
$response_23 = $service->spreadsheets_values->get($spreadsheetId, $range_23);
$values_23 = $response_23->getValues();
//echo '<pre>'; print_r($spreadsheet);

?>