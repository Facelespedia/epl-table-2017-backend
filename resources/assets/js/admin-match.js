var states = new Bloodhound({
	datumTokenizer: Bloodhound.tokenizers.whitespace,
	queryTokenizer: Bloodhound.tokenizers.whitespace,
	remote: {
		url:'/search/autocomplete/%QUERY',
		wildcard: '%QUERY'
	}
});
states.initialize();
$('.typeahead').typeahead({
	hint: false,
  highlight: true,
	minLength: 1,
	classNames: {
		input: 'autocomplete-field',
    hint: 'a',
    menu: 'b',
    dataset: 'c',
    suggestion: 'd',
    empty: 'e',
    open: 'f',
    cursor: 'g',
    highlight: 'h'
  }
}, {
	display: 'club',
	source: states.ttAdapter(),
});