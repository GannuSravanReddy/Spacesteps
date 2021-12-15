<?php
    session_start();
    
    $_SESSION['LASTACTIVITY'] = time();
    include 'connection.php';
    
   // if(!isset($_SESSION['admin'])){
        if(isset($_POST['post'])){

            //image validation function
            function validImage($file) {
                $size = getimagesize($file);
                return (strtolower(substr($size['mime'], 0, 5)) == 'image' ? true : false);  
             }
            ////////////////////

            $news = $_POST['newsurl'];
            $img = $_POST['imgurl'];
            ///img validation
            if(validImage($img)=== FALSE){
                $_SESSION['nerror']="Please enter a valid img URL.";
                header('location: newsadmin.php');

             }else{
            ///news url validation
                  if (filter_var($news, FILTER_VALIDATE_URL) === FALSE){
                        $_SESSION['nerror']="Please enter a valid news URL.";
                        header('location: newsadmin.php');
                  }else{
                             
                            $news_check = "SELECT * FROM newslinks WHERE newslink='$news' LIMIT 1";
                            $result = mysqli_query($conn, $news_check);
                            $cr = mysqli_fetch_assoc($result);
                            if ($cr){ 
                                if ($cr['newslink'] === $news){
                                    $_SESSION['nerror']="Oh.. Sorry this news is already posted by someone.";
                                    header('location: newsadmin.php');
                                }
                            }else{
             
                                $headline = $_POST['headline'];
                                $query = "INSERT INTO newslinks (headline, imglink, newslink) 
  			                    VALUES('$headline','$img', '$news')";
  	                            $qur=mysqli_query($conn, $query);
                                if($qur){
                                    $_SESSION['success']=" News Posted succesfully.";
                                    header('location: newsadmin.php');
                                }else {
                                    header('location: ../web1.php');
                                }
                            }
                        }
             }

        }
    //}
?>