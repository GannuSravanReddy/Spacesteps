<?php
 session_start();
 $_SESSION['LAST_ACTIVITY'] = time();
  include "./database/connection.php";
  echo "<br>";
  $errors = ""; 
  if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $enpass = md5($password);
    $user_check_query = "SELECT * FROM reginfo WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) 
    { // if user exists
      if ($user['username'] === $username) 
      {
        if ($user['password'] === $enpass)
        { 
          $_SESSION['firstname']=$user['firstname'];
          $_SESSION['lastname']=$user['lastname'];
          $_SESSION['email']=$user['email'];
          $_SESSION['username']=$user['username'];
          
          
          header('location: member');

          
        }else
        {
            $_SESSION['lerror']="Wrong password";
            header('location: web1');
        } 
        
      }
    }else{
        $_SESSION['lerror']="no account found. please register first..!";
        header('location: web1');
    }

  }else{
    header('location: web1');
  }
?>