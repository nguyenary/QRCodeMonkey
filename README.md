# PHP Class Generate Free QRCode

> 👉 A library using PHP to generate QRCode from https://www.qrcode-monkey.com free <br>
> ✋ **NOTE:** Do not generate too many QRCode at once or your IP will be locked for a period of time

<p align="center">
    <img src="image/src/facebook.svg" width="100"> 
    <img src="image/src/youtube.svg" width="100">
    <img src="image/src/ninja.svg" width="100">
    <img src="image/src/twitter.svg" width="100">
    <img src="image/src/rain.svg" width="100">
    <img src="image/src/jungle.svg" width="100">
</p>

## Getting started

Use `composer` to integrate your PHP project

```shell
composer require nguyenary/qr-code-monkey
```

## Configuration

📘 You can configure to generate QRCode or use default configuration. Below is a list of configurations that you can use

<table>
    <thead>
        <tr>
            <th>Parameter</th>
            <th>Type</th>
            <th>Default</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>body</td>
            <td>String</td>
            <td>square</td>
            <td>
                <img width="30" src="image/src/qr/body/square.png" />
                &nbsp;&nbsp;&nbsp;&nbsp;square
                <br />
                <img width="30" src="image/src/qr/body/mosaic.png" />
                &nbsp;&nbsp;&nbsp;&nbsp;mosaic
                <br />
                <img width="30" src="image/src/qr/body/dot.png" />
                &nbsp;&nbsp;&nbsp;&nbsp;dot
                <br />
                <img width="30" src="image/src/qr/body/circle.png" />
                &nbsp;&nbsp;&nbsp;&nbsp;circle
                <br />
                <img width="30" src="image/src/qr/body/circle-zebra.png" />
                &nbsp;&nbsp;&nbsp;&nbsp;circle-zebra
                <br />
                <img width="30" src="image/src/qr/body/circle-zebra-vertical.png" />
                &nbsp;&nbsp;&nbsp;&nbsp;circle-zebra-vertical
                <br />
                <img width="30" src="image/src/qr/body/circular.png" />
                &nbsp;&nbsp;&nbsp;&nbsp;circular
                <br />
                <img width="30" src="image/src/qr/body/edge-cut.png" />
                &nbsp;&nbsp;edge-cut
                <br />
                <img width="30" src="image/src/qr/body/edge-cut-smooth.png" />
                &nbsp;&nbsp;edge-cut-smooth
                <br />
                <img width="30" src="image/src/qr/body/japnese.png" />
                &nbsp;&nbsp;japnese
                <br />
                <img width="30" src="image/src/qr/body/leaf.png" />
                &nbsp;&nbsp;leaf
                <br />
                <img width="30" src="image/src/qr/body/pointed.png" />
                &nbsp;&nbsp;pointed
                <br />
                <img width="30" src="image/src/qr/body/pointed-edge-cut.png" />
                &nbsp;&nbsp;pointed-edge-cut
                <br />
                <img width="30" src="image/src/qr/body/pointed-in.png" />
                &nbsp;&nbsp;pointed-in
                <br />
                <img width="30" src="image/src/qr/body/pointed-in-smooth.png" />
                &nbsp;&nbsp;pointed-in-smooth
                <br />
                <img width="30" src="image/src/qr/body/pointed-smooth.png" />
                &nbsp;&nbsp;pointed-smooth
                <br />
                <img width="30" src="image/src/qr/body/round.png" />
                &nbsp;&nbsp;round
                <br />
                <img width="30" src="image/src/qr/body/rounded-in.png" />
                &nbsp;&nbsp;rounded-in
                <br />
                <img width="30" src="image/src/qr/body/rounded-in-smooth.png" />
                &nbsp;&nbsp;rounded-in-smooth
                <br />
                <img width="30" src="image/src/qr/body/rounded-pointed.png" />
                &nbsp;&nbsp;rounded-pointed
                <br />
                <img width="30" src="image/src/qr/body/star.png" />
                &nbsp;&nbsp;star
                <br />
                <img width="30" src="image/src/qr/body/diamond.png" />
                &nbsp;&nbsp;diamond
                <br />
            </td>
        </tr>
        <tr>
            <td>eye</td>
            <td>String</td>
            <td>frame0</td>
            <td>
                <!-- ngRepeat: eye in PresetService.designOptions.eyeFrames -->
                <img width="30" src="image/src/qr/eye-frames/frame0.png" />
                &nbsp;&nbsp;frame0
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame1.png" />
                &nbsp;&nbsp;frame1
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame2.png" />
                &nbsp;&nbsp;frame2
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame3.png" />
                &nbsp;&nbsp;frame3
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame4.png" />
                &nbsp;&nbsp;frame4
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame5.png" />
                &nbsp;&nbsp;frame5
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame6.png" />
                &nbsp;&nbsp;frame6
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame7.png" />
                &nbsp;&nbsp;frame7
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame8.png" />
                &nbsp;&nbsp;frame8
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame10.png" />
                &nbsp;&nbsp;frame10
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame11.png" />
                &nbsp;&nbsp;frame11
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame12.png" />
                &nbsp;&nbsp;frame12
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame13.png" />
                &nbsp;&nbsp;frame13
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame14.png" />
                &nbsp;&nbsp;frame14
                <br />
                <img width="30" src="image/src/qr/eye-frames/frame16.png" />
                &nbsp;&nbsp;frame16
                <br />
            </td>
        </tr>
        <tr>
            <td>eyeBall</td>
            <td>String</td>
            <td>ball0</td>
            <td>
                <!-- ngRepeat: ball in PresetService.designOptions.eyeBalls -->
                <img width="30" src="image/src/qr/eye-balls/ball0.png" />
                &nbsp;&nbsp;ball0
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball1.png" />
                &nbsp;&nbsp;ball1
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball2.png" />
                &nbsp;&nbsp;ball2
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball3.png" />
                &nbsp;&nbsp;ball3
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball5.png" />
                &nbsp;&nbsp;ball5
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball6.png" />
                &nbsp;&nbsp;ball6
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball7.png" />
                &nbsp;&nbsp;ball7
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball8.png" />
                &nbsp;&nbsp;ball8
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball10.png" />
                &nbsp;&nbsp;ball10
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball11.png" />
                &nbsp;&nbsp;ball11
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball12.png" />
                &nbsp;&nbsp;ball12
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball13.png" />
                &nbsp;&nbsp;ball13
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball14.png" />
                &nbsp;&nbsp;ball14
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball15.png" />
                &nbsp;&nbsp;ball15
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball16.png" />
                &nbsp;&nbsp;ball16
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball17.png" />
                &nbsp;&nbsp;ball17
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball18.png" />
                &nbsp;&nbsp;ball18
                <br />
                <img width="30" src="image/src/qr/eye-balls/ball19.png" />
                ball19
            </td>
        </tr>
        <tr>
            <td>erf1</td>
            <td>Array</td>
            <td>[ ]</td>
            <td>Rotate the <strong>upper left eye</strong> element. Add <strong>"fv"</strong> or <strong>"fh"</strong> to invert element vertically or horizontally. E.g. ["fv","fh"] inverts a element vertically and horziontally.</td>
        </tr>
        <tr>
            <td>erf2</td>
            <td>Array</td>
            <td>[ ]</td>
            <td>Rotate the <strong>upper right eye</strong> element. Add <strong>"fv"</strong> or <strong>"fh"</strong> to invert element vertically or horizontally. E.g. ["fv","fh"] inverts a element vertically and horziontally.</td>
        </tr>
        <tr>
            <td>erf3</td>
            <td>Array</td>
            <td>[ ]</td>
            <td>Rotate the <strong>lower left eye</strong> element. Add <strong>"fv"</strong> or <strong>"fh"</strong> to invert element vertically or horizontally. E.g. ["fv","fh"] inverts a element vertically and horziontally.</td>
        </tr>
        <tr>
            <td>brf1</td>
            <td>Array</td>
            <td>[ ]</td>
            <td>Rotate the <strong>upper left eye ball</strong> element. Add <strong>"fv"</strong> or <strong>"fh"</strong> to invert element vertically or horizontally. E.g. ["fv","fh"] inverts a element vertically and horziontally.</td>
        </tr>
        <tr>
            <td>brf2</td>
            <td>Array</td>
            <td>[ ]</td>
            <td>Rotate the <strong>upper right eye ball</strong> element. Add <strong>"fv"</strong> or <strong>"fh"</strong> to invert element vertically or horizontally. E.g. ["fv","fh"] inverts a element vertically and horziontally.</td>
        </tr>
        <tr>
            <td>brf3</td>
            <td>Array</td>
            <td>[ ]</td>
            <td>Rotate the <strong>lower left eye ball</strong> element. Add <strong>"fv"</strong> or <strong>"fh"</strong> to invert element vertically or horizontally. E.g. ["fv","fh"] inverts a element vertically and horziontally.</td>
        </tr>
        <tr>
            <td>bodyColor</td>
            <td>String</td>
            <td>#000000</td>
            <td>Color of QR code body as HEX value.</td>
        </tr>
        <tr>
            <td>bgColor</td>
            <td>String</td>
            <td>#ffffff</td>
            <td>Color of QR code background as HEX value. Note: the background should always have a lighter color to be scanable with all devices.</td>
        </tr>
        <tr>
            <td>eye1Color</td>
            <td>String</td>
            <td>#000000</td>
            <td>Color of the <strong>upper left eye</strong> as HEX value.</td>
        </tr>
        <tr>
            <td>eye2Color</td>
            <td>String</td>
            <td>#000000</td>
            <td>Color of the <strong>upper right eye</strong> as HEX value.</td>
        </tr>
        <tr>
            <td>eye3Color</td>
            <td>String</td>
            <td>#000000</td>
            <td>Color of the <strong>lower left eye</strong> as HEX value.</td>
        </tr>
        <tr>
            <td>eyeBall1Color</td>
            <td>String</td>
            <td>#000000</td>
            <td>Color of the <strong>upper left eye ball</strong> as HEX value.</td>
        </tr>
        <tr>
            <td>eyeBall2Color</td>
            <td>String</td>
            <td>#000000</td>
            <td>Color of the <strong>upper right eye ball</strong> as HEX value.</td>
        </tr>
        <tr>
            <td>eyeBall3Color</td>
            <td>String</td>
            <td>#000000</td>
            <td>Color of the <strong>lower left eye ball</strong> as HEX value.</td>
        </tr>
        <tr>
            <td>gradientColor1</td>
            <td>String</td>
            <td>null</td>
            <td>Color 1 for gradient color of body as HEX.</td>
        </tr>
        <tr>
            <td>gradientColor2</td>
            <td>String</td>
            <td>null</td>
            <td>Color 2 for gradient color of body as HEX.</td>
        </tr>
        <tr>
            <td>gradientType</td>
            <td>String</td>
            <td>linear</td>
            <td>Gradient type for color of body. Value can be <strong>"linear"</strong> or <strong>"radial"</strong>.</td>
        </tr>
        <tr>
            <td>gradientOnEyes</td>
            <td>Boolean</td>
            <td>false</td>
            <td>Disable individual colors for the eye elements and set the gradient color for the complete QR code.</td>
        </tr>
    </tbody>
</table>

## Example Usage

> For details on the examples please see the file `example.php`

### First you need to initialize a QRCode instance

```php
$qrcode = new QRCode('nguyenary');
```

### Example easy usage:

```php
print_r($qrcode->create());
```

The above code will return a URL containing a QR Code

### Example of saving QRCode as a file

```php
$qrcode->create('file_qrcode.png');
```

### Example for config:

```php
$qrcode = new QRCode('nguyenary');

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
```

### Example for set logo, file type and size

```php
// Set logo path file to use
$qrcode->setLogo('image/facebook.png');

// Support png, svg, jpg, pdf, eps
$qrcode->setFileType('png');

// Size limit is 3480 pixel
$qrcode->setSize(200);
```

## Features

What's all the bells and whistles this project can perform?

- Generate QRCode completely for free
- Many QRCode templates can be customized
- Can be exported as a URL or saved as a file
- Output format options (Support `png`, `svg`, `jpg`, `pdf`, `eps`)

✋ **NOTE:** Format `pdf` and `eps` no support for color gradients

## Contributing

This is a project I do in my spare time to contribute to the community. I would very much welcome if you would like to contribute to this project

## Licensing

The code in this project is licensed under MIT license
