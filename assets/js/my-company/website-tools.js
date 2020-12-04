$(document).ready(function () {
	// A) Web Lead Form Tab

	$("#web-form-code").val(
		'<iframe class=webform-frame name=frame_webform id=frame_webform src="https://www.secureclientaccess.com/weblead/postcrc/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/RmlsbCBvdXQgdGhpcyBmb3JtIGZvciBhIGZyZWUgY29uc3VsdGF0aW9u/en" height=700  width=100% style="background:white"  frameborder=0></iframe>'
	);

	$("#save-btn").click(function () {
		iframe_code =
			'<iframe class=webform-frame name=frame_webform id=frame_webform src="https://www.secureclientaccess.com/weblead/postcrc/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/RmlsbCBvdXQgdGhpcyBmb3JtIGZvciBhIGZyZWUgY29uc3VsdGF0aW9u/' +
			$('[name="web-signup-language"]:checked').val() +
			'" height=' +
			$("#frame-height").val() +
			"  width=" +
			$("#frame-width").val() +
			'% style="background:' +
			$('[name="background"]:checked').val() +
			'"  frameborder=0></iframe>';
		web_form_data = {
			action: "put_data",
			language: $('[name="web-signup-language"]:checked').val(),
			form_type: $('[name="sign-up-form-type"]:checked').val(),
			frame_height: $("#frame-height").val(),
			frame_width: $("#frame-width").val(),
			background: $('[name="background"]:checked').val(),
			chargebee_payment: $('[name="chargebee-payment"]:checked').val(),
			title: $("#web-form-title").val(),
			web_form_code: btoa(iframe_code),
		};
		// console.log(web_form_data)
		$.ajax({
			url: "server-side/class/my-company/website-tools/web-lead-form.php",
			data: web_form_data,
			type: "POST",
			crossDomain: true,
			success: function (data) {
				// console.log(data);
				fetch_web_lead_form();
				Swal.fire(
					"Changes Made!",
					"The Changes for Web Lead Form has made!",
					"success"
				);
			},
			error: function (jqxhr, exception) {
				// console.log(jqxhr);
				// console.log(exception);
				// console.log("Its Not Working")
			},
		});
	});

	fetch_web_lead_form();

	//Copying the text area button
	$("#copy-btn").click(function () {
		$("#web-form-code").val(link).select();
		document.execCommand("copy");
	});

	// Showing the modal containing inline frame
	$("#preview-btn").click(function () {
		$("#text-area-modal-content").html(link);
		$("#text-area-modal").modal("show");
	});

	// B) Affiliate Sign Up tab

	$("#affiliate-web-form-code").val(
		'<iframe name=frame_lead id=frame_lead src="https://app.creditrepaircloud.com/affiliatelead/affliate_leadform/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/UGxlYXNlIGNvbnRhY3QgbWUgYWJvdXQgeW91ciBBZmZpbGlhdGUgUHJvZ3JhbQ==/en" height=700  width=100% style="background: white"  frameborder=0  ></iframe>'
	);

	$("#affiliate-save-btn").click(function () {
		affiliate_iframe_code =
			'<iframe name="frame_lead" id="frame_lead" src="https://app.creditrepaircloud.com/affiliatelead/affliate_leadform/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/UGxlYXNlIGNvbnRhY3QgbWUgYWJvdXQgeW91ciBBZmZpbGlhdGUgUHJvZ3JhbQ==/' +
			$('[name="affiliate-language"]:checked').val() +
			'" height="' +
			$("#affiliate-frame-height").val() +
			'"  width="' +
			$("#affiliate-frame-width").val() +
			'%" style="background:' +
			$('[name="affiliate-background"]:checked').val() +
			'"  frameborder="0" ></iframe>';
		affiliate_data = {
			actions: "put_data",
			affiliate_language: $('[name="affiliate-language"]:checked').val(),
			affiliate_custom_title: $("#affiliate-custom-title").val(),
			affiliate_frame_height: $("#affiliate-frame-height").val(),
			affiliate_frame_width: $("#affiliate-frame-width").val(),
			affiliate_background: $('[name="affiliate-background"]:checked').val(),
			affiliate_web_form_code: btoa(affiliate_iframe_code),
		};
		// console.log(affiliate_data)
		$.post(
			"server-side/class/my-company/website-tools/affiliate-sign-up-form.php",
			affiliate_data,
			function (data, status) {
				// console.log(data);
			}
		);
		Swal.fire(
			"Changes Made!",
			"The Changes for affiliate signup form is made!",
			"success"
		).then(function () {
			fetch_affiliate_sign_up_form();
		});
	});

	fetch_affiliate_sign_up_form();

	//Copying Affiliate Iframe code under affiliate-signup-form
	$("#affiliate-copy-btn").click(function () {
		$("#affiliate-web-form-code")
			.val($("#affiliate-web-form-code").val())
			.select();
		document.execCommand("copy");
	});

	//Showing the modal for affiliate sign up form
	$("#affiliate-preview-btn").click(function () {
		// console.log("button Clicked");
		$("#affiliate-modal-content").html($("#affiliate-web-form-code").val());
		$("#affiliate-modal").modal("show");
	});

	//textarea under login-options tab
	$("#login-options-text-area").val(
		'<iframe name=frame_login id=frame_login src="https://www.secureclientaccess.com/login/post" height=350  width=500  frameborder=0 ></iframe>'
	);

	//Login Options Modal
	$("#view-my-portal-box-btn").click(function () {
		$("#login-options-modal-content").html($("#login-options-text-area").val());
		$("#login-options-modal").modal("show");
	});

	// Videos Embedding in text area
	$("#videos-embed-1").val(
		'<iframe class="w-100" height="250"  src="https://www.youtube.com/embed/wYHA_qStcqE?rel=0&controls=0&showinfo=0" frameborder=0  allowfullscreen></iframe>'
	);
	$("#videos-embed-2").val(
		'<iframe class="w-100 h-100"  src="https://www.youtube.com/embed/sy41imOrHbg?rel=0&controls=0&showinfo=0" frameborder=0  allowfullscreen></iframe>'
	);

	// Copying the embedded video code in videos tab
	$("#videos-copy-btn-1").click(function () {
		$("#videos-embed-1").val($("#videos-embed-1").val()).select();
		document.execCommand("copy");
	});

	$("#videos-copy-btn-2").click(function () {
		$("#videos-embed-2").val($("#videos-embed-2").val()).select();
		document.execCommand("copy");
	});
});

