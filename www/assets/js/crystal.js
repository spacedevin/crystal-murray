$(function() {
	if (typeof(history.pushState) == 'undefined') {
		history.pushState = function() { return null; }
		history.replaceState = function() { return null; }
	} else {
		window.onpopstate = function (e) {

		}
	}
	$('.nav a').click(function(e) {
		e.preventDefault();
		loc = $(this).attr('href').replace('#','');
		$.scrollTo($('a[name=' + loc +']').get(0), 300, {easing:'easeOutQuart'} );
		history.pushState({}, loc, '#' + loc);
	});
});