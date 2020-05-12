<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
	<title>Inverse QI</title>
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<!--CSS-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
<div class="container">

	<h5 class="center">Question : </h5><br>

	<div class="container" style="width: 40%">
		<div class="row">
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i1q1.png'); ?>" alt="">
			</div>
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i2q1.png'); ?>" alt="">
			</div>
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i3q1.png'); ?>" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i4q1.png'); ?>" alt="">
			</div>
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i5q1.png'); ?>" alt="">
			</div>
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i6q1.png'); ?>" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i7q1.png'); ?>" alt="">
			</div>
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i8q1.png'); ?>" alt="">
			</div>
			<div class="col s4 center"><img src="<?php echo base_url('/Image/i9q1.png'); ?>" alt="">
			</div>
		</div>
	</div>
	<h5 class="center">Quelle est la figure logique </h5>
	<h5 class="center">à la place du point d'interrogation ? </h5><br><br>


	<form action="#" method="post">
		<div class="container">
			<div class="row">
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r1.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="1" type="radio" checked/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r2.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="2" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r3.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="3" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r4.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="4" type="radio"/>
						<span></span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r5.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="5" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r6.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="6" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r7.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="7" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('inverseQI/inverse-qi/Image/r8.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="8" type="radio"/>
						<span></span>
					</label>
				</div>
			</div>

			<div class="row center">
				<button class="btn waves-effect blue" type="submit" name="action">Submit
					<i class="material-icons right">send</i>
				</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>
