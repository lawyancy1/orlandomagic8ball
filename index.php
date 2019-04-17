<!DOCTYPE html>

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Orlando Magic 8 Ball</title>
</head>

<body>
	<h1>Orlando Magic 8 Ball</h1>
	<!--
		Magic 8 Ball goes here
		- If user enters a new prediction, then display it
		- Else loop through comments stored in database
	-->
	<div id="magicBall"></div>

	<!--Predictions comment form-->
	<h3>Make a Prediction</h3>
	<form id="commentForm" action="" method="POST">
		<input type="text" name="prediction">
		<input type="submit" name="Submit">
	</form>

	<div id="loading"></div>
	<div id="response"></div>


	<!--Scoreboard-->
	<h3>Scoreboard</h3>
	<div id="displayData"></div>
	<button id="getData">Get Data</button>


	<!--Javascript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>

</body>

</html>