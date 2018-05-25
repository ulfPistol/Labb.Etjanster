$(document).ready(function() {

  $("#email_error").hide();
  $("#password_error").hide();
  $("#repassword_error").hide();

  var error_email = false;
  var error_password = false;
  var error_repassword = false;

  $("#password").on("input", function() {
    check_password();
  });

  $("#email").on("input", function() {
    check_email();
  });

  $("#repassword").on("input", function() {
    check_retype_password();
  });



  function check_email()
   {
    var email = $("#email").val();
    if(email.indexOf('@') != -1 && email.indexOf('.') != -1)
          {
                $("#email_error").hide();
                error_email = false;
          }
    else  {
                $("#email_error").show();
                error_email = true;
          }
   }

  function check_password()
  {
          var pass = $("#password").val().length;
          if(pass > 6)
          {
            $("#password_error").hide();
            error_password = false;
          }
          else
          {
            $("#password_error").show();
            error_password = true;
          }
  }

  function check_retype_password()
  {
          var pass = $("#password").val();
          var repass = $("#repassword").val();
          if(repass != pass)
          {
            $("#repassword_error").show();
            error_repassword = true;
          }
          else
          {
            $("#repassword_error").hide();
            error_repassword = false;
          }
  }


$("#login").submit(function()
{
  error_email = false;
  error_password = false;

  check_email();
  check_password();

  if(error_email == false && error_password == false)
    {
      return true;
    }
  else
    {
      return false;
    }
});

$("#register").submit(function()
{
  error_email = false;
  error_password = false;
  error_repassword = false;

  check_email();
  check_password();
  check_retype_password();

  if(error_email == false && error_password == false)
    {
      return true;
    }
  else
    {
      return false;
    }
});

  });
