<?php 
$path1 = dirname(dirname(dirname(dirname(dirname(__FILE__)))));

require $path1. '/librarie_skj/google_sheet/vendor/autoload.php';

// configure the Google Client
$client = new Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');

// credentials.json is the key file we downloaded while setting up our Google Sheets API
$path = 'credentials.json';
$client->setAuthConfig($path);

// configure the Sheets Service
$service = new Google_Service_Sheets($client);

$spreadsheetId = '1ZuRMKsmUbuDVibQzBQpMzRjWgePE9bPuMRElx2ePJL8';
$spreadsheet = $service->spreadsheets->get($spreadsheetId);
//echo "<pre>";print_r($service);

$range_Rocket = 'จรวดขวดน้ำ!A3:G100'; // จรวดขวดน้ำ
$response_Rocket = $service->spreadsheets_values->get($spreadsheetId, $range_Rocket);
$values_Rocket = $response_Rocket->getValues();

$range_Draw = 'วาดภาพ!A3:G100'; // วาดภาพ
$response_Draw = $service->spreadsheets_values->get($spreadsheetId, $range_Draw);
$values_Draw = $response_Draw->getValues();
//echo '<pre>'; print_r($values);

$range_recycle = 'recycle!A3:G50'; // recycle
$response_recycle = $service->spreadsheets_values->get($spreadsheetId, $range_recycle);
$values_recycle = $response_recycle->getValues();

$range_CoverDance = 'CoverDance!A3:G50'; // CoverDance
$response_CoverDance = $service->spreadsheets_values->get($spreadsheetId, $range_CoverDance);
$values_CoverDance = $response_CoverDance->getValues();

$range_SpeedyQuiz = 'SpeedyQuiz!A3:G100'; // SpeedyQuiz
$response_SpeedyQuiz = $service->spreadsheets_values->get($spreadsheetId, $range_SpeedyQuiz);
$values_SpeedyQuiz = $response_SpeedyQuiz->getValues();

$range_ROV = 'ROV!A3:G150'; // ROV
$response_ROV = $service->spreadsheets_values->get($spreadsheetId, $range_ROV);
$values_ROV = $response_ROV->getValues();

$range_linetracing = 'linetracing!A3:G100'; // linetracing
$response_linetracing = $service->spreadsheets_values->get($spreadsheetId, $range_linetracing);
$values_linetracing = $response_linetracing->getValues();

$range_linetracingenhance = 'linetracingenhance!A3:G100'; // linetracing
$response_linetracingenhance = $service->spreadsheets_values->get($spreadsheetId, $range_linetracingenhance);
$values_linetracingenhance = $response_linetracingenhance->getValues();






?>