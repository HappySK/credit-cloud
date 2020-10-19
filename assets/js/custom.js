$(document).ready(function () {
	$("#search-toggle").click(function () {
		if ($(this).text().trim() == "Advanced Search") {
			$(this).text("Basic Search");
		} else if ($(this).text().trim() == "Basic Search") {
			$(this).text("Advanced Search");
		}
	});
});

$("#search-toggle-form").click(function () {
	if ($(this).text() == "Edit Details") {
		$(this).text("Save Details");
	} else if ($(this).text() == "Save Details") {
		$(this).text("Edit Details");
	}
});
