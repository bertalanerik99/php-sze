<?php
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 
?>

<body>
	<div class="container " id="signup">
		<div class="row modal modal-dialog-centered mt-2 ">
			<div class=" panel col-lg-4 col-md-6 col-sm-8 mx-auto blurmodals button mt-2">
				<div class="panel-heading text-center ">
					<h1 class="text-white display-5 ">Bejelentkezés</h1>
					<img class="mx-auto w-75 mb-4" id="logo2" src="img/arki_login_logo.png" alt="logo">
				</div>
				<div class="panel-body text-center">
					<form action="includes/login.inc.php" method="post">
						<div class="input-group flex-nowrap px-4 mb-3 fs-5">
							<span style="background-color:#8a8a8a;" class="input-group-text" id="addon-wrapping">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0758a4"
									class="bi bi-person-fill" viewBox="0 0 16 16">
									<path
										d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
								</svg>
							</span>
							<input type="text" name="user" pattern="^[a-zA-Z0-9]*$" class="form-control" required
								placeholder="Felhasználónév" aria-label="Felhasználónév"
								aria-describedby="addon-wrapping">
						</div>
						<div class="input-group flex-nowrap px-4 mb-3 fs-5">
							<span style="background-color:#8a8a8a;" class="input-group-text" id="addon-wrapping">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#b6001e"
									class="bi bi-lock-fill" viewBox="0 0 16 16">
									<path
										d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
								</svg>
							</span>
							<input type="password" name="pwd" class="form-control" required placeholder="Jelszó"
								aria-label="Jelszó" aria-describedby="addon-wrapping">
						</div>
						<div class="panel-footer mx-auto mb-0">
							<button type="submit" name="login"
								class="btn btn-outline-light blurmodals btn-lg p-2 mb-1 col-auto fs-6 button">
								&nbsp;
								<span class="fs-5">Bejelentkezés</span> &nbsp;
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
									class="bi bi-unlock" viewBox="0 0 16 16">
									<path
										d="M11 1a2 2 0 0 0-2 2v4a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h5V3a3 3 0 0 1 6 0v4a.5.5 0 0 1-1 0V3a2 2 0 0 0-2-2zM3 8a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1H3z" />
								</svg>&nbsp;
							</button>

							<!-- <div style="background-color:#b6001e; padding:10px;" class="alert text-white mx-4 mt-2 ">
							</div> -->

						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
	<style>
		.button {
			border: 2px solid red;
			border-radius: 32px;
		}

		*:not('button') {
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

</body>
<?php
if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyfields") {
        echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Kérem töltse ki az összes mezőt!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
    }
    if ($_GET['error'] == "wrongpasswordoradminuser") {
        echo '<script>
        Swal.fire({
            title: "Hiba!",
            text: "Rossz felhasználónév vagy jelszó!",
            icon: "error",
            confirmButtonColor: "red"
          });
            </script>';
    }
}
?>