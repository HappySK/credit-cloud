$(document).ready(function(){
  $('#kt_login_signin_submit').click(function(){
    if(document.getElementById('username').value === 'admin' && document.getElementById('password').value === 'admin')
    {
      Swal.fire({
        title: "All credentials are validated successfully",
        text: "Redirecting to Super Admin Page..",
        timer: 2000,
        onOpen: function () {
          Swal.showLoading();
        },
      }).then(function (result) {
        if (result.dismiss === "timer") {
          console.log("I was closed by the timer");
          window.location.href = "super-admin/super-admin-dashboard";
        }
      });
    }
    else
    {
      Swal.fire(
        "Invalid Credentials !",
        "Please enter the valid credentials",
        "error" 
      );
    }
    
  })
})