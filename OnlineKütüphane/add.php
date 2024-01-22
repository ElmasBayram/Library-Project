
<?php session_start(); 

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
   
   
    
  }
  

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add book summaries</title>

     <link rel="shortcut icon" href="./ımages/icon.ico"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
</head>
   <body style="background-color:white;">
  
    <div id="table"></div>
    <div id="social"> 
        <font > Online Library | Online Book Summaries.. </font>

        <a href="login.php"> <i class="fas fa-user"></i></a>
        <a href="https://www.google.com.tr/"><i  class="fab fa-google"></i></a>
        <a href="https://www.instagram.com/elmas_bayram/"> <i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/"> <i class="fab fa-facebook-square"></i></a>
        <a href="https://twitter.com/?lang=tr"> <i  class="fab fa-twitter-square"></i></a>
    
    </div>
    <div id="container">
     <header>
        <img id="headerResim" src="./ımages/28407.jpg" alt="">    
      <!--  <div id="centered">Online Library</div>-->
      <?php include 'server.php';?>
    </header>
     <section> 
         <nav >
<ul>
<li> <a href="index.html"><i class="fas fa-home"></i>Main Page</a></li>
<li> <a href="add.html"><i class="fas fa-plus"></i>Add a summary</a></li>
<li> <a href="summaries.php"><i class="fas fa-book"></i>Book Summaries</a></li>
<li> <a href="photos.html"><i class="fas fa-images"></i>Photo Album</a></li>
<li> <a href="aboutUs.html"><i class="fas fa-users"></i>About Us</a></li>
<li> <a href="contact.php"><i class="fas fa-address-book"></i>Contact</a></li>
<li> <a href="?logout"><i class="fas fa-user-friends"></i>Log Out</a>  </li>


</ul>
         </nav>
         <main>
             <h1>Book Summaries</h1>
             <section class="section1">
                <form action="add.php" method="post">

                <div class="row">
                        <div class="col25">
                            <label for="">Your Name</label>
                            <div class="col75">
                                <input type="text" name="name" placeholder="Enter your name.." required>
                            </div>
                        </div>
                    </div>
            

                    <div class="row">
                        <div class="col25">
                            <label for="">Book Name</label>
                            <div class="col75">
                                <input type="text" name="bookname" placeholder="Enter Book Name.." required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col25">
                            <label for="">The Author of The Book</label>
                            <div class="col75">
                                <input type="text" name="author" placeholder="Enter the author of the book.." required>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col25">
                            <label for="">Your Book Summary</label>
                            <div class="col75">
                                <textarea name="summary" cols="30" rows="10" placeholder="Enter book summary.." required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <input type="submit" value="Send" />
                    </div>
                </form>
            </section>
         </main>
     </section>  
    </div>
   </body>
     </section>
   
<footer id="footer"><p>Designed by Elmas BAYRAM | 2021 </p> </footer>

</body>
</html>

<?php

include("baglanti.php");
if (isset($_POST["name"],$_POST["bookname"], $_POST["author"], $_POST["summary"])) {

    $isim= $_POST["name"];
    $kitapadi = $_POST["bookname"];
    $yazar = $_POST["author"];
    $yazi = $_POST["summary"];
    $ekle = "INSERT INTO summaries(name,bookname,author,summary) VALUES ('".$isim."','" .$kitapadi. "','" .$yazar. "','" .$yazi. "')";
    if ($baglan->query($ekle) == TRUE) {
        echo "<script> alert('Your Book Summary Has Been Submitted For Publication...')</script>";
    }
}

?>