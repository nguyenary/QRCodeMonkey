<?php

namespace nguyenary\QRCodeMonkey\Request;

use Curl;
use Exception;
use nguyenary\QRCodeMonkey\Constants\Constant;

class Request
{
    private static $content, $size, $file, $config, $logo;

    public static function qrCodeCreate(): ?array
    {
        $data = [
            "data" => static::getContent(),
            "config" => array_replace_recursive(static::getConfig(), static::getLogo()),
            "size" => static::getSize(),
            "download" => "imageUrl",
            "file" => static::getFile(),
        ];

        $post_data = [
            'api' => Constant::QRCODE_API,
            'fields' => json_encode($data),
            'header' => ["Content-Type: application/json"]
        ];

        return static::request($post_data);
    }

    public static function setContent(string $content): void
    {
        static::$content = $content;
    }

    public static function getContent(): string
    {
        return static::$content;
    }

    public static function setConfig(array $config = []): void
    {
        static::$config = $config;
    }

    public static function getConfig(): array
    {
        return array_replace_recursive(Constant::CONFIG_DEFAULT, static::$config);
    }

    public static function setSize(int $size): void
    {
        static::$size = $size;
    }

    public static function getSize(): int
    {
        return static::$size;
    }

    public static function setFile(string $file): void
    {
        static::$file = $file;
    }

    public static function getFile(): string
    {
        return static::$file;
    }

    public static function setLogo(string $path = null, string $mode = 'default'): void
    {
        $logo = null;

        if (!in_array($mode, Constant::LOGO_MODE)) {
            die('Error: Logo mode not support. Support "default" and "clean"');
        }

        if ($path) {
            $image = static::uploadImage($path)['file'];

            if (!$image) {
                die('Error: Upload logo error');
            }

            $logo = $image;
        }

        static::$logo = ['logo' => $logo, 'logoMode' => $mode];
    }

    public static function getLogo(): array
    {
        return static::$logo;
    }

    public static function uploadImage($path): ?array
    {
        if (!file_exists($path) && !filter_var($path, FILTER_VALIDATE_URL)) {
            die('Error: Image path not exist');
        }

        $file = ['name' => 'file', 'path' => basename($path), 'content' => file_get_contents($path)];

        $boundary = uniqid();
        $delimiter = '-------------' . $boundary;
        $file_data = static::buildDataFile($boundary, $file);

        $post_data = [
            'api' => Constant::UPLOAD_API,
            'fields' => $file_data,
            'header' => [
                "Content-Type: multipart/form-data; boundary=" . $delimiter,
                "Content-Length: " . strlen($file_data)
            ]
        ];

        return static::request($post_data);
    }

    private static function buildDataFile($boundary, $file): string
    {
        $delimiter = '-------------' . $boundary;

        $data = "--" . $delimiter . PHP_EOL
            . 'Content-Disposition: form-data; name="' . $file['name'] . '"; filename="' . $file['path'] . '.png"' . PHP_EOL
            . 'Content-Type: image/png'.PHP_EOL
            . 'Content-Transfer-Encoding: binary'.PHP_EOL
        ;

        $data .= PHP_EOL;
        $data .= $file['content'] . PHP_EOL;
        $data .= "--" . $delimiter . "--". PHP_EOL;

        return $data;
    }

    private static function request($data): ?array
    {
        $api = $data['api'] ?? null;
        $fields = $data['fields'] ?? null;
        $header = $data['header'] ?? [];

        if (!$api || !$fields) {
            die('Error: API and Form Data is required');
        }

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $api,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $fields,
            CURLOPT_HTTPHEADER => $header,
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            die($error);
        }

        $result = Data::jsonToArray($response);
        $error_message = $result['errorMessage'] ?? null;

        if ($error_message) {
            die('Error: ' . $error_message);
        }

        return $result;
    }
}
