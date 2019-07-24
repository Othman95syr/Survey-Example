<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Database Panel</title>



	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">        
  	<link rel="stylesheet" href="css/bootstrap.min.css">                                          
  	<link rel="stylesheet" href="css/fontawesome-all.min.css">                                      
  	<link rel="stylesheet" href="css/tooplate-style.css"> 

  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  	<script>
    	var renderPage = true;

    	if (navigator.userAgent.indexOf('MSIE') !== -1
    	  || navigator.appVersion.indexOf('Trident/') > 0) {
   	   	/* Microsoft Internet Explorer detected in. */
    	alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
      	renderPage = false;
    	}
 	</script>     
</head>
<body>
  <div>
    <form  class="form-container" method="post">
        <h1 class="color-Timeline mb-5">Kullanıcı Adı</h1>
        <input type="text" placeholder="Kullanıcı Adınızı Girin" name="uname" required>
        <h1 class="color-Timeline mb-5">Şifre</h1>
        <input type="password" placeholder="Şifrenizi Girin" name="psw" required><br>
        <?php // include "login.php"; ?>
        <button type="submit" class="btn btn-primary tm-btn-send" name="girisbtn">Giriş Yap</button>
    </form>
  </div>
</body>
<?php

function yonlendir($url){
    if (!headers_sent()){
        header('Location: '.$url);
        exit;
    }
    else{
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}


if(isset($_POST['girisbtn']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbase= "anket";
    try{
      $conn=new PDO("mysql:host=$servername;dbname=$dbase;charset=utf8","$username","$password");
    }catch (PDOException $error){
      echo "VERI TABANI BAGLANTISI SAGLANAMADI !";
    die($error->getMessage());
}
    $uname=$_POST["uname"];
    $psw=$_POST["psw"];
    $sorgu=$conn->prepare("SELECT * FROM admin WHERE admin_name='$uname' and admin_pass='$psw'");// sql yazarak verilerin doğruluğunu kontrol ediyoruz.
    $sorgu->execute(array($uname,$psw));//Kontrol edilecek olan değişkenleri yazdık
    $islem=$sorgu->fetch();// Burada sorguyu parcalayarak girilen bilgilerin karşılığı varmı dedik

    if($islem)// Karşığılı varsa buraya gir dedik
     {
         yonlendir("panel.php");//Yönlendirmemizi yapıyoruz.
     }
    else//Eğer girilen bilgiler eşleşmiyorsa
    {
        $alert = "Kullanıcı Adınız veya Şifreniz Yanlış";
        echo "<script type='text/javascript'>alert('$alert');</script>";
    }
}

?>
</html>