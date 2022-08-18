<?php include_once('php/php-results.php'); ?>

<?php
require_once __DIR__ . '/vendor/mpdf/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'default_font' => 'sukhothai'
]);

//วาดภาพ
// foreach ($values_WP as $key => $value) {
//     $mpdf->SetDocTemplate('img/Certificate/Certificate-Wadpab.pdf',true);
//     $mpdf->AddPage('L'); 
//     $text = '<div style="z-index: 99;text-align: center;padding-top: 220px;font-size: 51px;color:#000;">'.$value[2].' '.$value[3].'</div>';
//     $text .= '<div style="z-index: 99;text-align: center;padding-top: -20px;font-size: 36px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
//     $mpdf->WriteHTML($text);
// }

//ตอบคำถามวิทย์
// foreach ($values_QT as $key => $value) {
//     $mpdf->SetDocTemplate('img/Certificate/Certificate-Qzi.pdf',true);
//     $mpdf->AddPage('L'); 
//     $text = '<div style="z-index: 99;text-align: center;padding-top: 220px;font-size: 51px;color:#fff;">'.$value[2].' '.$value[3].'</div>';
//     $text .= '<div style="z-index: 99;text-align: center;padding-top: -20px;font-size: 36px;color:#fff;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
//     $mpdf->WriteHTML($text);
// }

//ไข่นิวตัน
// foreach ($values_egg as $key => $value) {
//     $mpdf->SetDocTemplate('img/Certificate/Certificate-egg.pdf',true);
//     $mpdf->AddPage('L'); 
//     $text = '<div style="z-index: 99;text-align: center;padding-top: 210px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
//     $text .= '<div style="z-index: 99;text-align: center;padding-top: -20px;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
//     $mpdf->WriteHTML($text);
// }

//ROV
foreach ($values_ROV as $key => $value) {
    $mpdf->SetDocTemplate('img/Certificate/Certificate-ROV.pdf',true);
    $mpdf->AddPage('L'); 
    $text = '<div style="z-index: 99;text-align: center;padding-top: 210px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
    $text .= '<div style="z-index: 99;text-align: center;padding-top: -20px;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
    $mpdf->WriteHTML($text);
}

$mpdf->Output();

?>

