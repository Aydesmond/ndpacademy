
<?php
//include the autoloader
require_once('../vendor/autoload.php');

use Ilovepdf\Ilovepdf;

$watermark = new Ilovepdf('project_public_7097bcfe803bde1c97a7e1ec1f7651d1_o5eyZf0c4417898fd8962ad7958cec780a447','secret_key_1f90ebae101820cf9087717adaba465b_7CF6Rec5049cfead26e1cb9c86f03f219bbfd');

die('it is working');

// file var keeps info about server file id, name...
// it can be used latter to cancel file
$file = $watermark->addFile('pdf/The_Man_In_The_Red_Underpants.pdf');

// set mode to text
$watermark->setMode("text");

// set the text
$watermark->setText("NDPRAcademy");

// process files
$watermark->execute();

// and finally download the unlocked file. If no path is set, it will be downloaded on current folder
$watermark->download(); 

?>


<?php

// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// use Ajaxray\PHPWatermark\Watermark;

// include '../vendor/autoload.php';

// $watermark = new Watermark(__DIR__ . '/pdf/The_Man_In_The_Red_Underpants.pdf');


// Watermark with text
// $watermark->setFont('Arial');
// $watermark->setFontSize(18);
// $watermark->setRotate(345);
// $watermark->setOffset(20, 60);
// $watermark->setPosition(Watermark::POSITION_BOTTOM_RIGHT);


// $text = "NDPRAcademy";

// $watermark->withText($text, __DIR__ . '/pdf/result_text.pdf');

?>


<?php

// use \ConvertApi\ConvertApi;

// ConvertApi::setApiSecret('LTl5MYPE705uignq');
// $result = ConvertApi::convert('watermark', [
//         'File' => 'https://ndpracademy.ng/module1.pdf',
//         'Text' => 'NDPR Academy',
//         'PdfTitle' => 'NDPR Academy',
//     ], 'pdf'
// );
// $result->saveFiles('https://ndpracademy.ng/js');

?>
