<?php
$conn_error = 'Could Not Connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'test';
$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);
if($conn->connect_error){
  die($conn_error);
}


if(isset($_POST['text'])) {
  $text = $_POST['text'];
  if(!empty($_POST['text'])){
    $sql = "INSERT INTO `names` VALUES ('', '".mysqli_real_escape_string($conn, $text)."')";
    if($result = $conn->query($sql)){
      echo 'ok';
    }else{
      echo 'failed';
    }
  }else{
    echo 'please enter a name';
  }
  // if($result->num_rows >= 1){
  //   while($row=$result->fetch_assoc()){
  //     echo $row['names'].'<br>';
  //   }
  // }
}
// echo $_POST['text'];

 ?>
