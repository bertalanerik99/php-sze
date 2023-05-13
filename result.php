<?php
 require_once 'includes/header.php';
 require_once 'includes/navbar.php';
 require_once 'includes/databasehandler.inc.php';
 require 'includes/datafromserver.inc.php';
 if (!isset($_SESSION['id'])) {
     header('Location: ./index.php');
     exit();
 }
 ?>

<body>
	<div class="container">
		<div class="col-12 text-center">
			<a href="info.php" class="mt-3 btn btn-outline-danger btn-lg button blurmodals"> <strong>Visszajelzések <svg
						xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
						class="bi bi-question-circle-fill" viewBox="0 0 16 16">
						<path
							d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z" />
					</svg></strong></a>
		</div>
		<div class="row mx-auto">
			<div class="card mt-3 col-12 mb-3 mx-auto blurmodals button">
				<div class="card-body">
					<h1 class="card-title text-center mb-5 mt-1"> <strong>Részletek:</strong></h1>
					<p class="card-text">
					<h4 class="text-center">Összes visszajelzés:
						<?php
                               
                                $sql = "SELECT COUNT(*) AS 'DB' from answers";
                                $result = mysqli_query($conn, $sql);
                                $row=mysqli_fetch_array($result);
                                echo $row['DB'];
                                $feedbackSum=$row['DB'];
                            ?>
					</h4>
					<h4 class="text-center">Átlag elégedettség:
						<?php
                                $sql = "SELECT AVG(SATISFACTION) AS 'SF'from answers";
                                $result = mysqli_query($conn, $sql);
                                $row=mysqli_fetch_array($result);
                                echo '4/'. number_format($row['SF'], 1);
                            ?>
					</h4>
					<h4 class="text-center">
						<?php
                            if ($row['SF']>= 3.5) {
                                echo "<p class='text-center'><u>Gratulálok! A vevők nagyon elégedettek!</u> 😍</p>";
                            } elseif ($row['SF'] >= 3 && $row['SF'] < 3.5) {
                                echo "<p class='text-center'><u>A vevők nagy része elégedett!</u> 😊</p>";
                            } elseif ($row['SF'] >= 2 && $row['SF'] < 3) {
                                echo "<p class='text-center'><u>A vevők elégedettsége átlagos!</u> 😐</p>";
                            } elseif ($row['SF'] < 2) {
                                echo "<p class='text-center'><u>Ajjjaj. A vevők nem elégedettek!</u> 😠</p>";
                            }
                        ?>
					</h4>
					<h4 class="text-center">Megadott e-mail címek száma:
						<?php
                                $sql = "SELECT COUNT(*) AS 'EDB'from answers Where EMAIL is not null";
                                $result = mysqli_query($conn, $sql);
                                $row=mysqli_fetch_array($result);
                                echo $row['EDB'];
                            ?>

						</p>
				</div>
			</div>
		</div>
		<div class="row mb-3 mx-auto">
			<div class=" col-md-6 col-sm-12 text-white mt-3">
				<div class="blurmodals button">
					<canvas height="300px" id="myChart"></canvas>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 text-white mt-3">
				<div class="blurmodals button">
					<canvas height='300px' id="myChart2"></canvas>
				</div>
			</div>
		</div>
		<script>
			window.onload = function() {
				let avg = (parseInt(data_array[3]) + parseInt(data_array[2]) * 2 + parseInt(data_array[1]) * 3 +
					parseInt(data_array[0]) * 4) / (parseInt(data_array[3]) + parseInt(data_array[2]) + parseInt(
						data_array[1]) +
					parseInt(data_array[0])) * 10 / 4;
				if (isNaN(avg)) {
					avg = 0;
				}
				const ctx = document.getElementById('myChart');
				new Chart(ctx, {
					type: 'bar',
					data: {
						labels: ['😠', '😐', '😊', '😍'],
						datasets: [{
							label: 'Vevői visszajelzés',
							data: data_array.reverse(),
							borderWidth: 1,
							backgroundColor: '#0758a4',

						}]
					},
					options: {
						responsive: true,
						plugins: {
							legend: {
								labels: {
									// This more specific font property overrides the global property
									font: {
										size: 16

									},
								}
							},
							title: {
								display: true,
								text: 'Vevői elégedettségek (1 - 4) {' + (avg / 2).toFixed(1) + '⭐} [10 / ' + avg
									.toFixed(2) +
									']',
								font: {
									size: 20

								},
								color: 'white',
							},
						},
						scales: {
							y: {
								beginAtZero: true,
								ticks: {
									font: {
										size: 18


									},
									color: 'white'
								},
							},
							x: {
								ticks: {
									font: {
										size: 24,

									},
									color: 'white'
								},
							},
						},
						color: 'white',
					}
				});
				const ctx2 = document.getElementById('myChart2');
				new Chart(ctx2, {
					type: 'doughnut',
					data: {
						labels: ['Régi ügyfél', 'Ajánlás', 'Internet'],
						datasets: [{
							label: 'összesen',
							data: data_array2.reverse(),
							backgroundColor: [
								'#8a8a8a', //szürke
								'#0758a4', //kék                    
								'#b6001e', //piros
							],
							hoverOffset: 2
						}]
					},
					options: {
						responsive: true,
						plugins: {
							legend: {
								position: 'bottom',
								labels: {
									// This more specific font property overrides the global property
									font: {
										size: 18,
										family: 'Nunito',
									},
								}
							},
							title: {
								display: true,
								text: 'Honnan hallott rólunk? (' +
									<?php echo $feedbackSum;?>
									+
									' visszajelzés)',
								font: {
									size: 24,
									family: 'Nunito'
								},
								color: 'white',
							},
						},
						color: 'white',
					},
				});
			}
		</script>
	</div>
</body>
<style>
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