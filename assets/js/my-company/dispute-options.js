$(document).ready(function(){
  $('#manage-reasons-table').DataTable({
    searching: false,
    paging: false,
    info: false,
    ajax: {
      url: 'server-side/class/my-company/dispute-options/reasons-manager.php',
      data: {
        action: 'get_reasons',
      },
      type: 'GET',
      dataType: 'JSON'
    },
    columns: [
      {data: 'reason'},
      {data: 'action'}
    ]
  });

  // Adding reasons
  $('#add-reasons-btn').click(function(){
    $.post('server-side/class/my-company/dispute-options/reasons-manager',{action : 'add_reason', reason : $('#add-reason-text').val()},function(reasons,status){
      // console.log(reasons)
      Swal.fire("Added!", "Your reason has been added!", "success").then(
        function () {
          $('#add-reason-text').val(' ');
          $("#manage-reasons-table").DataTable().ajax.reload();
          get_total_reasons();
        }
      );
    })
  })

  // Get total number of reasons
  get_total_reasons();

  //Deleting reason
  $(document).on('click','.delete-btn',function(){
    $.post('server-side/class/my-company/dispute-options/reasons-manager',{action : 'delete_reason', reason_id : $(this).attr('reason_id')},function(data,status){
      // console.log(data)
      Swal.fire("Delete!", "Your reason has been deleted!", "info").then(
        function () {
          $("#manage-reasons-table").DataTable().ajax.reload();
          get_total_reasons();
        }
      );
    })
  })

  //Manage Instructions
  $('#manage-instructions-table').DataTable({
    searching: false,
    paging: false,
    info: false,
    ajax: {
      url: 'server-side/class/my-company/dispute-options/instructions-manager',
      data: {
        action: 'get_instructions'
      },
      type: 'GET',
    },
    columns: [
      {data: 'instructions'},
      {data: 'actions'}
    ]
  });

  // Add instruction
  $('#add-instructions-btn').click(function(){
    if($('#add-instruction-text').val() == '')
    {
      Swal.fire("Empty Field!", "Please fill out the instruction!", "info");
    }
    else
    {
      $.post('server-side/class/my-company/dispute-options/instructions-manager',{action : 'add_instruction', instruction : $('#add-instruction-text').val()},function(data,status){
        // console.log(data)
        Swal.fire("Added!", "Instruction Added Successfully!", "success").then(function(){
          $('#add-instruction-text').val(' ');
          get_total_instructions();
          $('#manage-instructions-table').DataTable().ajax.reload();
        })
      })
    }
  })

  // Deleting Instruction
  $(document).on('click','.instruction-delete-btn',function(){
    $.post('server-side/class/my-company/dispute-options/instructions-manager',{action: 'delete-instruction', instruction_id: $(this).attr('instruction_id')},function(data,status){
      // console.log(data)
      Swal.fire("Deleted!", "Instruction deleted succcessfully!", "info").then(function(){
        $('#add-instruction-text').val(' ');
        get_total_instructions();
        $('#manage-instructions-table').DataTable().ajax.reload();
      })
    })
  })
})

function get_total_reasons()
{
  $.get('server-side/class/my-company/dispute-options/reasons-manager',{action : 'get_reasons'},function(reasons,status){
    $('#total-reasons').text(reasons.data.length)
  },'JSON')
}

function get_total_instructions()
{
  $.get('server-side/class/my-company/dispute-options/instructions-manager',{action : 'get_instructions'},function(instructions,status){
    $('#total-instructions').text(instructions.data.length)
  },'JSON')
}