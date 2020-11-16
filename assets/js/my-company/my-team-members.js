$(document).ready(function () {

	// For Creating alert for team member deletion
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

	// SweetAlert for enabling and disabling team chat
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

	// For rendering roles from the database table
	$.getJSON("server-side/class/my-company/roles.php", function (roles, status) {
		$.each(roles, function (index, value) {
			var select_role = document.getElementById("select-role");
			var option = document.createElement("option");
			option.value = value.roles;
			option.text = value.roles;
			select_role.appendChild(option);
		});
	});

	// Form validation for add-team-members form
	FormValidation.formValidation(
		document.getElementById("add-team-members-form"),
		{
			fields: {
				first_name: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				user_id: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				last_name: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				password: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				gender: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				member_email: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				phone: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				ext: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				mobile: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				fax: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				title: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				member_address: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				select_role: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				photo_file: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				
			},
			plugins: {
				trigger: new FormValidation.plugins.Trigger(),
				// Bootstrap Framework Integration
				bootstrap: new FormValidation.plugins.Bootstrap(),
				// Validate fields when clicking the Submit button
				submitButton: new FormValidation.plugins.SubmitButton(),
				// Submit the form when all fields are valid
				defaultSubmit: new FormValidation.plugins.DefaultSubmit(),
			},
		}
	);

	//Fetching the team-members-details
	$.get('server-side/class/my-company/add-team-member.php',{action : 'get_team_members'},function(data,status){
		console.log(status)
	})
});
