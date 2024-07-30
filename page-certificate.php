<?php include_once('php/php-results.php'); ?>

<?php
$path = dirname(dirname(__FILE__));	
// 		require_once $path.'/librarie_skj/google_sheet/vendor/autoload.php';

require_once $path.'/librarie_skj/mpdf/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf([
    'default_font' => 'maehongson'
]);

$Key = explode('_',$_GET['Key']);

//จรวดขวดน้ำ
if($Key[0] == "RK"){
    foreach ($values_Rocket as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Quizizz.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 190px;font-size: 51px;color:#fff;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;font-size: 36px;color:#fff;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
            }
        }
    }


//วาดภาพ
if($Key[0] == "WP"){
    foreach ($values_Draw as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Wadpab.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 220px;font-size: 51px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;font-size: 36px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
        
    }
    
}

//ชุดระไซเคิล
if($Key[0] == "RE"){
    foreach ($values_recycle as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Recycle.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 230px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;padding-top: -10px;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
    }
}


//Cover dense
if($Key[0] == "CD"){
    foreach ($values_CoverDance as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-egg.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 230px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
    }
}

//SpeedyQuiz
if($Key[0] == "SQ"){
    foreach ($values_SpeedyQuiz as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Tiktok.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 230px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;padding-top: -10px;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
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

// หุ่นยนต์ linetracing
if($Key[0] == "LT"){
    foreach ($values_linetracing as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Tiktok.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 230px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;padding-top: -10px;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
    }
}

// หุ่นยนต์ linetracing
if($Key[0] == "LTH"){
    foreach ($values_linetracingenhance as $key => $value) {
        if($_GET['Key'] == $value[0]){
            $mpdf->SetDocTemplate('img/Certificate/signature/Certificate-Tiktok.pdf',true);
            $mpdf->AddPage('L'); 
            $text = '<div style="z-index: 99;text-align: center;padding-top: 230px;font-size: 48px;color:#000;">'.$value[2].' '.$value[3].'</div>';
            $text .= '<div style="z-index: 99;text-align: center;padding-top: -10px;font-size: 34px;color:#000;">ได้รับรางวัล '.$value[6].' '.$value[1].'</div>';
            $mpdf->WriteHTML($text);
        }
    }
}



$mpdf->Output();

?>