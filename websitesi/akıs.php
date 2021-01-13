<?php
session_start();
?>
 <?php
 include('header2.php');
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>AKIŞ</title>
	<meta charset="utf-8">
		<style type="text/css">
			h1 {
				   font-family:Comic Sans MS, Helvetica, serif;
            font-size:30px;
            color: #c2aee5; 
			}
			p {
			 font-family:Comic Sans MS, Helvetica, serif;
            font-size:20px;
            color: #c2aee5; 
			}
      body{
         font-family:Comic Sans MS, Helvetica, serif;
            font-size:40px;
            color: #c2aee5; 
      }
      a{
         font-family:Comic Sans MS, Helvetica, serif;
            font-size:20px;
            color: #c2aee5; 
            background-color:#c2aee5;
      }

		</style>
		<title>TEMPOS</title>
</head>
<body onload="removeloader()"
		background="muzik.png">
    <div class="container">
    <h1><b>AKIŞ</b></h1>
     <hr>
		    <p>
		    	<?php
		    		echo "En klasik deyişle, müzik ruhun gıdasıdır. Hangi tarzda olursa olsun hepimiz günü biraz müzik dinlemeden kapatmayız. Peki ama neler dinliyoruz? Rock dinlediğimizi zannederken pop, blues dinlediğimizi zannederken R&B mi? Elbette birçok müzik türü mevcut ama temel müzik türleri arasındaki farklar için yazımıza göz atabilirsiniz."; 
        ?>
        </p>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="thumbnail" id="thumb1">
      <a href="input1.php">
        <img src="rock.jpg" alt="rock image">
        <div class="caption text-center cat-caption">Rock Müzik</div>
      </a>
      </div>
    </div>
    
    <div class="col-sm-3 bgblue"><div class="thumbnail" id="thumb2">
      <a href="input2.php">
        <img src="blues.jpg" alt="blues image">
        <div class="caption text-center cat-caption">Blues Müzik</div>
      </a>
      </div></div>
    
    <div class="col-sm-3 bgyellow"><div class="thumbnail" id="thumb3">
      <a href="input3.php">
        <img src="klasik.jpg" alt="klasik image">
        <div class="caption text-center cat-caption">Klasik Müzik</div>
      </a>
      </div></div>
    
    <div class="col-sm-3 bgblue"><div class="thumbnail" id="thumb4">
      <a href="input4.php">
        <img src="halk.jpg" alt="halk image">
        <div class="caption text-center cat-caption">Halk Müzikleri</div>
      </a>
      </div></div>
  </div>
  
  <div class="row">
    <div class="col-sm-3 bgblue"><div class="thumbnail" id="thumb5">
      <a href="input5.php">
        <img src="elektronik.jpg" alt="elektronik image">
        <div class="caption text-center cat-caption">Elektronik Müzik</div>
      </a>
      </div></div>
    
    <div class="col-sm-3 bgyellow"><div class="thumbnail" id="thumb6">
      <a href="input6.php">
        <img src="caz.jpg" alt="caz image">
        <div class="caption text-center cat-caption">Caz Müzik</div>
      </a>
      </div></div>
    
    <div class="col-sm-3 bgblue"><div class="thumbnail" id="thumb7">
      <a href="input7.php">
        <img src="hiphop.jpg" alt="hiphop image">
        <div class="caption text-center cat-caption">Hip-Hop Müzik</div>
      </a>
      </div></div>
    
    <div class="col-sm-3 bgred"><div class="thumbnail" id="thumb8">
      <a href="input8.php">
        <img src="other.jpg" alt="Other image">
        <div class="caption text-center cat-caption">Other Songs</div>
      </a>
      </div></div>
  </div>



</div>


<nav class="navbar navbar-inverse navbar-fixed-bottom text-center" id="bottomfooter">
  <h5><b>Made with by Ceren DEMİRCİ / Kevin Tuğra KALKAN</b></h5>
</nav>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 
<!--Core CSS-->
<link href="css/stylesheet.css" rel="stylesheet">
</body>
</html>
