<!----
	Application  Developed By : KevanGol
	16:44 ending
	29-11-2020
-->
<?php 
$r = $_REQUEST['id']; 
 include("db.php"); 
 if (isset($r)) {
 	 mysqli_query($cn,"delete from cars where car_id=$r");
 	 header("location:index.php");
 }
?>