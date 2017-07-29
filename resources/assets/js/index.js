$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
});
var token = $('input[name="_token"]').val();

$.ajax({
  url: 'http://localhost:8000/api/delete/team/3',
  method: 'POST',
  data: { '_token': token }
});
