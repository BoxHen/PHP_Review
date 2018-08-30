 <?php

$conn_error = 'Could Not Connect';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'user_login';

$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);
if($conn->connect_error){
  die($conn_error);
}
 ?>
