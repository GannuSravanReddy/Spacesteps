<?php

session_start();

 if (isset($_SESSION['nerror']) && (time() - $_SESSION['LASTACTIVITY'] > (2))) {

  unset($_SESSION['nerror']);

}
if (isset($_SESSION['success']) && (time() - $_SESSION['LASTACTIVITY'] > (2))) {


  unset($_SESSION['success']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS | administration</title>
<style>
body{
    background-image:url('../com.jpg');
    background-repeat: no-repeat;
  background-size: auto;
  color:#fff;

}
    .container{
        box-shadow:0 0 15px 3px black;
        border-color:#fff;
        color:#fff;
    }
</style>
</head>
<body><br><br><br>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
    <div class="container" style="width:400px;border-style:double;border-width:thin;border-radius:10px;">

            <h1>NEWS Administration pannel</h1>
            <?php
            if(isset($_SESSION['nerror'])){
             ?>
              <div class="alert alert-danger d-flex align-items-center" role="alert">
               <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
               <div>
               <?php echo "".$_SESSION['nerror']; ?>
               </div>
             </div>
             <?php
            }
            ?>
            <?php
            if(isset($_SESSION['success'])){
             ?>
            <div id="success" class="alert alert-success d-flex align-items-center" role="alert">
               <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
               <div id="success">
                 <?php echo "". $_SESSION['success'];?>
               </div>
            </div>
            <?php
            }
            ?>
            <form action="newspost.php" method="post"><br>
              <div class="input-group mb-3">
               <input type="text" placeholder="Head line" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="headline" required>
              </div>
        <div class="input-group mb-3">
         <input type="text" placeholder="Head line" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="headline" required>
        </div>
        <div class="input-group mb-3">
         <input type="file"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"name="imgurl"required>
        </div>
        <div class="form-outline">

  <textarea placeholder="Write your article here..." class="form-control" id="textAreaExample2" rows="6"></textarea>

</div><br>

        <button type="submit" class="btn btn-success" id="post" name="post">Post News</button>&nbsp;&nbsp;&nbsp;
         <button type="button" class="btn btn-warning">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#5c5116" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg> Report an issue
        </button>
      </form><br>
</div>


</body>
</html>
