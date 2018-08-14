<?php
header('Content-type: image/jpeg');
//require 'connect.php'; // why can't I use require????
//==============================================================================
$conn_error = 'Could Not Connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'user_login';

$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);
if($conn->connect_error){
  die($conn_error);
}
//==============================================================================
//$email = 'something@something.com'; //make this dynamic
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql = "SELECT * FROM `users` WHERE `id`='".mysqli_real_escape_string($conn, $id)."'";
  $result = $conn->query($sql);
  if($result->num_rows >= 1){
    while($row=$result->fetch_assoc()){
      $email = $row['username'];
    }
  }else{
    $email = 'error';
  }
}else{
  $email = 'None';
}

$email_length = strlen($email);
$font_size = 4;

$image_height = ImageFontHeight($font_size); //Returns the pixel height of a character in the specified font
$image_width  = ImageFontWidth($font_size) * $email_length;  //Returns the pixel width of a character in the specified font

$image = imagecreate($image_width, $image_height); // creates blank image with specfied size
imagecolorallocate($image, 255, 255, 255);
$font_color = imagecolorallocate($image, 0, 0, 0);

imagestring($image, $font_size, 0, 0, $email, $font_color);
imagejpeg($image);
/*
we cannot specfiy the form here or add output within the code since erros will
come up (cannot modify header information). The content type will be image/jpeg
and nothing else.
*/
 ?>
