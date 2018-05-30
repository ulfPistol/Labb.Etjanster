$(document).ready(function()
{
  $("#email_error").hide();
  $("#password_error").hide();
  $("#repassword_error").hide();
  $("#comment_error").hide();
  var error_comment = false;
  var error_email = false;
  var error_password = false;
  var error_repassword = false;
  $("#password").on("input", function()
    {
      check_password();
    });

  $("#email").on("input", function()
    {
      check_email();
    });

  $("#repassword").on("input", function()
    {
      check_retype_password();
    });

  $("#kommentar").on("input", function()
    {
      check_comment();
    });

  function check_comment()
    {
      var comment = $.trim($("#kommentar").val());
      if(comment.length > 1)
        {
          $("#comment_error").hide();
          error_comment = false;
        }
      else
        {
          $("#comment_error").show();
          error_comment = true;
        }
    }
  function check_email()
   {
     var email = $("#email").val();
     var checkAt = email.indexOf('@');
     var checkDot = email.indexOf('.');
     if (checkAt < 1 || checkDot < 1 || checkDot < checkAt)
       {
         $("#email_error").hide();
         error_email = false;
       }
    else
      {
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

  $("#commentForm").submit(function()
  {
      error_comment = false;
      check_comment();
      if(error_comment == false)
        {
          return true;
        }
      else
        {
          return false;
        }
  });



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
