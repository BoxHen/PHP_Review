<?php

$conn_error = 'Could Not Connect';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'test'; // database name
// create the connection
$conn = new mysqli($mysql_host, $mysql_user, $mysql_pass,$mysql_db);
// check the connection
if($conn->connect_error){
  die($conn_error);
}
// get user ip address
$user_ip = $_SERVER['REMOTE_ADDR'];
/*----------------------------------------------------------------------------*/
// checks if user ip address is registered
function ip_exists($conn, $user_ip){
  $sql = "SELECT ip FROM hit_ip";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      if ($row['ip'] != $user_ip){
        ip_add($conn, $user_ip);
        update_counter($conn);
        echo 'added';
      }else{
        echo'already exists on list';
      }
    } // end while
  } // end if
}
/*----------------------------------------------------------------------------*/
// adds the ip address to the list if not on it
function ip_add($conn, $user_ip){
  $sql = "INSERT INTO `hit_ip`(`ip`) VALUES ('$user_ip')";
  $conn->query($sql);
}
/*----------------------------------------------------------------------------*/
// update the hit counter if user ip address not listed
function update_counter($conn){
  $sql = "SELECT `count` FROM `hit_count`"; // the query to run
  $result = $conn->query($sql); // runs the query

  if($result->num_rows > 0){ // checks the number of rows in a result set.

    while($row = $result->fetch_assoc()){ // fetches a result row as an associative array.
      echo $updatedCount = $row["count"] + 1; // gets the count value and adds 1
      $sqlUpdate = "UPDATE hit_count SET count = '$updatedCount'";
      $conn->query($sqlUpdate); // runs the update query
    }

  }
}

ip_exists($conn, $user_ip);

?>
