<?php
require 'connect.php';

if(isset($_POST['Username'])&&isset($_POST['password'])){
  $username=$_POST['Username']; $password=$_POST['password'];
  $password_hashed=md5($password);

  if(!empty($username)&&!empty($password)){
    $sql="SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password_hashed'";
    //$sql="SELECT * FROM `users`";
    $result=$conn->query($sql);
    if($result->num_rows == 1){
      while($row=$result->fetch_assoc()){
        //echo 'Welcome '.$row['first name'].' '.$row['last name'];
        $user_id=$row['id'];
        $_SESSION['user_id']=$user_id;
        header('Location: index.php');
      }
    }else if($result->num_rows == 0){
      echo 'Authentication not successful. Username and/or Password not correct!';
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
