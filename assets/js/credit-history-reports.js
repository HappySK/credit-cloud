$(document).ready(function () {
	$("#link-provider").focusout(function () {
		url = $(this).val();
	});

	$("#fav-provider").click(function () {
		window.location.href = "//" + url;
	});

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 99d5c3f5c0a4b16e40beab4d18edea132ae5e27c
	setTimeout(show_modal, 5000);

	$(".dismiss").click(function () {
		$("#instructions-modal").fadeOut(300);
	});
});

function show_modal() {
	$("#instructions-modal").fadeIn(200);
<<<<<<< HEAD
=======
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
>>>>>>> 99d5c3f5c0a4b16e40beab4d18edea132ae5e27c
}
