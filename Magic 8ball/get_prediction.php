<?php
	$con = mysqli_connect("students.cah.ucf.edu","ni575687","Nick1996$","ni575687");
	if (!$con) {
		die('Could not connect: ' . mysqli_error($con));
	}
	
	$sql = "SELECT * FROM magic8ball ORDER BY rand() LIMIT 1";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo " " .$row['comment'];
			echo "<br>";
			echo "author: " .$row['author'];
		}
	}
?>