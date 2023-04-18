<?php 
echo $path = dirname(dirname(dirname(__FILE__)));

require $path . '/librarie_skj/google_sheet/vendor/autoload.php';

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

$range_Tiktok = 'Tiktok!A3:G50'; // here we use the name of the Sheet to get all the rows
$response_Tiktok = $service->spreadsheets_values->get($spreadsheetId, $range_Tiktok);
$values_Tiktok = $response_Tiktok->getValues();

$range_recycle = 'recycle!A3:G50'; // here we use the name of the Sheet to get all the rows
$response_recycle = $service->spreadsheets_values->get($spreadsheetId, $range_recycle);
$values_recycle = $response_recycle->getValues();



?>