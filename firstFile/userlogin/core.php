<?php
  ob_start();
  session_start();
  //require 'connect.php';
  $current_file = $_SERVER['SCRIPT_NAME'];
  //$http_referer = $_SERVER['HTTP_REFERER'];

  function loggedin(){
    if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
      return true;
    }else{
      return false;
    }
  }

  function getfield($field){
    require 'connect.php';
    $sql = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        return $row[$field];
      }
    }
  }

  /*
~~~What is a PHP Session?~~~
When you work with an application, you open it, do some changes, and then you close it. This is much like a Session.
The computer knows who you are. It knows when you start the application and when you end. But on the internet there
is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.

Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite
color, etc). By default, session variables last until the user closes the browser.

So; Session variables hold information about one single user, and are available to all pages in one application.*/
?>
