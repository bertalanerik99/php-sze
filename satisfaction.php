<?php

require_once 'includes/databasehandler.inc.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';
if (isset($_SESSION['id'])) {
    header('Location: ./info.php');
    exit();
}
?>

<body>
	<div class="container ">
		<div class="row modal modal-dialog-centered m-0 p-2">
			<div class="mx-auto  button blurmodals button fs-2" style="width: 50rem;">
				<div class="panel-body">
					<h1 class="card-title text-center mt-3"> <strong>Értékelje az adott vásárlását.</strong></h1>
					<h1 class="card-title text-center mb-5 mt-3"> <strong> Mennyire elégedett összességében?</strong>
					</h1>
					<form action="includes/addtodatabase.inc.php" method="post" class="text-center fs-3">
						<div class="text-center">
							<div class="mt-1 " role="group" aria-label="Basic radio toggle button group">
								<input type="radio" class="btn-check mb-5" value="1" name="satisfaction" id="1"
									autocomplete="off" required />
								<label class="btn btn-lg btn-outline-light  p-3 me-4" for="1"><span class="fs-2">😠
									</span></label>

								<input type="radio" class="btn-check mb-5" value="2" name="satisfaction" id="2"
									autocomplete="off" required />
								<label class="btn btn-lg btn-outline-light  p-3 me-4" for="2"><span
										class="fs-2">😐</span></label>

								<input type="radio" class="btn-check mb-5" value="3" name="satisfaction" id="3"
									autocomplete="off" required />
								<label class="btn btn-lg btn-outline-light  p-3 me-4" for="3"><span
										class="fs-2">😊</span></label>

								<input type="radio" class="btn-check mb-5" value="4" name="satisfaction" id="4"
									autocomplete="off" required />
								<label class="btn btn-lg btn-outline-light  p-3 me-4" for="4"><span
										class="fs-2">😍</span></label>
							</div>
						</div>
						<!-- <div class="text-center ">
							<p>Elégedettség: <span id="emoji">😍</span></p>
							<input name="satisfaction" type="range" min="1" max="4" step="1" value="4" id="range">
							<p id="value">Nagyon elégedett!</p>
						</div> -->
						<div class="row ps-5 mt-2">
							<div class="col-12 ps-5 d-flex justify-content-between">
								<div class="d-flex ps-2 justify-content-center text-center mx-auto align-items-center">

									<button type="submit" id="submit-button"
										class="mt-3 btn btn-outline-light blurmodals mb-2 btn-lg button"
										name="fourthsend"><strong>Befejezés <img src="img/arrow-right.svg"
												alt=""></strong></button>

								</div>
								<div class="d-flex justify-content-end align-items-center">
									<a href="http://localhost/beadand%c3%b3/php-sze/"
										class="me-2 justify-content-end align-items-end mt-3 btn btn-outline-light blurmodals  ms-auto button"
										name="restart"><strong>Újrakezd</strong>&nbsp;<svg
											xmlns="http://www.w3.org/2000/svg" width="20" height="20"
											fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
											<path fill-rule="evenodd"
												d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
											<path
												d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
										</svg>
									</a>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="script.js"></script>

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