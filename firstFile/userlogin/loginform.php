<?php
require 'connect.php';

if(isset($_POST['Username'])&&isset($_POST['password'])){
  $username=$_POST['Username']; $password=$_POST['password'];
  $password_hashed=md5($password);

  if(!empty($username)&&!empty($password)){
    $sql="SELECT `id` FROM `users` WHERE `username`='$username' AND `password`='$password_hashed'";
    //$sql="SELECT * FROM `users`";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
      while($row=$result->fetch_assoc()){
        echo $row['id'];
      }
    }else{
      echo 'authentication not successful';
    }
  } else{
    echo 'wrong';
  }
}
 ?>
 <form action="<?php echo $current_file; ?>" method="POST">
   Username: <input type="text" name="Username"> Password: <input type="password" name="password">
   <input type="submit" name="submit" value="Login">
 </form>
