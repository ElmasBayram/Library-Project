<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <link rel="shortcut icon" href="./ımages/icon.ico" />
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
        <font> Online Library | Online Book Summaries.. </font>

        <a href="login.php"> <i class="fas fa-user"></i></a>
        <a href="https://www.google.com.tr/"><i class="fab fa-google"></i></a>
        <a href="https://www.instagram.com/elmas_bayram/"> <i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com/"> <i class="fab fa-facebook-square"></i></a>
        <a href="https://twitter.com/?lang=tr"> <i class="fab fa-twitter-square"></i></a>

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

                </ul>
            </nav>
            <main>
                <h1>Contact</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3183.880219700467!2d35.352813350959785!3d37.0603374797972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288dd594987ed3%3A0x56ee3443510a3144!2s%C3%87ukurova%20%C3%9Cniversitesi!5e0!3m2!1str!2str!4v1628850561605!5m2!1str!2str" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <section class="section1">
                    <form action="contact.php" method="post">
                        <div class="row">
                            <div class="col25">
                                <label for="">Name & Surname</label>
                                <div class="col75">
                                    <input type="text" name="isim" placeholder="Enter Your Name and Surname.." required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col25">
                                <label for="">E-mail</label>
                                <div class="col75">
                                    <input type="text" name="email" placeholder="Enter Your E-mail.." required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col25">
                                <label for="">Your Messages</label>
                                <div class="col75">
                                    <textarea name="mesaj" cols="30" rows="10" placeholder="Enter Your Message.." required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <input type="submit" value="Send" />
                        </div>
                    </form>
                </section>
               
                <br>
                <div class="card text-white bg-dark mb-3" style="max-width: 58rem;">
  <div class="card-header">Address</div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item" align="center">Çukurova Üniversitesi Bilgisayar müh. Balcalı Sarıçam Adana, 01330 Sarıçam/Adana
</li>
    <li class="list-group-item" align="center">0539-409-95-62</li>
    <div class="alert alert-light" role="alert" align="center">
  <a href="https://www.google.com/intl/tr/gmail/about/" class="alert-link">elmasbayram2000@gmail.com</a>
</div>
    <!-- <li class="list-group-item" align="center">elmasbayram2000@gmail.com</li>  -->
  </ul>
  </div>
</div> <br>
      </main>
  
    <footer id="footer">
        <p>Designed by Elmas BAYRAM | 2021 </p>
    </footer>

</body>
</html>

<?php

include("baglanti.php");

if (isset($_POST["isim"], $_POST["email"], $_POST["mesaj"])) {
    $adsoyad = $_POST["isim"];
    $mail = $_POST["email"];
    $yazi = $_POST["mesaj"];
    $ekle = "INSERT INTO iletisim( isim, email, mesaj) VALUES ('" . $adsoyad . "','" . $mail . "','" . $yazi . "')";
    if ($baglan->query($ekle) == TRUE) {
        echo "<script> alert('Your message has been sent...')</script>";
    }
}
?>