<?php
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];
$font_size = 30; // set captcha font

$image_width = 200; // set captcha width /height
$image_height = 40;

$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 255, 255, 255); // allocate white to be used
$text_color = imagecolorallocate($image, 0, 0, 0); //allocate black as color for text

imagegetftext($image, $font_size, 0, 15, 30, $text_color, 'font.ttf', $text);
imagejpeg($image); // get to browser
}
 ?>
