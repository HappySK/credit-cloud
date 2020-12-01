$(document).ready(function(){
  $('#add-agreement-btn').click(function(){
    console.log($(this).text().trim())
    if($(this).text().trim() == 'Add New Agreement')
    {
      $(this).html('<i class="fa fa-backward" aria-hidden="true"></i> Back')
    }
    else if($(this).text().trim() == 'Back')
    {
      $(this).html('<i class="fa fa-plus" aria-hidden="true"></i> Add New Agreement')
    }
  })

  CKEDITOR.replace('agreement-content');
})