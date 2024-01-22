<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="123456789";
$vt_adi="elmas1";
$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if(!$baglan){
    die("Database Connection Failed".mysqli_connect_error());

}/*else{
    echo"bağlantı başarılı";
}*/
?>







