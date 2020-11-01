$(document).ready(function(){
  $('#last-login-activity').DataTable({
    paging:false,
    searching : false,
    info : false,
    ajax : 'assets/datatables/last-login-datatable.php',
    columns : [
      {data : 'first_name'},
      {data : 'ip_address'},
      {data : 'access_type'},
      {data : 'date_login'},
      {data : 'date_logout'},
      {data : 'location'}
    ]
  });
})