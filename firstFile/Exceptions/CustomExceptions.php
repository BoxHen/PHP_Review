<?php
$conn_error = 'Could Not Connect';
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'test';

$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);
// if($conn->connect_error){
//  die($conn_error);
// }
class databaseExceptions extends Exceptions {}
class serverExceptions extends Exceptions {}

try {
  if($conn->select_db($mysql_db){
    throw new databaseExceptions('cannot select database')
  }else if($conn->connect_error){
    throw new serverExceptions('cannot connect to server')
  }else{
    echo 'connected';
  }
}catch (Exception $e){
  echo 'Error '.$e->getMessage();
}catch (Exception $e){
  echo 'Error '.$e->getMessage();
}

?>
