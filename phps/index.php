<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<br>
	<div>
		<table border="1">
			<thead>
				<th>firstclass</th>
				<th>secondclass</th>
				<th>thirdclass</th>
				<th>fourthclass</th>
				<th>fifthclass</th>	
				<th>sixthclass</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['firstclass']; ?></td>
							<td><?php echo $row['secondclass']; ?></td>
							<td><?php echo $row['thirdclass']; ?></td>
							<td><?php echo $row['fourthclass']; ?></td>
							<td><?php echo $row['fifthclass']; ?></td>
							<td><?php echo $row['sixthclass']; ?></td>
							<td>
								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>