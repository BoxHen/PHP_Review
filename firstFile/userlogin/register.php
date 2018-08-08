<?php
  require 'core.php';

  if(!loggedin()){
    if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password2'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])){
      $username =  $_POST['username'];
      $password =  $_POST['password'];;
      $password2 = $_POST['password2'];
      $firstname = $_POST['firstname'];
      $lastname =  $_POST['lastname'];
      if(!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['password2'])&&!empty($_POST['firstname'])&&!empty($_POST['lastname'])){
        echo 'ok';
      }else{
        echo 'All fields are required!';
      }
    }
?>

<form action="register.php" method="POST">
  Username:<br> <input type="text" name="username"><br>
  Password:<br> <input type="password" name="password"><br>
  Re-enter Password:<br> <input type="password" name="password2"><br>
  First Name:<br> <input type="text" name="firstname"><br>
  Last Name:<br> <input type="text" name="lastname"><br><br>
  <input type="submit" name="submit" value="Submit"><br>
</form>

<?php
  }else if(loggedin()){
    echo 'in already';
  }
 ?>
