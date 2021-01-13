<?php
session_start();
?>
 <?php

 include('header2.php');

  ?>
<!DOCTYPE html>
<html>
<head>
    <title>HABERLER</title>
    <meta charset="utf-8">
       <style type = "text/css">
         h1 {
          color: #000000;
        }
        p {
               font-family:Comic Sans MS, Helvetica, serif;
            font-size:30px;
            color: #c2aee5; 
        }
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         }
      </style>
      <title>TEMPOS</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
</head>
<body> 
      <div class="container">
          <body background="muzik.png"></body>
          <hr>

          <iframe width="0" height="0" src="https://www.youtube.com/watch?v=5AwwzHEdmbY?rel=0&amp;autoplay=1" frameborder="0" allowfullscreen></iframe>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <p>
    <?php 

        $site= file_get_contents('https://www.powerapp.com.tr/powerturk/muzik/muzik-haber/ece-seckinin-acayip-iyisi.html');
        preg_match_all('@<div class="title">(.*?)</div>@si', $site, $baslik);
        $cikti=implode("", $baslik[1]);
        echo $cikti;
      ?>
       <?php 

        $site= file_get_contents('https://www.powerapp.com.tr/powerturk/muzik/muzik-haber/ece-seckinin-acayip-iyisi.html');
        preg_match_all('@<div class="content">(.*?)</div>@si', $site, $baslik);
        $cikti=implode("", $baslik[1]);
        echo $cikti;
      ?>
      </p>

</div>
</body>
<nav class="navbar navbar-inverse navbar-fixed-bottom text-center" id="bottomfooter">
  <h5><b>Made with <span class="glyphicon glyphicon-heart"></span> by Ceren DEMİRCİ / Kevin Tuğra KALKAN</b></h5>
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
