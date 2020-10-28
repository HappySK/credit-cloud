$(document).ready(function () {

	$("#next").click(function () {
		var fname = document.getElementById("fname").value;
		var lname = document.getElementById("lname").value;
		var name = fname + lname;
		var address1 = document.getElementById("address1").value;
		var email = document.getElementById("email").value;
		var address2 = document.getElementById("address2").value;
    var state = document.getElementById("state").value;
    var country = document.getElementById("countries");
    var selected_country = country.options[country.selectedIndex].innerHTML;

		sessionStorage.setItem("name", name);
		sessionStorage.setItem("email", email);
		sessionStorage.setItem("address1", address1);
		sessionStorage.setItem("address2", address2);
		sessionStorage.setItem("state", state);
    sessionStorage.setItem("country", selected_country);
    append_details();
	});

	function append_details() {
		document.getElementById("name").innerHTML = sessionStorage.getItem("name");
		document.getElementById("user_email").innerHTML = sessionStorage.getItem(
			"email"
		);
		document.getElementById("addr1").innerHTML = sessionStorage.getItem(
			"address1"
		);
		document.getElementById("addr2").innerHTML = sessionStorage.getItem(
			"address2"
		);
		document.getElementById("user_state").innerHTML = sessionStorage.getItem(
			"state"
		);
		document.getElementById("country").innerHTML = sessionStorage.getItem(
			"country"
		);
  }
  
  $('#kt_login_signup_form_submit_button').click(function(e){
    e.preventDefault();
    var user_details =  {
      fname : document.getElementById('fname').value,
      lname : document.getElementById('lname').value,
      email : document.getElementById('email').value,
      password : document.getElementById('password').value,
      address1 : document.getElementById('address1').value,
      address2 : document.getElementById('address2').value,
      state : document.getElementById('state').value,
      country : sessionStorage.getItem('country')
    }
    $.post('server-side/user-log.php?action=register',user_details,function(data,status){
      console.log(data)
      var res = JSON.parse(data)
      if(res.status == 'success')
      {
        Swal.fire({
          title: "All credentials are validated successfully",
          text: "Redirecting to Main Page..",
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
      else if(res.status == 'failure' && res.message == 'Email Exists')
      {
        Swal.fire("Email ID already exists !", "Email ID already exists Please try logging in", "error")
      }
    })
  })
});
