<?php
session_start();
ob_start();
?>
<?php
 include('header2.php');
  ?>
<!DOCTYPE html>
<html>
<head>
   <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:30px;
         }
         label{
          font-family:Arial, Helvetica, sans-serif;
            font-size:30px;
            color:#c2aee5;
         }
         
      </style>
	      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="aciklama" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title> TEMPOS </title>
  
</head>
<body>
   <div class="container">
    <hr>
    <body background="muzik.png"> </body>
        
          <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <div id="top-bar"> 
    <form action="giris.php" method="post">
 
<div class="form-group">
  <label for="email">Email:</label>
    <input type="Email"  name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="password">Şifre:</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  
  <input type="submit" name="submit" class="btn btn-dark" value="Giriş Yap">
</form>
</div>
  
</body>
<nav class="navbar navbar-inverse navbar-fixed-bottom text-center" id="bottomfooter">
  <h5><b>Made by Ceren DEMİRCİ / Kevin Tuğra KALKAN</b></h5>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 
<!--Core CSS-->
<link href="css/stylesheet.css" rel="stylesheet">
</html>
 <?php 
  include('connection.php');
  if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query=mysqli_query($conn,"select * from uyeler where email='$email' AND password='$password' ");
    if($query) {
      if(mysqli_num_rows($query)>0) {
        $_SESSION['email']=$email;
          header('location:deneme2.php');
          ob_end_flush();
      } else{
        echo "<script> alert('Yanlış bilgi girildi.')</script>";
      }
    }
  }
?>

    