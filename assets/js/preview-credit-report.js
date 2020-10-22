$(document).ready(function(){
  $('#show-details-button').click(function(){
    if($(this).text() == 'Show more details')
    {
      $(this).text('Hide Details')
    }
    else if($(this).text() == 'Hide Details')
    {
      $(this).text('Show more details')
    }
  })
})