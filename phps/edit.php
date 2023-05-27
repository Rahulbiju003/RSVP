<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<label>FirstClass:</label><input type="text" value="<?php echo $row['firstclass']; ?>" name='firstclass'>
		<label>SecondClass:</label><input type="text" value="<?php echo $row['secondclass']; ?>" name='secondclass'>
		<label>ThirdClass:</label><input type="text" value="<?php echo $row['thirdclass']; ?>" name='thirdclass'>
		<label>FourthClass:</label><input type="text" value="<?php echo $row['fourthclass']; ?>" name='fourthclass'>
		<label>FifthClass:</label><input type="text" value="<?php echo $row['fifthclass']; ?>" name='fifthclass'>
		<label>SixthClass:</label><input type="text" value="<?php echo $row['sixthclass']; ?>" name='sixthclass'>
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>