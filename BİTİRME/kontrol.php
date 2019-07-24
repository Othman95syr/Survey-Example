<?php 

 

$eposta=$_POST['q2'];
$ziyaret=$_POST['q3'];
$randevu=$_POST['q4'];

$doktorharic=$_POST['q7'];
$randevusikayet=$_POST['q5'];
$kayit=$_POST['q8'];
$kayiter=$_POST['q9'];
$kayitertam=$_POST['q10'];
$kayityet=$_POST['q11'];
$cikti=$_POST['q12'];
$parola=$_POST['q13'];
$hastaimza=$_POST['q14'];
$karisiklik=$_POST['q15'];
$fazlabilgi=$_POST['q16'];
$kayitsil=$_POST['q17'];
$silmekanizma=$_POST['q18'];



$toplam = $randevu + $randevusikayet + $doktorharic + $kayit + $ziyaret + $kayiter + $kayitertam + $kayityet + $cikti + $parola + $hastaimza + $karisiklik + $fazlabilgi + $kayitsil + $silmekanizma ;
//toplam güvenli sayisi 23 
$guvenlisayisi=18;
$guvensizsayisi=7;


              //Database'e ekleme kismi

              require_once "baglan.php";

              if (isset($_POST['submit'])) {
                $soru1 = $_POST['q1'];
                $soru2 = $_POST['q2'];
                $soru3 = $_POST['q3'];
                $soru4 = $_POST['q4'];
                $soru5 = $_POST['q5'];
                $soru6 = $_POST['q6'];
                $soru7 = $_POST['q7'];
                $soru8 = $_POST['q8'];
                $soru9 = $_POST['q9'];
                $soru10 = $_POST['q10'];
                $soru11 = $_POST['q11'];
                $soru12 = $_POST['q12'];
                $soru13 = $_POST['q13'];
                $soru14 = $_POST['q14'];
                $soru15 = $_POST['q15'];
                $soru16 = $_POST['q16'];
                $soru17 = $_POST['q17'];
                $soru18 = $_POST['q18'];


                $query1 = "INSERT INTO katilimcilar(q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18) VALUES ('$soru1','$soru2','$soru3','$soru4','$soru5','$soru6','$soru7','$soru8','$soru9','$soru10','$soru11','$soru12','$soru13','$soru14','$soru15','$soru16','$soru17','$soru18')";
                mysqli_query($db, $query1); 
                
                header('location: index.php'); //redirect the user to index page after submiting
    
              }


if($toplam>=$guvenlisayisi){
header('Location: index.php?status=2');
}
else if(($toplam<$guvenlisayisi)&&($toplam>$guvensizsayisi)){
header('Location: index.php?status=1');
}
else
{
header('Location: index.php?status=0');
}



echo '<br/>'.$toplam; 


?>