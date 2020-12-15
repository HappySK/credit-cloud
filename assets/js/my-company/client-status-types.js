$(document).ready(function(){
  $('#not-counted-as-clients-table').DataTable({
    info: false,
    searching: false,
    paging: false
  });
  $('#counted-as-clients-table').DataTable({
    info: false,
    searching: false,
    paging: false
  });
})