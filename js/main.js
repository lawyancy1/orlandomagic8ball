$(document).ready(function () {
	/*
		Magic 8 Ball code
			Automatically loads getPredict.php and displays a random prediction comment in #magicBall div
	*/
	$.ajax({
		type: "POST",
		url: "php/getPredict.php",
		timeout: 2000,
		success: function (data) {
			$("#magicBall").html(data);
		},
		error: function () {
			$("#magicBall").text("I'm sorry, but there seems to have been an error. Please try again later");
		}
	});

	/*
		API Data
	*/
	$("#getData").click(function () {
		var displayData = ("#displayData");
		var apikey_token = "179bc92f-50d2-46b0-87d4-143e63";
		const password = "MYSPORTSFEEDS";
		var result = $(this).serialize();

		$.ajax({
			type: "GET",
			url: "https://api.mysportsfeeds.com/v2.1/pull/nba/2018-2019-regular/team_stats_totals.json?team=orlando-magic",
			dataType: 'json',
			async: true,
			headers: {
				"Authorization": "Basic " + btoa(apikey_token + ":" + password),
				//"Accept-Encoding": "gzip"
			},
			data: result,
			success: function (result) {
				$(displayData).html(result);
			}
		});
	});

	/*
		Add new prediction comment
	*/
	$("#commentForm").on("submit", function (event) {
		event.preventDefault();
		var details = $(this).serialize();

		$.ajax({
			type: "POST",
			url: "php/process_form.php",
			data: details,
			timeout: 2000,
			beforeSend: function () {
				$("#loading").text("Loading...");
			},
			complete: function () {
				$("#loading").empty();
			},
			success: function (data) {
				$("#response").html(data);
			},
			error: function () {
				$("#response").text("I'm sorry, but there seems to have been an error. Please try again later");
			}
		});

	});
	
}); // End document.ready

