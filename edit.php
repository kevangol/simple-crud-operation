<!----
	Application  Developed By : KevanGol
	16:44 ending
	29-11-2020
-->
<?php 
		$r = $_REQUEST['id'];
		include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit it</title>
	<link rel="stylesheet" type="text/css" href="ui.css">
</head>
<body>
	<center>
		<?php 
			$a1 = mysqli_query($cn,"select * from cars where car_id=$r");
			while ($run = mysqli_fetch_array($a1)) {
				?>
				<form method="post" action="update.php">
					<table>
						<th>Update Your Data</th>
						<tr>
							<td>
								Edit Car Name
							</td>
						</tr>
						<tr>
							<td>
							<input type="text" name="t1" value="<?php echo $run[1]; ?>"required autofocus="on" autocomplete="off"  maxlength="20">
							</td>
						</tr>
						<tr>
							<td>
								Edit Car Color
							</td>
						</tr>
						<tr>
							<td>
							<input type="text" name="t2" value="<?php echo $run[2]; ?>"required autofocus="on" autocomplete="off"  maxlength="12">
							</td>
						</tr>
						<tr>
							<td>
								Edit Car Price
							</td>
						</tr>
						<tr>
							<td>
							<input type="text" name="t3" value="<?php echo $run[3]; ?>"required autofocus="on" autocomplete="off" maxlength="8">
							</td>
						</tr>
						<tr>
							<td>
								<button type='submit' name='upd'>Update</button>	
							</td>
						</tr>
						<input type="hidden" name="t4" value="<?php echo $run[0];?>">
					</table>
				</form>
				<?php
			}
			echo "</div>";
	   	?>
	   </center>
</body>
</html>