<?php
 include('connection.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete  from haberler where id='$id' ");
 if ($query) {
 	 echo "<script> alert('Paylaşım Silindi !')</script> ";
  	   echo "<script >window.location='http://localhost/final/büt/duzenlevesil.php' ;</script>";
 
 }else{
 	echo "Lütfen Tekrar Deneyin";
 }

?>