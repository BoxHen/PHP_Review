 <?php

// function hit_count(){
//   $handle = fopen('count.txt', 'r');
//   $current = fread($handle, filesize('count.txt'));
//   echo $current;
//   fclose($handle);
//
//   $current_inc = $current+1;
//
//   $handle = fopen('count.txt', 'w');
//   fwrite($handle, $current_inc);
//   fclose($handle);
// }

$conn_error = 'Could Not Connect';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'test';

$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);
if($conn->connect_error){
  die($conn_error);
}
 ?>
