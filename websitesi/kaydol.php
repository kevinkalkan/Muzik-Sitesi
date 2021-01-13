<?php
session_start();
?>
 <?php
 include('header2.php');
  ?>
<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <style type="text/css">
            h1 {
                color: #000000;
            }
            p {
                color: #000000; 
            }
             tr{
          color:#c2aee5;
         }
         th{
          color:#c2aee5;
         }
         td{
          font-size: 30px;
         }
        </style>
        <title>KAYDOL</title>

            <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    </head>
  
<body background="muzik.png">
 <div class="container">
  <hr>
<form method="POST" action="giris.php">
<table border="1" align="center">
<tr>
<td colspan="2" align="center"><b> Kayıt Ekleme</b></td>
 
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email"></td>
</tr>
<tr>
<td>Şifre</td>
<td><input type="text" name="adi"></td>
</tr>
<tr>
<td>Şifre Tekrar</td>
<td><input type="text" name="soyadi"></td>
</tr>
<tr>
<td></td>
<td><input type="submit"  class="btn btn-dark"value="Kaydet"></td>
</tr>
</table>
</form>
 </div>
</body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
  <nav class="navbar navbar-inverse navbar-fixed-bottom text-center" id="bottomfooter">
  <h5><b>Made with by Ceren DEMİRCİ / Kevin Tuğra KALKAN</b></h5>
</nav>

<!--jquery 3.1.1-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!--Bootstrap v3.3.7 css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!--Latest minified bootstrap javascript-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Font for Muzika title-->

<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 
<!--Core CSS-->
<link href="css/stylesheet.css" rel="stylesheet">
</html>