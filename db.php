<!----
	Application  Developed By : KevanGol
	16:44 ending
	29-11-2020
-->
<?php 
		$cn = mysqli_connect("localhost","root","","crud1");
		if(!$cn){
			echo "<script>alert('ERROR : DATABASE NOT CONNECTED');</script>";
		}
?>