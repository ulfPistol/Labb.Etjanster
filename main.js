function validatePass()
{
var pass = document.getElementById("pword").value;
	if(pass.length < 6)
	{
	alert("Password must contain at least 6 characters")
	} else true
}


function validateEmail()
{

	var adress = document.getElementById("email").value;
	if(adress.indexOf('@') != -1 && email.indexOf('.') != -1)
	{
	alert("Insert valid email.")
	return false
	}
	else
	{
	return true
	}
	
}

function validateFields()
{
	var kommentar = document.getElementById("kommentar").value;

	else if(kommentar.trim().length < 1)
	{
	alert("input kommentar");
	}
	else
	{
	true;
	}
}
function validateFieldsUser()
{
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pword").value;
	
	if(pass.trim().length < 1)
	{
	alert("Input password!")
	}
	else if(email.trim().length < 1)
	{
	alert("Input email!")
	}
	else
	{
	true
	}
}

$(document).ready(function(){
  alert("Hello world from jQuery");
});





