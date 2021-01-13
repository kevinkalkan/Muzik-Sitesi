<?php
session_start();
?>
 <?php
 include('header.php');
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Paylaşım Düzenle</title>
  	<meta charset="utf-8">
		<style type="text/css">
			div{

          color:#c2aee5;
         }
		</style>
  </head>
  <body onload="removeloader()"
		background="muzik.png">
		

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

  <?php

 include('connection.php');

 $id=$_GET['edit'];
 $query=mysqli_query($conn,"select * from haberler where id ='$id' ");
  while ($row=mysqli_fetch_array($query)) {
     $id=$row['id'];
      $baslik=$row['baslik'];
       $aciklama=$row['aciklama'];
        $gun=$row['gun'];
         $kucukresim=$row['kucukresim'];
          $kategori=$row['kategori'];


  	# code...
  }

  ?>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="paylasim_duzenle.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
			<h1>Düzenle</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Başlık:</label>
		    <input type="text" value="<?php echo $baslik; ?>" placeholder="Başık..." name="baslik" class="form-control" id="email">
		  </div>

		  <div class="form-group">
			  <label for="yorum">Açıklama:</label>
			 	 <textarea class="form-control" placeholder="Açıklama..." rows="5" name="aciklama" id="yorum"><?php echo $aciklama; ?> </textarea>
			</div>

			<div class="form-group">
		    <label for="email"> Tarih:</label>
		    <input type="gun"  name="gun" value="<?php echo $gun ;?>" class="form-control" id="email">
		  </div>

           <div class="form-group">
		    <label for="email"> Resim:</label>
		    <input type="file" value="<?php echo $kucukresim; ?>"  name="kucukresim" class="form-control img-thumbnail" id="email">
		    <img class="img img-thumbnail" src="büt/<?php echo $kucukresim; ?>" alt=""  width="300">
		  </div>
          <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
		    <div class="form-group">
		    <label for="email"> Kategori:</label>
		     
               
		        <select class="form-control"  name="kategori" >
		       <?php
                include('connection.php');
                  $query=mysqli_query($conn,"select * from kategori");

                while($row=mysqli_fetch_array($query)){

                	
                	?>
		        	 <option value="<?php echo $row['kategori_adi'];?>"><?php echo $row['kategori_adi'];?></option>
		        	 
                 <?php } ?>
		        </select>
		  </div>

		  <input type="submit" name="submit" class="btn btn-dark" value="Güncelle">
		</form>
		<script>
			
       function validateform(){
         var x = document.forms['categoryform']['baslik'].value;
         var y = document.forms['categoryform']['aciklama'].value;
         var z = document.forms['categoryform']['gun'].value;
         var w = document.forms['categoryform']['kategori'].value;
         if (x=="") {
          	alert('Başlık boş bırakılamaz!');
          	return false;
          }
          if (y=="") {
          	alert('Açıklama boş bırakılmaz !');
          	return false;
          }
           if (y.length<10) {
          	alert('Açıklama 100 karakter olmalıdır !');
          	return false;
          }
          
       }
 
		</script>

  </div>
  <?php

include('connection.php');


include('connection.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$baslik=$_POST['baslik'];
	$aciklama=$_POST['aciklama'];
		$gun=$_POST['gun'];
			$kucukresim=$_FILES['kucukresim']['name'];
			$tmp_thumbnail=$_FILES['kucukresim']['tmp_name'];
				$category=$_POST['kategori'];

			move_uploaded_file($tmp_thumbnail,"büt/$thumbnail");

	$sql= mysqli_query($conn,"update haberler set baslik='$baslik', aciklama='$aciklama' , gun='$gun' , kucukresim='$kucukresim' , kategori='$kategori' where id='$id' ");
	if ($sql) {
		 echo "<script>alert('Güncelleme Tamamlandı !!')</script>  ";
		 echo "<script >window.location='http://localhost/final/büt/duzenlevesil.php' ;</script>";
	} else{
		echo "<script>alert('Lütfen tekrar deneyin!!')</script>  ";
	}
			

}

  ?>
