$(document).ready(function () {
	$("#kt_login_singin_form").validate();
	$("#kt_login_singin_form_submit_button").click(function () {
		var user_details = {
			email: document.getElementById("email").value,
			password: document.getElementById("password").value,
    }
    if(user_details.email == '' || user_details.password == '')
    {
      Swal.fire("Empty Fields", "Please enter all the required fields", "error")
    }
    $.post('server-side/user-log.php?action=login',user_details,function(data)
    {
      res = JSON.parse(data)
      if(res.mode == 'login' && res.status == 'success')
      {
        Swal.fire({
          title: "All credentials are validated successfully",
          text: "Redirecting to main..",
          timer: 3000,
          onOpen: function() {
              Swal.showLoading()
          }
          }).then(function(result) {
          if (result.dismiss === "timer") {
              console.log("I was closed by the timer")
          }
          window.location.href='index'
        })
      }
      else if(res.message == 'Email ID doesnot exist' && res.mode == 'login')
      {
        Swal.fire("No Email ID !", "No Such Email ID exist.Please Register", "error")
      }
      else if(res.message == 'Invalid Password' && res.status == 'failure')
      {
        Swal.fire("Invalid Password !", "The Password you have entered is invalid. Kindly make a check on it", "error")
      }
    })
	})
})
