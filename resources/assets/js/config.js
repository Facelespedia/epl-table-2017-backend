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
