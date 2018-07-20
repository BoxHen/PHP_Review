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

@$mysql_conn = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass) OR die('Could not connect');
  if(@mysQLi_select_db($mysql_conn, $mysql_db) ){
    echo 'Connected';
  }else{
    die('Could not connect');
  }
 ?>
