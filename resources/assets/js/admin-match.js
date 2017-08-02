$.ajax({
  url: '/api/schedules',
  method: 'GET'
}).done(function(data){
	console.log(data.length);
	
});