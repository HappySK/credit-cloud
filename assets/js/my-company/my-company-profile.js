$("#check-url-btn").click(function () {
	window.location.href = "//" + document.getElementById("website-url").value;
});

// Form Validation plugin
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

	// For getting Timezones
	$.getJSON("assets/json-files/timezones.json", function (data) {
		$.each(data, function (index, value) {
			var timezone = document.getElementById("time-zone");
			var option = document.createElement("option");
			option.value = value.text;
			option.text = value.text;
			timezone.appendChild(option);
		});
	});

	// For Getting States dropdown
	$.getJSON("assets/json-files/states.json", function (data) {
		$.each(data, function (index, value) {
			var state = document.getElementById("state");
			var option = document.createElement("option");
			option.value = value.name;
			option.text = value.name;
			state.appendChild(option);
		});
	});

	// For getting countries dropdown
	$.getJSON("assets/json-files/countries.json", function (data) {
		$.each(data, function (index, value) {
			var state = document.getElementById("country");
			var option = document.createElement("option");
			option.value = value.name;
			option.text = value.name;
			state.appendChild(option);
		});
	});

	$.get(
		"server-side/class/my-company/company-profile.php",
		{ action: "get_company_profile" },
		function (company, status) {
			if (company != false) {
				console.log(company);
				document.getElementById("company-name").value = company.company_name;
				document.getElementById("website-url").value = company.website_url;
				document.getElementById("address").value = company.address;
				document.getElementById("state").value = company.state;
				document.getElementById("city").value = company.city;
				document.getElementById("zip").value = company.zip;
				document.getElementById("country").value = company.country;
				document.getElementById("time-zone").value = company.timezone;
				document.getElementById("phone").value = company.phone;
				document.getElementById("fax").value = company.fax;
				document.getElementById("sender-name").value = company.sender_name;
				document.getElementById("sender-email").value = company.sender_email;
				document.getElementById("web-url").value = company.website_url;
			}
		},
		"JSON"
	);
});
