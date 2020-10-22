$(document).ready(function () {
	$("#link-provider").focusout(function () {
		url = $(this).val();
	});

	$("#fav-provider").click(function () {
		window.location.href = "//" + url;
	});

  setTimeout(show_modal,5000)
  
  $('.dismiss').click(function(){
    $('#instructions-modal').fadeOut(300)
  })
});

function show_modal()
{
  $("#instructions-modal").fadeIn(200)
}
