$(document).ready(function () {
	$("#show-details-button").click(function () {
		if ($(this).text() == "Show more details") {
			$(this).text("Hide Details");
		} else if ($(this).text() == "Hide Details") {
			$(this).text("Show more details");
		}
	});
	$("#save-work-dispute-wizard").click(function () {
		window.location.href = "my-clients/edit-client-details?tab=dispute-wizard";
	});
	$("#save-work-dispute-items").click(function () {
		window.location.href = "my-clients/edit-client-details?tab=dispute-items";
	});
});
