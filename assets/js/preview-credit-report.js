$(document).ready(function () {
	$("#show-details-button").click(function () {
		if ($(this).text() == "Show more details") {
			$(this).text("Hide Details");
		} else if ($(this).text() == "Hide Details") {
			$(this).text("Show more details");
		}
<<<<<<< HEAD
	});
	$("#save-work-dispute-wizard").click(function () {
		window.location.href = "my-clients/edit-client-details?tab=dispute-wizard";
	});
	$("#save-work-dispute-items").click(function () {
		window.location.href = "my-clients/edit-client-details?tab=dispute-items";
	});
});
=======
  });
  $("#save-work-dispute-wizard").click(function () {
    window.location.href="my-clients/edit-client-details?tab=dispute-wizard"
  });
  $("#save-work-dispute-items").click(function () {
    window.location.href="my-clients/edit-client-details?tab=dispute-items"
  });
});


>>>>>>> 9537315890a295dc87f7ecbb6a36f0cef925c43a
