<?php
	$con = mysqli_connect("students.cah.ucf.edu","ni575687","Nick1996$","ni575687");
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	
	$name = mysql_real_escape_string(strip_tags($_POST['name']));
	$prediction = $_POST['prediction'];
	$sql = "INSERT INTO super8predictions (prediction, name, game)
			VALUES
			($prediction, $name, NOW())";
	
	if(mysqli_query($con, $sql)) {
		echo "<scipt>alert('Your prediction was submitted!');</script>";
	}else{
		echo "<scipt>alert('Your prediction was not submitted!');</script>"
	}

?>