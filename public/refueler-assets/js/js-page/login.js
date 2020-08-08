function loginButton(){
	var email = $('input[type="email"]').val();
	var password = $('input[type="password"]').val();
	login(email,password);
}

function login(email,password) {
	var settings = {
	  "url": "http://localhost:8000/api/login",
	  "method": "POST",
	  "timeout": 0,
	  "headers": {
	    "Accept": "application/json",
	    "Content-Type": ["application/x-www-form-urlencoded", "application/x-www-form-urlencoded"]
	  },
	  "data": {
	    "email": email,
	    "password": password
	  }
	};

	$.ajax(settings)
	.done(function (response) {
	  	//store token
	  	localStorage.setItem('token',response['token']);

	  	//store email
	  	localStorage.setItem('email',email);

	  	localStorage.getItem('token');
	  	localStorage.getItem('email');

	  	//redirect to page
	  	window.location.href = "dashboard.html";
	})
	.fail( function(xhr, textStatus, errorThrown) {
		alert(xhr.responseText);
    });
}