function fetch_affiliate_sign_up_form() {
	// Fetch data for affiliate sign up form tab
	$.get(
		"server-side/class/my-company/website-tools/affiliate-sign-up-form.php",
		{ action: "get_data" },
		function (data, status) {
			// console.log(data);
			if (data != null) {
				$("#affiliate-sign-up-form-area")
					.find('[value="' + data.affiliate_language + '"]')
					.prop("checked", "checked");
				$("#affiliate-custom-title").val(data.affiliate_custom_title);
				$("#affiliate-frame-height").val(data.affiliate_frame_height);
				$("#affiliate-frame-width").val(data.affiliate_frame_width);
				$('[value="' + data.affiliate_background + '"]').prop(
					"checked",
					"checked"
				);
				$("#affiliate-web-form-code").val(atob(data.web_form_code));
			}
		},
		"JSON"
	);
}

// Fetching data from the database in Web Lead Form tab
function fetch_web_lead_form() {
	$.get(
		"server-side/class/my-company/website-tools/web-lead-form.php",
		{ action: "get_data" },
		function (data, status) {
			// console.log(status)
			// console.log(data)
			if (data != null) {
				$("#web-lead-form")
					.find('[value="' + data.language + '"]')
					.attr("checked", true);
				$('[value="' + data.form_type + '"]').attr("checked", true);
				$("#frame-height").val(data.frame_height);
				$("#frame-width").val(data.frame_width);
				$('[value="' + data.background + '"]').attr("checked", true);
				$('[value="' + data.chargebee_payment + '"]').attr("checked", true);
				$("#web-form-title").val(data.web_form_title);
				$("#web-form-code").val(atob(data.web_form_code));
				link = atob(data.web_form_code);
			}
		},
		"JSON"
	);
}
