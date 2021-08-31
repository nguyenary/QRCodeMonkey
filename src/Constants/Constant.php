<?php

namespace nguyenary\QRCodeMonkey\Constants;

class Constant
{
    // API URL
    public const API = 'https://api.qrcode-monkey.com';

    // QRCode Endpoint
    public const QRCODE_API = self::API . '/qr/custom';

    // Upload Image Endpoint
    public const UPLOAD_API = self::API . '/qr/uploadimage';

    // File type
    public const FILE_TYPE = ['png', 'svg', 'jpg', 'pdf', 'eps'];

    // Logo mode
    public const LOGO_MODE = ['default', 'clean'];

    // Default config
    public const CONFIG_DEFAULT = [
        'body' => 'square',
        'eye' => 'frame0',
        'eyeBall' => 'ball0',
        'erf1' => [],
        'erf2' => [],
        'erf3' => [],
        'brf1' => [],
        'brf2' => [],
        'brf3' => [],
        'bodyColor' => '#000000',
        'bgColor' => '#FFFFFF',
        'eye1Color' => '#000000',
        'eye2Color' => '#000000',
        'eye3Color' => '#000000',
        'eyeBall1Color' => '#000000',
        'eyeBall2Color' => '#000000',
        'eyeBall3Color' => '#000000',
        'gradientColor1' => '',
        'gradientColor2' => '',
        'gradientType' => 'linear',
        'gradientOnEyes' => 'true',
        'logo' => '',
        'logoMode' => 'default',
    ];
}
