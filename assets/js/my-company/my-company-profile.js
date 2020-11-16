$("#check-url-btn").click(function () {
	window.location.href = "//" + document.getElementById("website-url").value;
});
$(document).ready(function () {
	FormValidation.formValidation(
		document.getElementById("company-profile-form"),
		{
			fields: {
				company_name: {
					validators: {
						notEmpty: {
							message: "Company Name is required",
						},
					},
				},
				website_url: {
					validators: {
						notEmpty: {
							message: "Website URL is required",
						},
					},
				},
				address: {
					validators: {
						notEmpty: {
							message: "Address is required",
						},
					},
				},
				city: {
					validators: {
						notEmpty: {
							message: "City is required",
						},
					},
				},
				state: {
					validators: {
						notEmpty: {
							message: "State is required",
						},
					},
				},
				zip: {
					validators: {
						notEmpty: {
							message: "Zip is required",
						},
					},
				},
				country: {
					validators: {
						notEmpty: {
							message: "Country is required",
						},
					},
				},
				time_zone: {
					validators: {
						notEmpty: {
							message: "Time Zone is required",
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
				fax: {
					validators: {
						notEmpty: {
							message: "Fax is required",
						},
					},
				},
				sender_email: {
					validators: {
						notEmpty: {
							message: "Sender Email is required",
						},
					},
				},
				sender_name: {
					validators: {
						notEmpty: {
							message: "Sender Name is required",
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

	$.getJSON("assets/json-files/timezones.json", function (data) {
		$.each(data, function (index, value) {
			var timezone = document.getElementById("time-zone");
			var option = document.createElement("option");
			option.value = value.text;
			option.text = value.text;
			timezone.appendChild(option);
		});
	});

	$.getJSON("assets/json-files/states.json", function (data) {
		$.each(data, function (index, value) {
			var state = document.getElementById("state");
			var option = document.createElement("option");
			option.value = value.name;
			option.text = value.name;
			state.appendChild(option);
		});
	});

	$.getJSON("assets/json-files/countries.json", function (data) {
		$.each(data, function (index, value) {
			var state = document.getElementById("country");
			var option = document.createElement("option");
			option.value = value.name;
			option.text = value.name;
			state.appendChild(option);
		});
	});
});
