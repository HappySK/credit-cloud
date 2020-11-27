$(document).ready(function () {
	// Displaying the values of textarea
	$("#web-form-code").val(
		'<iframe class=webform-frame name=frame_webform id=frame_webform src="https://www.secureclientaccess.com/weblead/postcrc/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/RmlsbCBvdXQgdGhpcyBmb3JtIGZvciBhIGZyZWUgY29uc3VsdGF0aW9u/en" height=700  width=100% style="background:white"  frameborder=0></iframe>'
	);

	//Copying the text area button
	$("#copy-btn").click(function () {
		$("#web-form-code")
			.val(
				'<iframe class=webform-frame name=frame_webform id=frame_webform src="https://www.secureclientaccess.com/weblead/postcrc/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/RmlsbCBvdXQgdGhpcyBmb3JtIGZvciBhIGZyZWUgY29uc3VsdGF0aW9u/en" height=700  width=100% style="background:white"  frameborder=0></iframe>'
			)
			.select();
		document.execCommand("copy");
	});

	// Showing the modal containing inline frame
	$("#preview-btn").click(function () {
		$("#text-area-modal-content").html(
			'<iframe class=webform-frame name=frame_webform id=frame_webform src="https://www.secureclientaccess.com/weblead/postcrc/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/RmlsbCBvdXQgdGhpcyBmb3JtIGZvciBhIGZyZWUgY29uc3VsdGF0aW9u/en" height=700  width=100% style="background:white"  frameborder=0></iframe>'
		);
		$("#text-area-modal").modal("show");
	});

	//Displaying the values of textarea under affiliate-signup-form tab
	$("#affiliate-web-form-code").val(
		'<iframe name="frame_lead" id="frame_lead" src="https://app.creditrepaircloud.com/affiliatelead/affliate_leadform/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/UGxlYXNlIGNvbnRhY3QgbWUgYWJvdXQgeW91ciBBZmZpbGlhdGUgUHJvZ3JhbQ==/en" height="700"  width="713" style="background:white"  frameborder="0" ></iframe>'
	);

	//Copying Affiliate Iframe code under affiliate-signup-form
	$("#affiliate-copy-btn").click(function () {
		$("#affiliate-web-form-code")
			.val(
				'<iframe name="frame_lead" id="frame_lead" src="https://app.creditrepaircloud.com/affiliatelead/affliate_leadform/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/UGxlYXNlIGNvbnRhY3QgbWUgYWJvdXQgeW91ciBBZmZpbGlhdGUgUHJvZ3JhbQ==/en" height="700"  width="713" style="background:white"  frameborder="0" ></iframe>'
			)
			.select();
		document.execCommand("copy");
	});

	//Showing the modal for affiliate sign up form
	$("#affiliate-preview-btn").click(function () {
    console.log("button Clicked")
		$('#affiliate-modal-content').html('<iframe name="frame_lead" id="frame_lead" src="https://app.creditrepaircloud.com/affiliatelead/affliate_leadform/NGU1NDRkMzI0ZTdhNmIzMDRkNTQ1MTNk/UGxlYXNlIGNvbnRhY3QgbWUgYWJvdXQgeW91ciBBZmZpbGlhdGUgUHJvZ3JhbQ==/en" height="700"  width="713" style="background:white"  frameborder="0" ></iframe>')
		$("#affiliate-modal").modal("show");
  });
  
  //textarea under login-options tab
  $('#login-options-text-area').val('<iframe name=frame_login id=frame_login src="https://www.secureclientaccess.com/login/post" height=350  width=500  frameborder=0 ></iframe>');

  //Login Options Modal 
  $('#view-my-portal-box-btn').click(function(){
    $('#login-options-modal-content').html('<iframe name=frame_login id=frame_login src="https://www.secureclientaccess.com/login/post" height=350  width=500  frameborder=0 ></iframe>');
    $('#login-options-modal').modal('show');
  })

  // Videos Embedding in text area
  $('#videos-embed-1').val('<iframe class="w-100" height="250"  src="https://www.youtube.com/embed/wYHA_qStcqE?rel=0&controls=0&showinfo=0" frameborder=0  allowfullscreen></iframe>');
  $('#videos-embed-2').val('<iframe class="w-100 h-100"  src="https://www.youtube.com/embed/sy41imOrHbg?rel=0&controls=0&showinfo=0" frameborder=0  allowfullscreen></iframe>');

  // Copying the embedded video code in videos tab
  $("#videos-copy-btn-1").click(function () {
		$("#videos-embed-1")
			.val(
				'<iframe class="w-100" height="250"  src="https://www.youtube.com/embed/wYHA_qStcqE?rel=0&controls=0&showinfo=0" frameborder=0  allowfullscreen></iframe>'
			)
			.select();
		document.execCommand("copy");
  });
  
  $("#videos-copy-btn-2").click(function () {
		$("#videos-embed-2")
			.val(
				'<iframe class="w-100 h-100"  src="https://www.youtube.com/embed/sy41imOrHbg?rel=0&controls=0&showinfo=0" frameborder=0  allowfullscreen></iframe>'
			)
			.select();
		document.execCommand("copy");
	});
});
