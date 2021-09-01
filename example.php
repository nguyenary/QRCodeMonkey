<?php

require_once 'vendor/autoload.php';

use nguyenary\QRCodeMonkey\QRCode;

$qrcode = new QRCode('nguyenary');

// NOTE: Do not generate too many QR codes at once or your IP will be locked for a period of time

// Example easy for create QRCode
print_r($qrcode->create());

// Example use config (Width and height sizes support up to 3480 pixel)
$qrcode->setConfig([
    'bgColor' => '#FFFFFF',
    'body' => 'square',
    'bodyColor' => '#0277bd',
    'brf1' => [],
    'brf2' => [],
    'brf3' => [],
    'erf1' => [],
    'erf2' => [],
    'erf3' => [],
    'eye' => 'frame0',
    'eye1Color' => '#000000',
    'eye2Color' => '#000000',
    'eye3Color' => '#000000',
    'eyeBall' => 'ball0',
    'eyeBall1Color' => '#000000',
    'eyeBall2Color' => '#000000',
    'eyeBall3Color' => '#000000',
    'gradientColor1' => '#0277bd',
    'gradientColor2' => '#000000',
    'gradientOnEyes' => 'true',
    'gradientType' => 'linear',
]);

$qrcode->setLogo('image/facebook.png');
$qrcode->setFileType('png');
$qrcode->setSize(200);

print_r($qrcode->create());

// Example output is file
$qrcode->create('nguyen.png');
