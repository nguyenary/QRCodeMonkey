<?php

namespace nguyenary\QRCodeMonkey;

use nguyenary\QRCodeMonkey\Request\Request;
use nguyenary\QRCodeMonkey\Constants\Constant;

class QRCode
{
    private $data = 'nguyenary';
    private $size = 1000;
    private $type = 'png';
    private $config = [];
    private $logo = null;
    private $logo_mode = 'default';

    public function __construct(string $data)
    {
        if (!$data) {
            die('Error: Data of setData function must not null');
        }

        $this->data = $data;
    }

    /**
     * @param array $config Array config for create QRCode
     * @return void
     */
    public function setConfig(array $config = []): void
    {
        $this->config = $config;
    }

    /**
     * @param int $size Size width and height of result
     * @return void
     */
    public function setSize(int $size = 1000): void
    {
        $this->size = $size;
    }

    /**
     * @param string $type Format of output. Support png, svg, jpg, pdf, eps (Note: pdf and eps no support for color gradients)
     * @return void
     */
    public function setFileType(string $type): void
    {
        if (!in_array($type, Constant::FILE_TYPE)) {
            die('Error: File type not support. Support png, svg, jpg, pdf, eps (pdf and eps no support for color gradients)');
        }

        $this->type = $type;
    }

    /**
     * @param string|null $path Image URL or path file to use as logo for QRCode
     * @param string $mode Set this value to "clean" to remove the background behind the integrated logo
     * @return void
     */
    public function setLogo(string $path = null, string $mode = 'default'): void
    {
        $this->logo = $path;
        $this->logo_mode = $mode;
    }

    /**
     * @param string|null $path Default returns image url. Path to save as file
     * @return string|null
     */
    public function create(string $path = null): ?string
    {
        Request::setConfig($this->config);
        Request::setContent($this->data);
        Request::setSize($this->size);
        Request::setFile($this->type);
        Request::setLogo($this->logo, $this->logo_mode);

        $result = Request::qrCodeCreate();
        $image = $result['imageUrl'] ?? null;

        if (!$image) {
            die('Error: An unknown error');
        }

        $image = static::changeUrl($image);

        if ($path) {
            $path_folder = dirname($path);

            if (!file_exists($path_folder)) {
                mkdir($path_folder, 0777, true);
            }

            file_put_contents($path, file_get_contents($image));
            return null;
        }

        return $image;
    }

    /**
     * @param string $image
     * @return string
     */
    private static function changeUrl(string $image): string
    {
        return 'https:' . $image;
    }
}
