<?php
require_once __DIR__ . '/vendor/mpdf/autoload.php';

$mpdf = new \Mpdf\Mpdf([
    'default_font' => 'sukhothai'
]);
$mpdf->SetDocTemplate('img/Certificate/Certificate-Quizizz.pdf',true);
$mpdf->AddPage('L'); // Adds a new page in Landscape orientation
$text = '<div style="z-index: 99;text-align: center;padding-top: 220px;font-size: 51px;color:#fff;">'.$_GET['name'].'</div>';
$text .= '<div style="z-index: 99;text-align: center;font-size: 36px;color:#fff;">ได้รับรางวัล '.$_GET['result'].'</div>';
$mpdf->WriteHTML($text);
//$mpdf->Image('img/Certificate/Certificate-Quizizz.png', 0, 0, 297, 210, 'png', '', true, false);


$mpdf->Output();
?>

