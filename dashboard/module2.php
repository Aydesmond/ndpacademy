<?php

require_once('../vendor/autoload.php');

use Ajaxray\PHPWatermark\Watermark;

$watermark = new Watermark('https://ndpracademy.ng/dashboard/pdf/The_Man_In_The_Red_Underpants.pdf');

// Watermark with text
$watermark->setFont('Arial');
$watermark->setFontSize(18);
$watermark->setRotate(345);
$watermark->setOffset(20, 60);
$watermark->setPosition(Watermark::POSITION_BOTTOM_RIGHT);


$text = "ajaxray.com";
$watermark->withText($text, 'pdf/result_text.pdf');

die('it worked');


?>
