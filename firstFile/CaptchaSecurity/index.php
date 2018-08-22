<?php
session_start();

if(!isset($_POST['secure'])){
  $_SESSION['secure'] = rand(1000,9999);
}else{
  if($_SESSION['secure']==$_POST['secure']){
    echo 'good'; // forward to different page
  }else{
    echo 'incorrect';
    $_SESSION['secure'] = rand(1000,9999); // need to change on wrong one
  }
}


?>

<img src="generate.php" alt="">
<form action="index.php" method="POST">
  Type what you see: <input type="text" size="6" name="secure"> <input type="submit" value="submit">
</form>
