<?php
use PDFfiller\OAuth2\Client\Provider\Template;

$provider = require_once __DIR__ . '/../bootstrap/initWithFabric.php';
$template = new Template($provider,['id'=> 216865300]);
$templateWithWatermark = $template->watermark('Watermark text');
dd($templateWithWatermark);
