<?php
  session_start();
  $_SESSION['LAST_ACTIVITY'] = time();
  include './database/connection.php';
  if(!isset($_SESSION['username'])){
    header('location:web1');
  }else{
    $usr=$_SESSION['username'];
    $user_check_quer = "SELECT * FROM acadamics WHERE username='$usr' LIMIT 1";
          $res = mysqli_query($conn, $user_check_quer);
          $aca = mysqli_fetch_assoc($res);
          
          $_SESSION['shtml']=$aca['shtml'];
          $_SESSION['scss']=$aca['scss'];
          $_SESSION['sjs']=$aca['sjs'];
          $_SESSION['sphp']=$aca['sphp'];
          $_SESSION['html']= number_format($aca['shtml']*100/1369, 2);
          $_SESSION['css']=$aca['css'];
          $_SESSION['js']=$aca['js'];
          $_SESSION['php']=$aca['php'];
          
  }
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="theme-color" content="black">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "".$_SESSION['username'];?> | spacesteps</title>
  <style>
    *{margin:0px;padding:0px;}
    #body{
            font-family:"Trirong", serif;
            background:none;
            overflow-y:scroll;
           
        }
        #copyright{
          
          width:150px;
          position:relative;
          left:160px;
          top:-160px;
      }
      #copyright a{
       text-decoration:none;
      }
      #sociallinks a{
         
          text-decoration:none;
      }
    #TC{
        display: grid;
        gap:1px;
        grid-template-columns: repeat(1, 50%);
        background:none;
        
       }
       #TC div{
        width: 95%;
        height: auto;
        background: none;
        
        border-style:double;
        border-color:#ffff;
        border-width: thin;
        border-radius:5px;
        cursor:pointer;
        transition: transform .2s;
        margin-left:55%;
        margin-top:50px;
        color:#ffff;
        overflow:auto;
        padding-left:5px;
        font-size:22vm;
        border-radius:5px;
       }
       
       #TC div:hover{
        transform: scale(1.03); 
        box-shadow: 0px 0px 10px 2px black;
        }
        .logout{
          color:#ffff;
          background:none;
          border-color:#ffff;
          border-width: thin;
          border-radius:5px;
          cursor:pointer;
          width:70px;
          height:40px;
          transition:.5s;
        }
        .logout:hover{
          color:black;
          background:#ffff;
          border-color:#ffff;
          border-width: thin;
          border-radius:5px;
          cursor:pointer;
          
        }
        .complete{
          color:#ffff;
          background:#2c6e2f;
          border-color:green;
          border-width: thin;
          border-radius:5px;
          cursor:pointer;
          width:100px;
          margin-top:5px;
          height:30px;
          transition:.5s;
        }
        .complete:hover{
          color:#ffff;
          background:green;
          border-color:green;
          border-width: thin;
          box-shadow: 0px 0px 5px 0px green;
          border-radius:5px;
          cursor:pointer;
          
        }
        
  </style>
