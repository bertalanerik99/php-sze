<?php

require 'includes/databasehandler.inc.php';
require 'includes/header.php';
require_once 'includes/navbar.php';
if (isset($_SESSION['id'])) {
    header('Location: ./info.php');
    exit();
}
?>

<body>
	<div class="container">
		<div class="row modal modal-dialog-centered m-0 p-2">
			<div class="mx-auto button blurmodals " style="width: 50rem;">
				<div class="panel-body mt-3">
					<h1 class="card-title text-center mb-5 mt-4"> <strong>Adja meg e-mail címét a
							feliratkozáshoz!</strong> </h1>
					<form action="includes/addtodatabase.inc.php" method="post"
						class="text-center fs-3 ps-5 pe-5 ms-2 me-2">
						<div class="input-group flex-nowrap  mx-auto">
							<span class="input-group-text" id="addon-wrapping"><img src="img/envelope.svg"
									alt=""></span>
							<input type="email" class="form-control " placeholder="E-mail cím" aria-label="Username"
								aria-describedby="addon-wrapping" name="email" required>
						</div>
						<div class="form-check text-start fs-5 mt-2">
							<input class="form-check-input" type="checkbox" value="" id="ok" required>
							<label class="form-check-label" for="flexCheckDefault">
								Elolvastam, és elfogadom az adatkezelési szabályzatot
							</label>
						</div>
						<div class="row ps-5">
							<div class="col-12 ps-5 d-flex justify-content-between">
								<div class="d-flex justify-content-center text-center mx-auto align-items-center">
									<button type="submit" id="submit-button"
										class="mt-4 mb-3 btn  blurmodals btn-outline-light btn-lg button"
										name="thirdsend"><strong>Következő<img src="img/arrow-right.svg"
												alt=""></strong></button>
								</div>
								<div class="d-flex justify-content-end align-items-center">
									<a href="https://pultapp.arki.hu/"
										class=" justify-content-end align-items-end mt-3 btn btn-outline-light blurmodals  ms-auto button"
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
<script src="script.js"></script>