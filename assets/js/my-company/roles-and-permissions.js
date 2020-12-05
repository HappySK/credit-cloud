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

  // POST Request to add role
  $('#add-role-btn').click(function(){
    $.post('assets/datatables/my-company/roles-datatable.php',{role : document.getElementById('add-role').value},function(data,status){
      console.log(data);
    },location.reload());
  })
})