
	let timeout = setTimeout(function() {
	window.location.href = 'http://localhost/beadand%c3%b3/php-sze/';
		
	}, 60000);
	document.getElementById("submit-button").addEventListener("click", function() {
		clearTimeout(timeout);
	});

 