$(document).ready(function () {
	$("#show-details-button").click(function () {
		if ($(this).text() == "Show more details") {
			$(this).text("Hide Details");
		} else if ($(this).text() == "Hide Details") {
			$(this).text("Show more details");
		}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 99d5c3f5c0a4b16e40beab4d18edea132ae5e27c
	});
	$("#save-work-dispute-wizard").click(function () {
		window.location.href = "my-clients/edit-client-details?tab=dispute-wizard";
	});
	$("#save-work-dispute-items").click(function () {
		window.location.href = "my-clients/edit-client-details?tab=dispute-items";
	});
});
<<<<<<< HEAD
=======
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
>>>>>>> 99d5c3f5c0a4b16e40beab4d18edea132ae5e27c
