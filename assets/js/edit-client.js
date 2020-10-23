$(document).ready(function () {
	$("#search-toggle").click(function () {
		if ($(this).text().trim() == "Advanced Search") {
			$(this).text("Basic Search");
		} else if ($(this).text().trim() == "Basic Search") {
			$(this).text("Advanced Search");
		}
	});
	$('#import-audit-tab,#pending-report-tab,#dispute-wizard-tab,#dispute-items-tab,#educate-tab').click(function(){
		setTimeout(sweet_alert,5000)
	})
});

function sweet_alert() {
	Swal.fire({
		title: "Pending Report",
		text:
			"You imported a credit report for this client, but you have not completed tagging and saving the dispute items. You must complete this task before adding any more credit items to this clients record. Would you like to finish tagging and saving the items from the pending report?",
		icon: "success",
		buttonsStyling: false,
		confirmButtonText:
			"<a href='my-clients/edit-client/preview-credit-report' class='text-white' ><i class='la la-comment'></i> Yes, Show me the pending report</a>",
		showCancelButton: true,
		cancelButtonText: "<i class='la la-ban'></i> Delete the pending report",
		customClass: {
			confirmButton: "btn btn-danger",
			cancelButton: "btn btn-default",
		},
	});
}

$("#search-toggle-form").click(function () {
	if ($(this).text() == "Edit Details") {
		$(this).text("Save Details");
	} else if ($(this).text() == "Save Details") {
		$(this).text("Edit Details");
	}
});
