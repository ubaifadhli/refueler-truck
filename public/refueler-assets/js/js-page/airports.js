var settings = {
  "url": "https://art-testserver.herokuapp.com/api/airport",
  "method": "GET",
  "timeout": 0,
  "headers": {
    "Accept": "application/json",
    "Authorization": "Bearer "+localStorage.getItem("token")
  },
};

$.ajax(settings).done(function (response) {
	createTable(response,"table1");
	$('tbody').click(function(){
		window.location.href="airport-detail.html";
	});
});




 