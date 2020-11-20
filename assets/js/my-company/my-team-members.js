$(document).ready(function () {

	// For Creating alert for team member deletion
	$(".delete-team-member").click(function (e) {
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
				$.post('server-side/class/my-company/team-member.php',{action : 'delete_team_member',team_member_id : e.target.getAttribute('team_member_id')},function(data,status){
					console.log(data);
				})
				Swal.fire("Deleted !", "Your team member has been deleted", "error");
				$('#team-members').load(location.href + ' #team-members');
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
							message: "First Name is required",
						},
					},
				},
				user_id: {
					validators: {
						notEmpty: {
							message: "User ID is required",
						},
					},
				},
				last_name: {
					validators: {
						notEmpty: {
							message: "Last Name is required",
						},
					},
				},
				password: {
					validators: {
						notEmpty: {
							message: "Password is required",
						},
					},
				},
				gender: {
					validators: {
						notEmpty: {
							message: "Gender is required",
						},
					},
				},
				member_email: {
					validators: {
						notEmpty: {
							message: "Email is required",
						},
					},
				},
				phone: {
					validators: {
						notEmpty: {
							message: "Phone is required",
						},
					},
				},
				ext: {
					validators: {
						notEmpty: {
							message: "Extension is required",
						},
					},
				},
				mobile: {
					validators: {
						notEmpty: {
							message: "Mobile is required",
						},
					},
				},
				fax: {
					validators: {
						notEmpty: {
							message: "Fax is required",
						},
					},
				},
				title: {
					validators: {
						notEmpty: {
							message: "Title is required",
						},
					},
				},
				member_address: {
					validators: {
						notEmpty: {
							message: "Address is required",
						},
					},
				},
				select_role: {
					validators: {
						notEmpty: {
							message: "Role is required",
						},
					},
				},
				photo_file: {
					validators: {
						notEmpty: {
							message: "Photo Upload is Required is required",
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
		$('.team-member-details').click(function(){
			console.log('Button Clicked')
			$.get('server-side/class/my-company/team-member.php',{action : 'get_team_member', team_member_id : $(this).attr('team_member_id')},function(data,status){
				$.each(data, function(index,company){
					if(data != false)
					{
						// console.log(company);
						document.getElementById('first-name').value = company.first_name;
						document.getElementById('user-id').value = company.user_name;
						document.getElementById('last-name').value = company.last_name;
						if(company.gender == 'Male')
						{
							document.getElementById('male').checked = true;
						}
						else if(company.gender == 'female')
						{
							document.getElementById('female').checked = true;
						}
						document.getElementById('login-info').value = company.send_login_information;
						document.getElementById('member-email').value = company.email;
						document.getElementById('phone').value = company.phone;
						document.getElementById('ext').value = company.ext;
						document.getElementById('mobile').value = company.mobile;
						document.getElementById('fax').value = company.fax;
						document.getElementById('title').value = company.title;
						document.getElementById('member-address').value = company.address;
						document.getElementById('select-role').value = company.role;
					}
					else
					{
						console.log('False Statements')
					}
				});
			},'JSON')
		})
});
