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

  //Batch Print Toggle
  $('#batch-print-toggle').click(function(){
    if($(this).text().trim() == 'Deactivate Batch Print Now')
    {
      Swal.fire("Deactivated", "Batch Print Deactivated Successfully!", "info").then(function(){
        $('#batch-print-toggle').text('Activate Batch Print Now')
      })
    }
    else if($(this).text().trim() == 'Activate Batch Print Now')
    {
      Swal.fire("Activated", "Batch Print Activated Successfully!", "success").then(function(){
        $('#batch-print-toggle').text('Decativate Batch Print Now')
      })
    }
  })

  $('#equifax-address-content').html('<p>Equifax Information Services LLC, </p>'+
                                '<p>P.O. Box 740256, </p>'+
                                '<p>Atlanta, GA 30348.</p>')
  $('#experian-address-content').html('<p>Experian, </p>'+
                                '<p>P.O. Box 4500, </p>'+
                                '<p>Allen, TX 75013.</p>')
  $('#transunion-address-content').html('<p>TransUnion LLC Consumer Dispute Center, </p>'+
                                    '<p>PO Box 2000, </p>'+
                                    '<p>Chester, PA 19016.</p>')
  

  // Modify address of Equifax
  $('#equifax-modify').click(function(){
    $('#equifax-address').html($('#equifax-address-content').text())
    $('#equifax-modal').modal('show')
  })
  $('#equifax-save').click(function(){
    console.log($('#equifax-address').text().trim())
    $('#equifax-address-content').html($('#equifax-address').val().trim())
    Swal.fire("Modified", "Modifed Successfully !!", "success")
  })
  $('#equifax-reset').click(function(){
        Swal.fire({
          title: "Are you sure you want to reset?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Yes, Reset it!"
      }).then(function(result) {
          if (result.value) {
            $('#equifax-address-content').html('<p>Equifax Information Services LLC</p>'+
                                                '<p>P.O. Box 740256</p>'+
                                                '<p>Atlanta, GA 30348</p>')
              Swal.fire(
                  "Reset!",
                  "Your Address has been reset",
                  "success"
              )
          }
      })
  })
    

  // Modify address of Equifax
  $('#experian-modify').click(function(){
    $('#experian-address').text($('#experian-address-content').text())
    $('#experian-modal').modal('show')
  })
  $('#experian-save').click(function(){
    console.log($('#experian-address').text().trim())
    $('#experian-address-content').html($('#experian-address').val().trim())
    Swal.fire("Modified", "Modifed Successfully !!", "success")
  })
  $('#experian-reset').click(function(){
    Swal.fire({
      title: "Are you sure you want to reset?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, Reset it!"
  }).then(function(result) {
      if (result.value) {
        $('#experian-address-content').html('<p>Experian</p>'+
                                        '<p>P.O. Box 4500</p>'+
                                        '<p>Allen, TX 75013</p>')
          Swal.fire(
              "Reset!",
              "Your Address has been reset",
              "success"
          )
      }
  })
})

  // Modify address of TransUnion
  $('#transunion-modify').click(function(){
    $('#transunion-address').text($('#transunion-address-content').text())
    $('#transunion-modal').modal('show')
  })
  $('#transunion-save').click(function(){
    console.log($('#transunion-address').text().trim())
    $('#transunion-address-content').html($('#transunion-address').val().trim())
    Swal.fire("Modified", "Modifed Successfully !!", "success")
  })
  $('#transunion-reset').click(function(){
    Swal.fire({
      title: "Are you sure you want to reset?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, Reset it!"
  }).then(function(result) {
      if (result.value) {
        $('#transunion-address-content').html('<p>TransUnion LLC Consumer Dispute Center</p>'+
                                              '<p>PO Box 2000</p>'+
                                              '<p>Chester, PA 19016</p>')
          Swal.fire(
              "Reset!",
              "Your Address has been reset",
              "success"
          )
      }
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