<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
<style>
body{
    background-color: #000000;
	text-decoration-color: white	;
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color:#525252;}

</style>
</head>
<body>
	<br>
	<div>
		<table border="1">
			<thead>
				<th style="color:#D6EEEE">firstclass</th>
				<th style="color:#D6EEEE">secondclass</th>
				<th style="color:#D6EEEE">thirdclass</th>
				<th style="color:#D6EEEE">fourthclass</th>
				<th style="color:#D6EEEE">fifthclass</th>	
				<th style="color:#D6EEEE">sixthclass</th>
				<th style="color:#D6EEEE"></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `user`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td style="color:#D6EEEE"><?php echo $row['firstclass']; ?></td>
							<td style="color:#D6EEEE"><?php echo $row['secondclass']; ?></td>
							<td style="color:#D6EEEE"><?php echo $row['thirdclass']; ?></td>
							<td style="color:#D6EEEE"><?php echo $row['fourthclass']; ?></td>
							<td style="color:#D6EEEE"><?php echo $row['fifthclass']; ?></td>
							<td style="color:#D6EEEE"><?php echo $row['sixthclass']; ?></td>
							<td style="color:#D6EEEE">
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