</head>
<body>
<div style="background-image:url('com.jpg');">
<div class="tutorials" style="background:none;width:100%; height:auto;color:#ffff; " ><br><center><h1>Welcome <?php echo "".$_SESSION['username'];?></h1><br><h2><b> Your curiculum</b></h2></center>
        <form action="logout.php" method="POST"><button class="logout" style="margin-left:80%;" type="submit" name="logout">Logout</button></form>
          <div id="TC" class="container">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
              <div onclick="location.href='./tutorials/html/member_progress';">
                  <center><b>HTML</b></center><br> 
                  score:&nbsp;<?php echo "".$_SESSION['shtml'];?><br><br>
                  completed:&nbsp;&nbsp;<?php  echo "".$_SESSION['html'];?>%&nbsp;<progress id="file" value="<?php echo "".$_SESSION['html'];?>" max="100"style="color:red;"> 32% </progress><br>
                  <span style="position:relative;top:-17px;">
                    <span>medal:</span>

                      <?php 
                      if($_SESSION['html']<33)
                      {
                        ?>
                         <img src="bronze.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      elseif($_SESSION['html']>33 and $_SESSION['html']<75)
                      {
                        ?>
                        <img src="silver.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      else
                      { ?>
                        <img src="gold.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      ?>

                  </span><br>
                  <center><button class="complete" type="submit" onclick="location.href='./tutorials/html/member_progress';" name="logout">Complete now</button></center><br>
              </div>

              <div onclick="location.href='https://www.facebook.com/';">
                <center><b>CSS</b></center><br> 
                  score:&nbsp;<?php echo "".$_SESSION['scss'];?><br><br>
                  completed:&nbsp;&nbsp;<?php echo "".$_SESSION['css'];?>%&nbsp;
                   <progress id="file" value="<?php echo "".$_SESSION['css'];?>" max="100"style="color:red;"> 32% </progress><br>
                   <span style="position:relative;top:-17px;">
                     <span>medal:</span>
                     <?php 
                      if($_SESSION['css']<33)
                      {
                        ?>
                         <img src="bronze.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      elseif($_SESSION['css']>33 and $_SESSION['html']<75)
                      {
                        ?>
                        <img src="silver.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      else
                      { ?>
                        <img src="gold.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      ?>
                    </span><br>
                     <center><button class="complete" type="submit" onclick="location.href='https://www.facebook.com/';" name="logout">Complete now</button></center><br>
              </div>

              <div onclick="location.href='https://www.facebook.com/';">
               <center><b>Java script</b></center><br> 
                 score: &nbsp;<?php echo "".$_SESSION['sjs'];?><br><br>
                 completed:&nbsp;&nbsp;<?php echo "".$_SESSION['js'];?>%&nbsp;
                   <progress id="file" value="<?php echo "".$_SESSION['js'];?>" max="100"style="color:red;"> 32% </progress><br>
                    <span style="position:relative;top:-17px;">
                     <span>medal:</span>
                     <?php 
                      if($_SESSION['js']<33)
                      {
                        ?>
                         <img src="bronze.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      elseif($_SESSION['js']>33 and $_SESSION['html']<75)
                      {
                        ?>
                        <img src="silver.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      else
                      { ?>
                        <img src="gold.png" alt="<?php echo "".$_SESSION['html'];?>" width="50px"style="position:relative;top:23px;left:-5px;">
                        <?php
                      }
                      ?>
                    </span><br>
                    <center><button class="complete" type="submit" onclick="location.href='https://www.facebook.com/';" name="logout">Complete now</button></center><br>
              </div>
              
       <!--   <div onclick="location.href='https://www.facebook.com/';"><b>SQL</b> <br>score: <br>completed:<?php echo "".$_SESSION['sql'];?>%<br>medal:</div>
              <div onclick="location.href='https://www.facebook.com/';">C</div>
              <div onclick="location.href='https://www.facebook.com/';">C++</div>
              <div onclick="location.href='https://www.facebook.com/';">JAVA</div>
              <div onclick="location.href='https://www.facebook.com/';">PYTHON</div>
              <div onclick="location.href='https://www.facebook.com/';">R</div>
              <div onclick="location.href='https://www.facebook.com/';">Node.js</div>
              <div onclick="location.href='https://www.facebook.com/';">OS</div>
              <div onclick="location.href='https://www.facebook.com/';">XML</div>
              <div onclick="location.href='https://www.facebook.com/';">Jquery</div>
              <div onclick="location.href='https://www.facebook.com/';">JSON</div>
              <div onclick="location.href='https://www.facebook.com/';">Assembly</div>-->
              
              
              
          </div><br>
          </div>

          <div class="about" style=" width:100%; height:500px; background-color:#b8b8b8;color:#5e5e5e;" >
            <br><h2 style="margin-left:20px;">About us</h2>
            <div id="abt" class="d-flex align-items-start"><p style="margin-left:10px;">Spacesteps is a E-learning platform which is developed for students to learn the concepts more efficiently and in depth. We support practical learning and we support people to lear practically, we are able to give you a way to learn. To know more about practical learning through spacesteps you can cantact us by clicking on <a href="">contact us.</a></p></div><br><br>
            <div id="sociallinks" class="align-self-stretch"style="margin-left:10%">Social links
              <ul>
               <li><a href="">Linked in</a></li>
               <li><a href="">Facebook</a></li>
               <li><a href="">Instagram</a></li>
               <li><a href="">YouTube</a></li>
               <li><a href="">Twitter</a></li>
              </ul>
            </div>
            <div id="copyright" class="d-flex align-items-end"style="margin-top:53px;margin-left:15%;">
                <ul>Info
                <li><a href="">Privacy policy</a></li>
                <li><a href="">contact us</a></li>
                <li><a href="">Quick query</a></li>
                </ul>
                
            </div>
            <div style="margin-top:-70px;"><center>© <?php echo date("Y");?> All right are reserved for Spacesteps organization.</center></div>
        </div>
  </div>
</body>
</html>