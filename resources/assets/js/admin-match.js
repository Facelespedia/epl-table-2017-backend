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

$('#search-schedule').on('click', function() {
	if($('.typeahead-home').val() == "" || $('.typeahead-away').val() == "") {
		$('#data-match').fadeOut("slow");
		alert("Please input team home and team away !!!");
		$('.container-match input').val("");
}else {
		$.ajax({
			url: "/api/schedules",
			data: { 'team_home': $('.typeahead-home').val(), 'team_away': $('.typeahead-away').val() }
		}).done(function(data) {
			$('#match-id').val(data.id);
			$('#home-id').val(data.home_team_id);
			$('#away-id').val(data.away_team_id);
			var dateList = data.date.split("-");
			$('#year').val(dateList[0]);
			$('#month').val(dateList[1]);
			$('#day').val(dateList[2]);
			var timeList = data.time.split(":");
			$('#hour').val(timeList[0]);
			$('#minute').val(timeList[1]);
			$('#data-match').fadeIn("slow");
		});
		$('.typeahead-home').val("");
		$('.typeahead-away').val("");
	}
});