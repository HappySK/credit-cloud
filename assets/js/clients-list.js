$(document).ready(function () {
	$("#clients-list-datatable").DataTable({
		paging: false,
		info: false,
		ajax: "my-clients/clients-list-datatable.php",
		searching: false,
		columns: [
			{ data: "id" },
			{ data: "name" },
			{ data: "assigned-to" },
			{ data: "referred-by" },
			{ data: "added" },
			{ data: "start-date" },
			{ data: "last-login" },
			{ data: "status" },
			{ data: "action" },
		],
	});
});
