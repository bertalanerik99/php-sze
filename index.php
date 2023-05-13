<?php

require_once 'includes/databasehandler.inc.php';
require_once 'includes/header.php';
require_once 'includes/navbar.php';

if (isset($_SESSION['id'])) {
    header('Location: ./info.php');
    exit();
}
$deletesql = "DELETE FROM answers WHERE DATE_TIME IS NULL";
mysqli_query($conn, $deletesql);
?>

<body>
	<div class="container ">
		<div class="row modal modal-dialog-centered m-0 p-2">
			<div class="mx-auto button blurmodals " style="width: 50rem;">
				<div class="panel-body">
					<h1 class=" text-center mb-5 mt-3"> <strong>Honnan hallott rólunk?</strong> </h1>
					<form action="includes/addtodatabase.inc.php" method="post" class="mx-auto fs-3">
						<div class="form-check mb-3">
							<input class="form-check-input" type="radio" name="fromwhere" id="first" value="1">
							<label class="form-check-label" for="first">
								Régi ügyfél vagyok (több mint 1 éve ismerem a céget).
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input" type="radio" name="fromwhere" id="second" value="2"
								required>
							<label class="form-check-label" for="second">
								Új ügyfél vagyok, és ajánlás útján hallottam a cégről.
							</label>
						</div>
						<div class="form-check mb-3">
							<input class="form-check-input " type="radio" name="fromwhere" id="third" value="3">
							<label class="form-check-label" for="third">
								Új ügyfél vagyok, interneten találkoztam a céggel.
							</label>
						</div>
						<div class="col-12 text-center">
							<button type="submit" class="mt-3 btn btn-outline-light blurmodals mb-2 btn-lg button"
								name="firstsend"><strong>Következő <img src="img/arrow-right.svg"
										alt=""></strong></button>
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