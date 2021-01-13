<?php
session_start();
?>
<?php
 include('header3.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Düzenle/Sil</title>
	<!DOCTYPE html>
<html>
<head>
	<title>PAYLAŞ</title>
	<meta charset="utf-8">
		<style type="text/css">
			   h1 {
          color: #000000;
           font-family:Comic Sans MS, Helvetica, sans-serif;
            font-size:14px;
        }
        p {
            font-family:Comic Sans MS, Helvetica, serif;
            font-size:20px;
            color: #c2aee5; 

        }
         body {
            font-family:Comic Sans MS, Helvetica, serif;
            font-size:30px;
            color: #c2aee5; 

         }
         div{
    
          color:#c2aee5;
         }
         tr{
          color:#c2aee5;
         }
         th{
          color:#c2aee5;
         }
		</style> 
	

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <div id="top-bar"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
</head>

<body
		background="muzik.png"></body>
		 <div style=" width: 70%; margin-left: 25%; ">
</body>
<nav class="navbar navbar-inverse navbar-fixed-bottom text-center" id="bottomfooter">
  <h5><b>Made by Ceren DEMİRCİ / Kevin Tuğra KALKAN</b></h5>
</nav>

<!--jquery 3.1.1-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet"> 
<!--Core CSS-->
<link href="css/stylesheet.css" rel="stylesheet">
</html>
<?php
 error_reporting(0);
?>

      <div class="row mb-2">

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Paylaşımlar
          </h3>

  <div style=" width: 70%; margin-left: 20%; margin-top: 5%">
        <div class="text-right">
      
    <table class="table table-bordered">
       <tr>
        
         <th>Başlık</th>
         <th>Açıklama</th>
         <th>Tarih</th>
         <th>Kategori</th>
         <th>Resim</th>
         <th>Düzenle</th>
         <th>Sil</th>
       </tr>
<?php
        include('connection.php');
           $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*3)-3;
           }
           
      $query=mysqli_query($conn,"select * from haberler limit $page1,3");
       while ($row=mysqli_fetch_array($query)) {
         ?>
         <tr>
         
            <td><?php echo $row['baslik']; ?></td>
              <td><?php echo substr($row['aciklama'],0,100 ); ?></td>
               <td><?php echo date("F jS ,y", strtotime($row['gun'])); ?></td>
                 <td><?php echo $row['kategori']; ?></td>
                   <td><img class="img img-thumbnail" src="images/<?php echo $row['thumbnail'];?>" alt="" width="150" height="150" ></td>
                    <td><a class="btn btn-dark btn-sm" href="paylasim_duzenle.php?edit=<?php echo $row['id'];?>">düzenle</a></td>
                      <td><a class="btn btn-dark btn-sm" href="paylasim_sil.php?del=<?php echo $row['id'];?>">sil</a></td>
         </tr>
       <?php }  ?>
         </table>
             <ul class="pagination">
              
              <?php

       $sql=mysqli_query($conn,"select * from haberler");
       $count=mysqli_num_rows($sql);
       $a=$count/3;
        ceil($a);
        for ($b=1; $b <=$a ; $b++) { 
          ?>
      
 
          <?php 
        }
       ?>
              
       </ul>
  </div>
  
