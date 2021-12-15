<?php
session_start();
 include './database/connection.php';
if (isset($_SESSION['error']) && (time() - $_SESSION['LAST_ACTIVITY'] > (2))) {
    $_SESSION['error']="";
    $_SESSION['lerror']="";
    $_SESSION['warning']="";
        // unset $_SESSION
    // destroy session data
}if (isset($_SESSION['warning']) && (time() - $_SESSION['LAST_ACTIVITY'] > (2))) {

    $_SESSION['warning']="";
        // unset $_SESSION
    // destroy session data
}
if(isset($_SESSION['username'])){
    header('location:member.php');
}
?>
<html>
    <title>Home | Spacesteps</title>
    <head>
    <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="theme-color" content="#835194">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML="<b>Search results :</b><br>"+this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
        <style>
        #body{
            font-family:"Trirong", serif;
            background:#b8b8b8;
            overflow-y:scroll;
        }
        #navbar{
            width:100%;
            background-image:linear-gradient( to right, #835194, #62bfbf);
            font-family: "Trirong", serif;
            position:;

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
  grid-template-columns: repeat(4, 25%[col-start]);

       }
       #TC div{
        width: 99.5%;
        height: 85px;
        background: #cae0e0;
        background-image:linear-gradient( to right, #c1dede, #b3e3e3);
        cursor:pointer;
        transition: transform .2s;

        text-align:center;
        overflow:auto;
        padding-top:25px;
        font-size:22vm;
       }
       #TC div:hover{
        transform: scale(1.03);
        box-shadow: 0px 0px 10px 2px #bdbdbd;
        }
       .register input{
           margin-top:6px;
       }
       .login input{
           margin-top:6px;
       }
       .myslides{
           cursor:pointer;
       }
       #livesearch{
        background-image:linear-gradient( to right, #835194, #62bfbf);
       }
       #livesearch a{
         text-decoration:none;
         color:#adadad;
       }
       #livesearch a:hover{
         text-decoration:underline;
         color:#76e8e6;
       }
       /*desktop */
       @media screen and (min-width: 1024px){
        .myslides{
            height:500px;
            object-fit: cover;
        }
       }
    </style>

    </head>
    <body id="body">
        <div>
    <!--navigation-->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-size:30px;">Spacesteps</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll"><hr>
                    <ul class="navbar-nav me-auto my-2 my-lg-0 " >
                        <li class="nav-item">
                          <a class="nav-link" onclick="window.scrollTo(0,0)" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" onclick="window.scrollTo(0,640)" href="#">Learn</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Membership</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#" onclick="window.scrollTo(0, 860)">Login</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#" onclick="window.scrollTo(0, 860)">Register</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" onclick="window.scrollTo(0,1900)">About</a>
                        </li>
                    </ul>

                        <form class="d-flex">
                          <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">
<a href="www.facebook.com"><option value="sans"></a>
<option value="New York">
<option value="Seattle">
<option value="Los Angeles">
<option value="Chicago">
</datalist>
                        </form>

                </div>
            </div>
        </nav>
        <!--navigation-->


        <div class="newsbanner" style="width:100%; height:500px; ;background-color:#ffff;" >
        <center style="color:red;"><?php
        if(isset($_SESSION['warning'])){
             echo "".$_SESSION['warning'];

        }
        ?></center>
        <center><h3><b>Science Today</b></h3><h6>click on the image to read full article.</h6><div class="slideshow-container" style="width:95%; max-height:90%; background-color:#ffff;border-style: double;border-width:4px;border-image:linear-gradient( to right, #835194, #62bfbf) 1 10%;overflow-y:scroll;overflow-x:hidden;" >
            <?php
               $sql = 'SELECT newslink, imglink, headline FROM newslinks ORDER BY id DESC';
               $result = mysqli_query($conn, $sql);
               while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                ?><img onclick="location.href='<?php echo ''.$row['newslink']; ?>';" class="mySlides" src="<?php echo ''.$row['imglink']; ?>" alt="<?php echo ''.$row['imglink']; ?>"style="object-fit:fill;width:100%;">
                <?php
             }
            ?>
            </div></center>

        </div>

        <div class="tutorials" style="width:100%; height:450px; background-color:#ffff;" ><br><center><h2><b> Tutorials</b></h2></center>

        <div id="TC" class="container">

            <div onclick="location.href='./tutorials/html/Html.php';">Html</div>
            <div onclick="location.href='https://www.facebook.com/';">CSS</div>
            <div onclick="location.href='https://www.facebook.com/';">JS</div>
            <div onclick="location.href='https://www.facebook.com/';">PHP</div>
            <div onclick="location.href='https://www.facebook.com/';">SQL</div>
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
            <div onclick="location.href='https://www.facebook.com/';">Assembly</div>



        </div>
        </div>

        <div class="membershipinfo" style="width:100%; height:400px;background-image:linear-gradient( to bottom, #bfbf95, #b8b8b8);" >
            <div class="container"><center><h1>Membership</h1></center>
                <div class="register" style="width:40%; height:80%; background-color:;border-radius:10px;margin-left:5%;" >
                     <form action="validate.php" method="POST"><center><h5>Register</h5><h6 style="color:red;"><?php if(isset($_SESSION['error'])){echo "".$_SESSION['error'];} ?></h6></center>
                        <center><input class="form-control form-control-sm" type="text" placeholder="firstname" name="firstname" required></center>
                        <center><input class="form-control form-control-sm" type="text" placeholder="lastname"name="lastname" required></center>
                        <center><input class="form-control form-control-sm" type="email" placeholder="E-mail address"name="email" required></center>
                        <center><input class="form-control form-control-sm" type="text" placeholder="password"name="password" required></center>
                        <center><input class="form-control form-control-sm" type="password" placeholder="confirm password"name="cpassword"required></center>

                        <center><button class="btn btn-outline-light" style="margin-top:20px;"id="search" type="submit" name="submitreg">Register</button></center>

                     </form>
                </div>

                <div class="login" style="width:40%; height:80%; background-color:;border-radius:10px;margin-left:50%;margin-top:-320px;" >
                     <form action="lgvalid.php" method="POST"><center><h5>Login</h5><h6 style="color:red;"><?php if(isset($_SESSION['lerror'])){echo "".$_SESSION['lerror'];} ?></h6></center>
                        <center><input class="form-control form-control-sm" type="text" placeholder="Username" name="username" required></center>
                        <center><input class="form-control form-control-sm" type="password" placeholder="password"name="password"required></center>
                        <center><button class="btn btn-outline-light" style="margin-top:20px;"id="search" type="submit"name="login">Login</button></center>

                     </form>
                </div>
            </div>
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
            <div id="copyright" class="d-flex align-items-end"style="margin-left:10%">
                <ul>Info
                <li><a href="">Privacy policy</a></li>
                <li><a href="">contact us</a></li>
                <li><a href="">Quick query</a></li>
                </ul>

            </div>
            <div style="margin-top:-90px;"><center>© <?php echo date("Y");?> All right are reserved for Spacesteps organization.</center></div>
        </div>


        <script>
            var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";

  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";

  setTimeout(carousel, 5000); // Change image every 2 seconds

}

        </script>

    </body>
</html>
