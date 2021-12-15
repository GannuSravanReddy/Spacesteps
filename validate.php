<?php
session_start();
$_SESSION['LAST_ACTIVITY'] = time();
 include "./database/connection.php";
 echo "<br>";
 $errors = ""; 
 //function to genrate username
 function randun($string){
 include "./database/connection.php";
 $rn= rand(1,100);
 $un=$string.$rn;
 
 $user_check_query = "SELECT * FROM reginfo WHERE username='$un' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $un) {
      randun($string);
    }
  }else{
    return $un;
    
  }
  
 };
///////////////////////////// variables
 if(isset($_POST['submitreg']))
{
  $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['cpassword']);
  if ($password_1 != $password_2) 
  {
    $_SESSION['error']="The two passwords do not match";
    header('location: web1.php');
  }else
  {

   $user_check_query = "SELECT * FROM reginfo WHERE email='$email' LIMIT 1";
   $result = mysqli_query($conn, $user_check_query);
   $user = mysqli_fetch_assoc($result);
  
    if ($user) 
    { // if user exists
      if ($user['email'] === $email) 
      {
      $_SESSION['error']="E-mail already exits";
      header('location: web1.php');
      }
    }else
    {

  
      $password=md5($password_1);
      $u=$firstname.$lastname;
      $username=randun($u);
 
      $query = "INSERT INTO reginfo (firstname, lastname, email, password,username) 
  			  VALUES('$firstname','$lastname', '$email', '$password','$username')";
  	  mysqli_query($conn, $query);
      $quer = "INSERT INTO `acadamics` (`username`, `html`, `css`, `js`, `php`, `shtml`, `scss`, `sjs`, `sphp`) 
                                VALUES ('$username', '0', '0', '0', '0', '0', '0', '0', '0')";
  	  mysqli_query($conn, $quer);
  	      
          $_SESSION['username']=$username;
          
          $user_check_quer = "SELECT * FROM acadamics WHERE username='$username' LIMIT 1";
          $res = mysqli_query($conn, $user_check_quer);
          $aca = mysqli_fetch_assoc($res);
          $_SESSION['html']=$aca['html'];
          $_SESSION['css']=$aca['css'];
          $_SESSION['js']=$aca['js'];
          $_SESSION['php']=$aca['php'];
          $_SESSION['error']="";
      header('location: member.php');
    }
  }
  	
}else
 {
  header('location: web1.php');
 }
?>