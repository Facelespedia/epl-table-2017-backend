$.ajax({
  url: '/api/schedules',
  method: 'GET'
}).done(function(data) {
	$.each( data, function( key, value) {
		$('#match-table tbody').append('<tr></tr>');
		$('#match-table tbody tr:last').append('<td class="text-center">'+value.id+'</td>');
		$('#match-table tbody tr:last').append('<td class="text-center">'+value.date+'</td>');
		$('#match-table tbody tr:last').append('<td class="text-center">'+value.time+'</td>');
		$('#match-table tbody tr:last').append('<td class="text-center">'+value.home_team_id+'</td>');
		$('#match-table tbody tr:last').append('<td class="text-center">'+value.away_team_id+'</td>');
		// console.log(key);
	});
});