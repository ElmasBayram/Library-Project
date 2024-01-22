<?php
include"forsum.php"
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Book Summaries</title>

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
    
    </header>
     <section> 
         <nav>
<ul>
<li> <a href="index.html"><i class="fas fa-home"></i>Main Page</a></li>
<li> <a href="add.php"><i class="fas fa-plus"></i>Add a summary</a></li>
<li> <a href="summaries.php"><i class="fas fa-book"></i>Book Summaries</a></li>
<li> <a href="photos.html"><i class="fas fa-images"></i>Photo Album</a></li>
<li> <a href="aboutUs.html"><i class="fas fa-users"></i>About Us</a></li>
<li> <a href="contact.php"><i class="fas fa-address-book"></i>Contact</a></li>
<li> <a href="login.php"> <i class="fas fa-user-friends"></i>Log in/Sign in</a></li>

</ul>
         </nav>
         <main>
         <h1>Book Summary</h1>
     <div class="form1">
    <form action="" method="POST" > <br>
   <br> <input type="text" name="kitapadi"> <br> <br>
    <input type="submit" name="gönder" value="Search">
    </form> <br> <br>

    <?php

  if($kayit->num_rows>0){
    while( $satir = $kayit->fetch_assoc()){
 echo"Nickname: ".$satir["name"]."<br>";
 echo"Book Name: ".$satir["bookname"]."<br>";
 echo"Author: ".$satir["author"]."<br> <br>";
 echo"Summary: <br>".$satir["summary"]."<br> <br>";
 
     }
 }
?>
</div>
</section>
</main>   
</section>


<footer id="footer"><p>Designed by Elmas BAYRAM | 2021 </p> </footer>
</body>
</html>
