<?php
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'test';

$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);

class databaseException extends Exception {}
class serverException extends Exception {}

try {
  if(!$conn->connect_error) {
    throw new serverException('cannot connect to server');
  }else if(!$conn->select_db($mysql_db)) {
    throw new databaseException('cannot select database');
  }else{
    echo 'connected';
  }
}catch (Exception $e){
  echo 'Error '.$e->getMessage();
}catch (Exception $e){
  echo 'Error '.$e->getMessage();
}

?>
