<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
</br>
</br>
</br>
<div class="container white salarie_page z-depth-2" style="padding:20px;">
	<h1 class="center">Pages des Statistiques</h1>

	<p>Liste des Statistique</p>
	<div class="row">
		<div class="card col s4 hoverable" >
			<table class="bordered highlight center">
				<thead>
				<th>IdStatistique</th>
				<th>Score</th>
				<th>IdQuizz</th>
				</thead>
				<tbody>

				<?php $idQuizz = array();
				$score = array(); ?>

				<?php foreach ($listeStatistique as $statistique): ?>
					<tr>
						<td><?php echo $statistique->idStatistique; ?></td>
						<td><?php echo $statistique->score; ?></td>
						<td><?php echo $statistique->idQuizz; ?></td>
						<?php array_push($idQuizz, $statistique->idQuizz); ?>
						<?php array_push($score, $statistique->score); ?>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>

	<?php
	$labels = $idQuizz;
	$data = $score;
	?>


	<div class="row card col s3 hoverable">
		<canvas id="myChart" width="400" height="400"></canvas>
		<script>

			var labels =<?php echo json_encode($labels) ?>;
			var data =<?php echo json_encode($data) ?>;

			var ctx = document.getElementById('myChart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: labels,
					datasets: [{
						label: '# of Votes',
						data: data,
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								beginAtZero: true
							}
						}]
					}
				}
			});
		</script>
	</div>
	</br>
	</br>
</div>
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>
