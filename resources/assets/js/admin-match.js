var home = new Bloodhound({
	datumTokenizer: Bloodhound.tokenizers.whitespace,
	queryTokenizer: Bloodhound.tokenizers.whitespace,
	remote: {
		url:'/search/autocomplete/%QUERY',
		wildcard: '%QUERY'
	}
});
home.initialize();
$('.typeahead-home').typeahead({
	hint: false,
  highlight: true,
	minLength: 1,
	classNames: {
		input: 'autocomplete-field',
    suggestion: 'autocomplete-suggest',
    open: 'autocomplete-open',
  }
}, {
	display: 'club',
	source: home.ttAdapter(),
});
var away = new Bloodhound({
	datumTokenizer: Bloodhound.tokenizers.whitespace,
	queryTokenizer: Bloodhound.tokenizers.whitespace,
	remote: {
		url:'/search/autocomplete/%QUERY',
		wildcard: '%QUERY'
	}
});
away.initialize();
$('.typeahead-away').typeahead({
	hint: false,
  highlight: true,
	minLength: 1,
	classNames: {
		input: 'autocomplete-field',
    suggestion: 'autocomplete-suggest',
    open: 'autocomplete-open',
  }
}, {
	display: 'club',
	source: away.ttAdapter(),
});