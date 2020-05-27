<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
</br>
</br>
</br>


<ul id="tabs-swipe-demo" class="tabs">
	<li class="tab col s3"><a class="active"  href="#test-swipe-1">Statistique Licence 3</a></li>
	<li class="tab col s3"><a href="#test-swipe-2">Statistique Master 1</a></li>
	<li class="tab col s3"><a href="#test-swipe-3">Statistique Master 2</a></li>
</ul>
<div id="test-swipe-1" class="col s12 blue">

	<div class=" white salarie_page z-depth-2" style="padding:20px;">
		<h1 class="center">Pages des Statistiques</h1>

		<div class="row">

			<div class="col s4 hoverable">
				<table class="bordered highlight center">
					<thead>
					<th>Nombre Score</th>
					<th>Score</th>
					</thead>
					<tbody>

					<?php $nombreScore = array();
					$score = array(); ?>

					<?php foreach ($listeStatistique_l3->result() as $statistique): ?>
						<tr>
							<td><?php echo $statistique->nombreScore; ?></td>
							<td><?php echo $statistique->score; ?></td>
							<?php array_push($nombreScore, $statistique->nombreScore); ?>
							<?php array_push($score, "QI ".$statistique->score); ?>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>

			<div class="col s8 hoverable">
				<canvas id="myChart_l3" width="400" height="400"></canvas>
			</div>

		</div>

		<?php
		$labels_l3 = $score;
		$data_l3 = $nombreScore;
		?>


		</br>
		</br>
	</div>
</div>
<div id="test-swipe-2" class="col s12 blue">

	<div class=" white salarie_page z-depth-2" style="padding:20px;">
		<h1 class="center">Pages des Statistiques</h1>

		<div class="row">
			<div class="col s4 hoverable">
				<table class="bordered highlight center">
					<thead>
					<th>Nombre Score</th>
					<th>Score</th>
					</thead>
					<tbody>

					<?php $nombreScore = array();
					$score = array(); ?>

					<?php foreach ($listeStatistique_m1->result() as $statistique): ?>
						<tr>
							<td><?php echo $statistique->nombreScore; ?></td>
							<td><?php echo $statistique->score; ?></td>
							<?php array_push($nombreScore, $statistique->nombreScore); ?>
							<?php array_push($score, "QI ".$statistique->score); ?>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>


			<div class="col s8 hoverable">
				<canvas id="myChart_m1" width="400" height="400"></canvas>
			</div>

		</div>

		<?php
		$labels_m1 = $score;
		$data_m1 = $nombreScore;
		?>


		</br>
		</br>
	</div>
</div>
<div id="test-swipe-3" class="col s12 blue">

	<div class=" white salarie_page z-depth-2" style="padding:20px;">
		<h1 class="center">Pages des Statistiques</h1>

		<div class="row">
			<div class="col s4 hoverable">
				<table class="bordered highlight center">
					<thead>
					<th>Nombre Score</th>
					<th>Score</th>
					</thead>
					<tbody>

					<?php $nombreScore = array();
					$score = array(); ?>

					<?php foreach ($listeStatistique_m2->result() as $statistique): ?>
						<tr>
							<td><?php echo $statistique->nombreScore; ?></td>
							<td><?php echo $statistique->score; ?></td>
							<?php array_push($nombreScore, $statistique->nombreScore); ?>
							<?php array_push($score, "QI ".$statistique->score); ?>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
			</div>


			<div class="col s8 hoverable">
				<canvas id="myChart_m2" width="400" height="400"></canvas>
			</div>


		</div>

		<?php
		$labels_m2 = $score;
		$data_m2 = $nombreScore;
		?>


		</br>
		</br>
	</div>
</div>


</br>
</br>


<script>

	$(document).ready(function () {
		$('.tabs').tabs();
	});

	/// Licence 3
	var labels_l3 =<?php echo json_encode($labels_l3) ?>;
	var data_l3 =<?php echo json_encode($data_l3) ?>;

	var ctx_l3 = document.getElementById('myChart_l3').getContext('2d');

	var chart_l3 = new Chart(ctx_l3, {
		// The type of chart we want to create
		type: 'polarArea',

		// The data for our dataset
		data: {
			labels: labels_l3,
			datasets: [{
				label: "My First dataset",
				backgroundColor: ['yellow', 'orange', 'red', 'green', 'blue', 'purple', 'indigo','black'],
				borderColor: '#fff',
				data: data_l3,
			}]
		},

		// Configuration options go here
		options: {}
	});

	/// Master 1
	var labels_m1 =<?php echo json_encode($labels_m1) ?>;
	var data_m1 =<?php echo json_encode($data_m1) ?>;

	var ctx_m1 = document.getElementById('myChart_m1').getContext('2d');

	var chart_m1 = new Chart(ctx_m1, {
		// The type of chart we want to create
		type: 'polarArea',

		// The data for our dataset
		data: {
			labels: labels_m1,
			datasets: [{
				label: "My First dataset",
				backgroundColor: ['yellow', 'orange', 'red', 'green', 'blue', 'purple', 'indigo','black'],
				borderColor: '#fff',
				data: data_m1,
			}]
		},

		// Configuration options go here
		options: {}
	});


	/// Master 2
	var labels_m2 =<?php echo json_encode($labels_m2) ?>;
	var data_m2 =<?php echo json_encode($data_m2) ?>;

	var ctx_m2 = document.getElementById('myChart_m2').getContext('2d');

	var chart_m2= new Chart(ctx_m2, {
		// The type of chart we want to create
		type: 'polarArea',

		// The data for our dataset
		data: {
			labels: labels_m2,
			datasets: [{
				label: "My First dataset",
				backgroundColor: ['yellow', 'orange', 'red', 'green', 'blue', 'purple', 'indigo','black'],
				borderColor: '#fff',
				data: data_m2,
			}]
		},

		// Configuration options go here
		options: {}
	});
</script>
</body>
<?php include('z_include_footer.php'); ?>
</html>
