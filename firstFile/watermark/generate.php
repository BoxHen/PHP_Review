<?php
header('Content-type: image/jpeg');

if(isset($_GET['source'])){
  $source = $_GET['source'];

  $watermark = imagecreatefrompng('logo.png');
  $watermark_width  = imagesx($watermark);
  $watermark_height = imagesy($watermark);

  $image = imagecreatetruecolor($watermark_width, $watermark_height);

}
 ?>
