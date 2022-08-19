<?php include_once('php/php-results.php'); ?>

<?php
require_once __DIR__ . '/vendor/mpdf/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'default_font' => 'maehongson'
]);

$Key = explode('_',$_GET['Key']);


//วาดภาพ
if($Key[0] == "WP"){
    foreach ($values_WP as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Wadpab.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 220px;font-size: 51px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;font-size: 36px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
        
    }
    
}

//ตอบคำถามวิทย์
if($Key[0] == "QT"){
foreach ($values_QT as $key => $value) {
    if($_GET['Key'] == $value[0]){
        $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Quizizz.pdf',true);
        $mpdf->AddPage('L'); 
        $text = '<div style="z-index: 99;text-align: center;padding-top: 190px;font-size: 51px;color:#fff;">'.$value[2].' '.$value[3].'</div>';
        $text .= '<div style="z-index: 99;text-align: center;font-size: 36px;color:#fff;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
        $mpdf->WriteHTML($text);
        }
    }
}

//ไข่นิวตัน
if($Key[0] == "EGG"){
    foreach ($values_egg as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-egg.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 230px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
    }
}

//ROV
if($Key[0] == "ROV"){
    foreach ($values_ROV as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-ROV.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 230px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;padding-top: -10px;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
    }
}

$mpdf->Output();

?>