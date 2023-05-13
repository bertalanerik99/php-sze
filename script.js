
	let timeout = setTimeout(function() {
	window.location.href = 'https://pultapp.arki.hu/';
		
	}, 60000);
	document.getElementById("submit-button").addEventListener("click", function() {
		clearTimeout(timeout);
	});

 //linket át kell írni 