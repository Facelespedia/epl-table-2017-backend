var states = new Bloodhound({
	datumTokenizer: Bloodhound.tokenizers.whitespace,
	queryTokenizer: Bloodhound.tokenizers.whitespace,
	// prefetch: {
  //   url: '/api/schedules',
  //   filter: function(data) {
  //     // assume data is an array of strings e.g. ['one', 'two', 'three']
  //     return $.map(data, function(str) { return { value: str }; });
  //   },
	// }
	remote: {
		url:'/search/autocomplete/%QUERY',
		wildcard: '%QUERY'
	}
});
states.initialize();
$('.typeahead').typeahead({
	hint: true,
  highlight: true,
  minLength: 1
}, {
	display: 'club',
	source: states.ttAdapter(),
});