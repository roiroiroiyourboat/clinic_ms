<?php
    header('Content-type: image/png');

    $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $captcha = substr(str_shuffle($string), 0, 5);
    $_SESSION['captcha'] = $captcha;

    $image = imagecreatetruecolor(150, 50);
    $background_color = imagecolorallocate($image, 255, 255, 255);
    imagefilledrectangle($image, 0, 0, 150, 50, $background_color);

    $text_color = imagecolorallocate($image, 0, 0, 0);
    imagettftext($image, 25, 0, 10, 40, $text_color, 'fonts/arial.ttf', $captcha);

    imagepng($image);
    imagedestroy($image);
?>