<?php
	include('conn.php');
	$id=$_GET['id'];
 
	$firstclass=$_POST['firstclass'];
	$secondclass=$_POST['secondclass'];
    $thirdclass=$_POST['thirdclass'];
	$fourthclass=$_POST['fourthclass'];
    $fifthclass=$_POST['fifthclass'];
	$sixthclass=$_POST['sixthclass'];
    
	mysqli_query($conn,"update `user` set firstclass='$firstclass', secondclass='$secondclass' ,thirdclass='$thirdclass', fourthclass='$fourthclass', fifthclass='$fifthclass', sixthclass='$sixthclass' where userid='$id'");
	header('location:index.php');
?>