<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./playerjs.js" type="text/javascript"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free HTML web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript, tutorials, spacesteps">
    <meta name="author" content="G.sravan">
  
    <title>HTML | Tutorials</title>
    <style>
        #nav{
            background-image:linear-gradient( to right, #835194, #62bfbf);   
            font-family: "Trirong", serif;
            
        }
        .TCmodel{
          width:100%;
          height:auto;
          background:red;
        }
        .content{
          width:100%;
          height:auto;
          background:green;
        }
        .downv{
          width:100%;
          height:auto;
          background:blue;
          position:relative;
          top:-320px;
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
        /*Desktop*/
        @media screen and (min-width: 1024px){
          .TCmodel{
          width:100%;
          height:auto;
          background:red;
        }
          #player{
          width:45%;
          position:relative;
          left:54%;
          
        }
        .content{
          width:54%;
          height:auto;
          background:green;
          position:relative;
          
          top:-320px;
        }
        .downv{
          width:100%;
          height:auto;
          background:blue;
          position:relative;
          top:-320px;
        }
       }

/*tablet*/
@media screen and (min-width : 768px) and (max-width : 1023px){
  #player{
          width:100%;
        }

        .content{
          width:100%;
          height:auto;
          background:green;
        }
        .downv{
          width:100%;
          height:auto;
          background:blue;
          position:relative;
          top:0;
        }
}
/*mobile */
        @media screen and (min-width : 0px) and (max-width : 767px){
          #player{
          width:100%;
          
        }
        .downv{
          width:100%;
          height:auto;
          background:blue;
          position:relative;
          top:0px;
        }
       }
    </style>
</head>
<body>
    <!--navigation-->
    <nav id="nav" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#" style="font-size:30px;">Spacesteps</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"><hr>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Invite friend</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            HTML tutorials
          </a>
          <ul class="dropdown-menu" style="overflow-y:scroll; max-height:200px;" aria-labelledby="navbarDropdown">

            <li><a class="dropdown-item" href="#">Intro</a></li>
            <li><a class="dropdown-item" href="#">Environment</a></li>
            <li><a class="dropdown-item" href="#">Basics</a></li>
            <li><a class="dropdown-item" href="#">Elements</a></li>
            <li><a class="dropdown-item" href="#">Attribute</a></li>
            <li><a class="dropdown-item" href="#">Headings</a></li>
            <li><a class="dropdown-item" href="#">Paragraphs</a></li>
            <li><a class="dropdown-item" href="#">Styling</a></li>
            <li><a class="dropdown-item" href="#">Format</a></li>
            <li><a class="dropdown-item" href="#">Quotations</a></li>
            <li><a class="dropdown-item" href="#">Comments</a></li>
            <li><a class="dropdown-item" href="#">Coloring</a></li>
            <li><a class="dropdown-item" href="#">CSS</a></li>
            <li><a class="dropdown-item" href="#">Links</a></li>
            <li><a class="dropdown-item" href="#">Images</a></li>
            <li><a class="dropdown-item" href="#">Tables</a></li>
            <li><a class="dropdown-item" href="#">lists</a></li>
            <li><a class="dropdown-item" href="#">Headings</a></li>
            <li><a class="dropdown-item" href="#">Blocks & Inline</a></li>
            <li><a class="dropdown-item" href="#">Class</a></li>
            <li><a class="dropdown-item" href="#">Id</a></li>
            <li><a class="dropdown-item" href="#">Iframes</a></li>
            <li><a class="dropdown-item" href="#">Java script</a></li>
            <li><a class="dropdown-item" href="#">Paths</a></li>
            <li><a class="dropdown-item" href="#">Head</a></li>
            <li><a class="dropdown-item" href="#">Layout's</a></li>
            <li><a class="dropdown-item" href="#">Responsive web</a></li>
            <li><a class="dropdown-item" href="#">Computer Code</a></li>
            <li><a class="dropdown-item" href="#">Semantics</a></li>
            <li><a class="dropdown-item" href="#">Entities</a></li>
            <li><a class="dropdown-item" href="#">Symbols</a></li>
            <li><a class="dropdown-item" href="#">Emoji's</a></li>
            <li><a class="dropdown-item" href="#">Charset</a></li>
            <li><a class="dropdown-item" href="#">URL</a></li>
            <li><a class="dropdown-item" href="#">Forms</a></li>
            <li><a class="dropdown-item" href="#">Graphics</a></li>
            <li><a class="dropdown-item" href="#">Media</a></li>
            <li><a class="dropdown-item" href="#">API's</a></li>
            <li><a class="dropdown-item" href="#">Examples</a></li>
            <li><a class="dropdown-item" href="#">Certificate</a></li>
            <li><a class="dropdown-item" href="#">References</a></li>
            
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" >Donate</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--navigation-->
<center><b><h1>HTML Tutorials</h1></b></center>
<center><b><h5>Topic</h5></b></center>
<div class="TCmodel">
  
  
<div class="videop">
<div id="player"></div>
<script>
   var player = new Playerjs({id:"player", file:""});
</script>
  </div>

  <div class="content">
  <div class="container" style="background:red;">
   content</div>
  </div>
  <div class="downv">
    quiz
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
</body>
</html>