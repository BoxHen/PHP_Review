<?php
require 'connect.php';

if(isset($_POST['name_box'])) {
  $search_field = $_POST['name_box'];
  if(!empty($search_field)){
    $sql = "SELECT name FROM namelist WHERE name LIKE '%".$search_field."%'";
    $result = $conn->query($sql);
    if($result === false){
      echo 'Query failed';
      return false;
    }
    $resultsFound = $result->num_rows;
    if($resultsFound > 0){
      echo $resultsFound.' results found.'.'<br>';
      while($row = $result->fetch_assoc()){
        echo $row['name'].'<br>';
      }
    }else{
      echo 'no results';
    }
  }
}
?>
<form action="index.php" method="POST">
  Name: <input type="text" name="name_box"> <input type="submit" name="submit_button" value="Search">
</form>
