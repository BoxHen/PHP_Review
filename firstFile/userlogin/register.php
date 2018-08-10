<?php
  require 'core.php';
  require 'connect.php';

  if(!loggedin()){
    if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password2'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])){
      $username =  mysqli_real_escape_string($conn, $_POST['username']);
      $password =  mysqli_real_escape_string($conn, $_POST['password']);
      $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
      $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
      $lastname =  mysqli_real_escape_string($conn, $_POST['lastname']);
      $password_hashed = MD5($password);
      if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['password2'])&&!empty($_POST['firstname'])&&!empty($_POST['lastname'])){
        if(strlen($username>30||strlen($firstname>30)||strlen($lastname>30))){
          echo 'field(s) are too long. Please keep below 30 characters!';
        }else{
          if($password==$password2){ // checks if the passwords match
            $sql="SELECT `username` FROM `users` WHERE `username`='$username'";
            $result = $conn->query($sql);
            if($result->num_rows >= 1){ // username is NOT unique
              while($row = $result->fetch_assoc()){
                echo 'Please try another username. The username, '.$row['username'].' is already taken';
              }
            }else{ // username is unique
              $sql = "INSERT INTO `users`(`username`, `password`, `first name`, `last name`) VALUES ('{$username}','{$password_hashed}','{$firstname}','{$lastname}')";
              //$sql = "INSERT INTO `users`(`username`, `password`, `first name`, `last name`) VALUES ('".$username."','".$password_hashed."','".$firstname."','".$lastname."')";
              if($conn->query($sql)){
                //echo 'Welcome new user!'; // we will direct them to new page so they cannot reload and keep registering
                header('Location: register_success.php');
              }else{
                echo 'We could not sign you up at this time. Try again later.';
              }
            }
          }else{ // passwords do not match
            echo 'passwords do not match. Please re-enter password.';
          }
        }
      }else{
        echo 'All fields are required!';
      }
    }
?>

<form action="register.php" method="POST">
  Username:<br> <input type="text" name="username" maxlength="30" value="<?php if(isset($username)){echo $username;}?>"><br>
  Password:<br> <input type="password" name="password"><br>
  Re-enter Password:<br> <input type="password" name="password2"><br>
  First Name:<br> <input type="text" name="firstname" maxlength="30" value="<?php if(isset($username)){echo $firstname;}?>"><br>
  Last Name:<br> <input type="text" name="lastname" maxlength="30" value="<?php if(isset($username)){echo $lastname;}?>"><br><br>
  <input type="submit" name="submit" value="Submit"><br>
</form>

<?php
  }else if(loggedin()){
    echo 'in already';
  }
  /*
  $sql = "INSERT INTO `users`(`username`, `password`, `first name`, `last name`) VALUES ($username,$password,$firstname,$lastname)";
  $conn->query($sql);
  */
 ?>
