<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="123456789";
$vt_adi="elmas1";
$conn=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if(!$conn){
    die("Database Connection Failed".mysqli_connect_error());

}else{
    if($_POST){
        $no=$_POST["kitapadi"];
    
    
    $bul="SELECT * FROM summaries WHERE bookname='$no'";
    $kayit=$conn->query($bul);
    
    }  
}
?>
