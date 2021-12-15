<?php
 session_start();
 $_SESSION['LAST_ACTIVITY'] = time();
 include '../../database/connection.php';
  if(!isset($_SESSION['username'])){
    header('location:../../web1');
    $_SESSION['warning']="Please Login to continue.";
  }else{
    $usr=$_SESSION['username'];
    $user_check_quer = "SELECT * FROM acadamics WHERE username='$usr' LIMIT 1";
          $res = mysqli_query($conn, $user_check_quer);
          $aca = mysqli_fetch_assoc($res);
          
          $_SESSION['shtml']=$aca['shtml'];
          $_SESSION['scss']=$aca['scss'];
          $_SESSION['sjs']=$aca['sjs'];
          $_SESSION['sphp']=$aca['sphp'];
          $_SESSION['html']=$aca['html'];
          $_SESSION['css']=$aca['css'];
          $_SESSION['js']=$aca['js'];
          $_SESSION['php']=$aca['php'];
          
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
    <title>Html progress</title>
    <style>
        body{
            background:#545352;
            color:#cccccc;
        }
        .container table tr{
          
            cursor:pointer;
          
        }
        .container table thead tr{
          cursor:default;
        }
    </style>
</head>
<body>
            <div class="container" >
                <h1>Your HTML Course progress.</h1>
                <h2><img src="profile.png" width="30px">&nbsp;&nbsp;<?php echo "".$_SESSION['username']; ?></h2>
            <div id="pagbtn"style="width:100%;"><center><span style="position:relative;left:-40%;"><input style="color:#fff;background:#74458a;width:100px;height:40px;border-style:double;border-width:thin;border-color:#bb70d4;border-radius:5px;" type="button" value="back" onclick="location.href='../../member.php';"></span></center></div>
  <br>
            <table class="table table-dark table-hover">
       <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Chapter</th>
      <th scope="col">status</th>
      
    </tr>
  </thead>
  <tbody>
    <tr onclick="location.href='Html';">
      <th scope="row">1</th>
      <td>Introduction</td>
      <td>
      <?php
      if($_SESSION['shtml']>37){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Environment setup</td>
      <td><?php
      if($_SESSION['shtml']>37*2){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Basics</td>
      <td><?php
      if($_SESSION['shtml']>37*3){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>HTML Elements</td>
      <td><?php
      if($_SESSION['shtml']>37*4){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>HTML Attributes</td>
      <td><?php
      if($_SESSION['shtml']>37*5){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">6</th>
      <td >HTML Headings</td>
      <td><?php
      if($_SESSION['shtml']>37*6){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>HTML Paragraphs</td>
      <td><?php
      if($_SESSION['shtml']>37*7){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>HTML Styling</td>
      <td><?php
      if($_SESSION['shtml']>37*8){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">9</th>
      <td >HTML Format</td>
      <td><?php
      if($_SESSION['shtml']>37*9){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>HTML Quotations</td>
      <td><?php
      if($_SESSION['shtml']>37*10){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>HTML Comments</td>
      <td><?php
      if($_SESSION['shtml']>37*11){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">12</th>
      <td >HTML Colouring</td>
      <td><?php
      if($_SESSION['shtml']>37*12){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>CSS in HTML</td>
      <td><?php
      if($_SESSION['shtml']>37*13){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>HTML links</td>
      <td><?php
      if($_SESSION['shtml']>37*14){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">15</th>
      <td >HTML Images</td>
      <td><?php
      if($_SESSION['shtml']>37*15){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>HTML Tables</td>
      <td><?php
      if($_SESSION['shtml']>37*16){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>Html Lists</td>
      <td><?php
      if($_SESSION['shtml']>37*17){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">18</th>
      <td >Html Blocks & Inline</td>
      <td><?php
      if($_SESSION['shtml']>37*18){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
  
    <tr>
      <th scope="row">19</th>
      <td>HTML class</td>
      <td><?php
      if($_SESSION['shtml']>37*19){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">20</th>
      <td>HTML Id</td>
      <td><?php
      if($_SESSION['shtml']>37*20){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">21</th>
      <td >HTML Iframes</td>
      <td><?php
      if($_SESSION['shtml']>37*21){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">22</th>
      <td>JavaScript in HTML</td>
      <td><?php
      if($_SESSION['shtml']>37*22){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">23</th>
      <td>HTML paths</td>
      <td><?php
      if($_SESSION['shtml']>37*23){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">24</th>
      <td >HTML Head</td>
      <td><?php
      if($_SESSION['shtml']>37*24){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">25</th>
      <td>HTML Layout's</td>
      <td><?php
      if($_SESSION['shtml']>37*25){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">26</th>
      <td>Responsive web</td>
      <td><?php
      if($_SESSION['shtml']>37*26){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">27</th>
      <td >Computer code</td>
      <td><?php
      if($_SESSION['shtml']>37*27){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">28</th>
      <td>Semantics</td>
      <td><?php
      if($_SESSION['shtml']>37*28){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">29</th>
      <td>Entities</td>
      <td><?php
      if($_SESSION['shtml']>37*29){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">30</th>
      <td >Symbols in HTML</td>
      <td><?php
      if($_SESSION['shtml']>37*30){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">31</th>
      <td>Emoji's in HTML</td>
      <td><?php
      if($_SESSION['shtml']>37*31){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">32</th>
      <td>HTML Charset</td>
      <td><?php
      if($_SESSION['shtml']>37*32){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">33</th>
      <td >URL</td>
      <td><?php
      if($_SESSION['shtml']>37*33){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">34</th>
      <td>Forms</td>
      <td><?php
      if($_SESSION['shtml']>37*34){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">35</th>
      <td>Graphics</td>
      <td><?php
      if($_SESSION['shtml']>37*35){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    <tr>
      <th scope="row">36</th>
      <td >Media</td>
      <td><?php
      if($_SESSION['shtml']>37*36){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
    </tr>
    <tr>
      <th scope="row">37</th>
      <td>API'S</td>
      <td><?php
      if($_SESSION['shtml']>37*37){
        ?><img src="tick.png" alt="completed" width="20px"><?php
      }else{
          ?><img src="cross.png" alt="not completed"width="20px"><?php
      }
      ?></td>
      
    </tr>
    </tbody>
    </table>
  </div>
            
</body>
</html>