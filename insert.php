<!----
	Application  Developed By : KevanGol
	16:44 ending
	29-11-2020
-->
<?php 
		include("db.php");
		if (isset($_POST['s1_f1']))
		{
			$var1 = $_POST['t1'];
			$var2 = $_POST['t2'];
			$var3 = $_POST['t3'];
			mysqli_query($cn,"insert into cars(car_nm,car_color,car_price)values('".$var1."','".$var2."','".$var3."')");
			header("location:index.php");
		}
?>