$(document).ready(function () {
	$(".sweet-alert").click(function (e) {
		Swal.fire({
			title: "Are you sure?",
			text: "You won't be able to revert this!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonText: "Inactivate Team Member",
			cancelButtonText: "Delete Team Member",
			reverseButtons: true,
		}).then(function (result) {
			if (result.value) {
				Swal.fire(
					"inactivated!",
					"Your team member has been Inactivated.",
					"success"
				);
				// result.dismiss can be "cancel", "overlay",
				// "close", and "timer"
			} else if (result.dismiss === "cancel") {
				Swal.fire("Deleted !", "Your team member has been deleted", "error");
			}
		});
	});

	$("#enable-disable-button").click(function () {
		if ($(this).text() == "Enable Team Chat Now") {
			Swal.fire(
				"Team Chat Enabled",
				"Your Team chat has been enabled",
				"success"
			);
			$(this).text("Disable Team Chat");
		} else if ($(this).text() == "Disable Team Chat") {
			Swal.fire(
				"Team Chat Disabled",
				"Your Team chat has been disabled",
				"error"
			);
			$(this).text("Enable Team Chat Now");
		}
  });
});
