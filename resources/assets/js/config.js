$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
// var token = $('input[name="_token"]').val();
// console.log(token);
// $.ajax({
//   url: 'http://localhost:8000/api/delete/team/3',
//   method: 'POST',
//   data: { '_token': 'hHWcA7CTOEvobq3oHbpv63d3kcHenEHlpWESOzcX' }
// });
$.ajax({
  url: 'http://localhost:8000/api/edit/team/1',
  method: 'PUT',
	data: { '_token': 'hHWcA7CTOEvobq3oHbpv63d3kcHenEHlpWESOzcX',
					'club': 'abc', 'played': 1, 'won': 1, 'drawn': 1, 'lost': 1,
					'goal_for': 1, 'goal_against': 1, 'goal_difference': 1, 'points': 1 }
});
