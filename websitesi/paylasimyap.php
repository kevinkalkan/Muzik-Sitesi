<?php
session_start();
?>
<?php
 include('header3.php');
?>

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
		<title>TEMPOS</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <div id="top-bar"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
</head>
<body 
		background="muzik.png"></body>


         <div style=" width: 70%; margin-left: 25%; ">
        <form action="paylasimyap.php" method="post" enctype="multipart/form-data" name="categoryform" onsubmit=" return validateform() ">
      <h1>Paylaşım Yap</h1>
      <hr>
      <div class="form-group">
        <label for="email">Başlık:</label>
        <input type="text" placeholder="Başlık..." name="title" class="form-control" id="email">
      </div>

      <div class="form-group">
        <label for="yorum">Açıklama:</label>
       <textarea class="form-control" placeholder="Açıklama..." rows="5" name="aciklama" id="yorum"></textarea>
      </div>

      <div class="form-group">
        <label for="email">Tarih:</label>
        <input type="date"  name="date" class="form-control" id="email">
      </div>

           <div class="form-group">
        <label for="email">Resim:</label>
        <input type="file"  name="thumbnail" class="form-control img-thumbnail" id="email">
      </div>

        <div class="form-group">
        <label for="email">Kategori:</label>
         
               
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
        
      
      <input type="submit" name="submit" class="btn btn-dark" value="Paylaş">
    </form>
    <script>
      
       function validateform(){
         var x = document.forms['categoryform']['baslik'].value;
         var y = document.forms['categoryform']['aciklama'].value;
         var z = document.forms['categoryform']['gun'].value;
         var w = document.forms['categoryform']['kategori'].value;
         if (x=="") {
            alert('Başlık giriniz !');
            return false;
          }
          if (y=="") {
            alert('Açıklama kısmı boş bırakılamaz !');
            return false;
          }  
       }
    </script>
  </div>
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
include('connection.php');

include('connection.php');
if (isset($_POST['submit'])) {
  $baslik=$_POST['baslik'];
  $aciklama=$_POST['aciklama'];
    $gun=$_POST['gun'];

      $kucukresim=$_FILES['kucukresim']['ad'];
      $tmp_thumbnail=$_FILES['kucukresim']['tmp_name'];
        $kategori=$_POST['kategori'];
        $admin=$_SESSION['email'];
      move_uploaded_file($tmp_thumbnail,"büt/$kucukresim");

     $query1=mysqli_query($conn,"insert into haberler(baslik,aciklama,gun,kategori,kucukresim,admin)values('$baslik','$aciklama','$gun','$kategori','$kucukresim','$admin')");
     if ($query1) {
      # code...
      echo "<script>alert('Başarılı bir şekilde paylaşıldı !!')</script>  ";
      echo "<script >window.location='http://localhost/final/büt/deneme2.php' ;</script>";
     }else{
      echo "<script>alert('Lütfen tekrar deneyiniz!!')</script>  ";

     }
}

  ?>
