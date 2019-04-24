<?php
	$con = mysqli_connect("students.cah.ucf.edu","ni575687","Nick1996$","ni575687");
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	
	$sql = "SELECT * FROM super8predictions ORDER BY rand() LIMIT 1";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo "" .$row['name'];
			echo " predicts that the Magic will " .$row['prediction'];
		}
	}
?>