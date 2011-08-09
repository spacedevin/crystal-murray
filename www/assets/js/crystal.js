$(function() {
	if (typeof(history.pushState) === 'undefined') {
		history.pushState = function() { return null; }
		history.replaceState = function() { return null; }
	} else {
		window.onpopstate = function (e) { 
			return null;
		}
	}
	$('.nav-local').click(function(e) {
		e.preventDefault();
		loc = $(this).attr('href').replace('#','');
		$.scrollTo($('a[name=' + loc +']').get(0), 300, {easing:'easeOutQuart'} );
		history.pushState({}, loc, loc);
		return false;
	});

	e = ['m','o','c','.','y','a','r','r','u','m','l','a','t','s','y','r','c','@','l','a','t','s','y','r','c'];
	for (x in e) $('#contact-email').prepend(e[x]);
	v = $('#contact-email').html();
	$('#contact-email').html('<a href="mailto:' + v + '">' + v + '</a>');
	

	loc = location.pathname.replace('/','');
	if (loc && $('a[name=' + loc +']').get(0)) {
		$.scrollTo($('a[name=' + loc +']').get(0), 300, {easing:'easeOutQuart'} );
	}
});