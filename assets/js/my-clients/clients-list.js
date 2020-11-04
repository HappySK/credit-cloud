$(document).ready(function(){
  $('#clients-list-datatable').DataTable({
    paging:false,
    info : false,
    ajax : 'assets/datatables/clients-list-datatable.php',
    columns : [
      {data : 's_no'},
      {data : 'name'},
      {data : 'assigned_to'},
      {data : 'referred_by'},
      {data : 'date_created'},
      {data : 'date_of_start'},
      {data : 'date_login'},
      {data : 'status'},
      {data : 'action'}
    ]
  });
})