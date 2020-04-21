


<?php

 $link = mysqli_connect("localhost", "root", "", "wd");

	if ($link)
	{
		echo ".............success.................";
	}
	else
	{
		echo ".............fail....................";
	}

	$name= mysqli_real_escape_string($link, $_POST['name']);
    $cl = mysqli_real_escape_string($link, $_POST['collegename']);
    $phno = mysqli_real_escape_string($link, $_POST['phonenumber']);
    $em = mysqli_real_escape_string($link, $_POST['email']);
    $p = mysqli_real_escape_string($link, $_POST['pass']);
 	
 	$sql = "INSERT INTO details (full_name,college_name,ph_no,email,password) VALUES ('$name','$cl','$phno','$em','$p')";
	if(mysqli_query($link, $sql))
	{
    	echo "Records added successfully.";
	} 
	else
	{
    	echo "ERROR: Could not able to execute $sql." . mysqli_error($link);
	}	
	header('location:login.html')
?>
