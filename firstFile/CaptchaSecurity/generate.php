<?php
session_start();
header('Content-type: image/jpeg');

$text = $_SESSION['secure'];
$font_size = 30; // set captcha font

$image_width = 120; // set captcha width /height
$image_height = 40;

$image = imagecreate($image_width, $image_height);
imagecolorallocate($image, 255, 255, 255); // allocate white to be used
$text_color = imagecolorallocate($image, 0, 0, 0); //allocate black as color for text

for($x=1; $x<=30; $x++){ // used to create random lines in the text(noise)
  $x1 = rand(1, 100);
  $x2 = rand(1, 100);
  $y1 = rand(1, 100);
  $y2 = rand(1, 100);

  imageline($image, $x1, $y1, $x2 , $y2, $text_color);
}

//putenv('GDFONTPATH=' . realpath('.')); // Set the enviroment variable for GD
$font = dirname(__FILE__) . '/fonts/font.ttf';//../Windows/Fonts/
imagettftext($image, $font_size, 0, 15, 30, $text_color, $font, $text);
//wierd bug with ttf file being in same folder, so keep ttf in separate fonts folder
imagejpeg($image); // get to browser

 ?>
