$(document).ready(function(){
  $('#roles-table').DataTable({
    searching:false,
    info:false,
    paging:false,
    ajax : 'assets/datatables/my-company/roles-datatable.php',
    columns: [
			{ data: "roles" },
			{ data: "actions" }
		],
  });
})