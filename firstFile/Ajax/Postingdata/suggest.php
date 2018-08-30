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

if(isset($_GET['search_text']) && !empty($_GET['search_text'])) {
  $search_text = $_GET['search_text'];
  $sql = "SELECT * FROM names WHERE names LIKE '".mysqli_real_escape_string($conn, $search_text)."%'";
  $result = $conn->query($sql);
  if($result->num_rows >= 1){
    while($row=$result->fetch_assoc()){
      echo $row['names'].'<br>';
    }
  }
}

 ?>
