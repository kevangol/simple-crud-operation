<!----
	Application  Developed By : KevanGol
	16:44 ending
	29-11-2020
-->
<?php 
		include("db.php");
		$var1 = $_POST['t1'];
		$var2 = $_POST['t2'];
		$var3 = $_POST['t3'];
		$id = $_POST['t4'];
		if (isset($_POST['upd'])) {
			
			mysqli_query($cn,"update cars set car_nm='$var1',car_color='$var2',car_price='$var3' where car_id=$id");
			header("location:index.php");
		}
?>