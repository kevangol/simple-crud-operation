<!----
	Application  Developed By : KevanGol
	16:44 ending
	29-11-2020
-->
<?php 
		include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>SIMPLE PHP CRUD OPERATION</title>
	<link rel="stylesheet" type="text/css" href="ui.css">
</head>
<body>
	<center>
	<form method="post" action="insert.php">
	<table>
		<th>Fill this detail</th>
		<tr>
			<td><input type="text" name="t1" required autofocus="on" autocomplete="off" placeholder="Enter Car Name with full company name" maxlength="20"></td>
		</tr>
		<tr>
			<td>
				<input type="text" name="t2" required autofocus="on" autocomplete="off"
				placeholder="Enter Car Color Name" maxlength="12">
			</td>
		</tr>
		<tr>
			<td><input type="text" name="t3" required autofocus="on" autocomplete="off" placeholder="Enter Car Price" maxlength="8"></td>
		</tr>
		<tr>
			<td>
				<button type="submit" name="s1_f1">SaveData or Submit</button>
				<button type="reset">Cancel or Clear</button>
			</td>
		</tr>
	</table>
	</form>
		<?php 
			$a1 = mysqli_query($cn,"select * from cars order by car_id DESC");
			echo "<div class='brd'>";
			while ($run = mysqli_fetch_array($a1)) {
				echo "<div class='crd'>";
				echo "Car Name : ".$run[1]."<br>";
				echo "Car Color :".$run[2]."<br>";
				echo "Car Price : ".$run[3]."<br>";
				echo "<a href='edit.php?id=$run[0]'><button name='k1'>Edit</button></a>&nbsp&nbsp";
				echo "<a href='delete.php?id=$run[0]'><button name='k2'>Delete</button></a>";
				echo "</div><br>";
			}
			echo "</div>";
	   	?>
	
	</center>
</body>
</html>