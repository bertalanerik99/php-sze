<?php
    require_once 'includes/databasehandler.inc.php';
    require_once 'includes/header.php';
    require_once 'includes/navbar.php';
?>

<body>
	<div class="container">
		<div class="row modal modal-dialog-centered m-0 p-2">
			<div class="mx-auto button blurmodals button col-lg-8 col-md-10 fs-2">
				<div class="panel-body mx-auto text-center">
					<h1 class="card-title text-center mb-2 mt-4"> <strong>Köszönjük, hogy kitöltötte
							kérdőívünket!</strong></h1>
					<a id="submit-button" href="index.php"
						class="mt-4 btn btn-outline-light blurmodals mb-3 btn-lg button"><strong>Vissza
							a
							főoldalra!<img src="img/arrow-right.svg" alt=""></strong></a>
				</div>
			</div>
		</div>
	</div>
</body>
<script>
	let timeout = setTimeout(function() {
		window.location.href = 'http://localhost/beadand%c3%b3/php-sze/';
	}, 4000);
</script>
<style>
	.button {
		border: 2px solid red;
		border-radius: 32px;
	}

	* {
		color: white;
	}

	.blurmodals {
		background: rgba(255, 255, 255, 0.1) !important;
		-webkit-backdrop-filter: blur(12px) !important;
		backdrop-filter: blur(12px) !important;
		padding: 10px;
		border-radius: 20px;
	}
</style>