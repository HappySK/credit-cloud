$(document).ready(function () {
	$("#link-provider").focusout(function () {
		url = $(this).val();
	});

	$("#fav-provider").click(function () {
		window.location.href = "//" + url;
	});

<<<<<<< HEAD
	setTimeout(show_modal, 5000);

	$(".dismiss").click(function () {
		$("#instructions-modal").fadeOut(300);
	});
});

function show_modal() {
	$("#instructions-modal").fadeIn(200);
=======
  setTimeout(show_modal,5000)
  
  $('.dismiss').click(function(){
    $('#instructions-modal').fadeOut(300)
  })
});

function show_modal()
{
  $("#instructions-modal").fadeIn(200)
>>>>>>> 9537315890a295dc87f7ecbb6a36f0cef925c43a
}
