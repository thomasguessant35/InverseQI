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
		<?php $cmpt=0;?>
		<div class="row">
		<?php foreach($listeImage as $image):?>
			<?php if($cmpt==2):?>
				</div>
				<div class="row">
				<?php $cmpt=0;?>
			<?php endif; ?>
			<div class="col s4 center"><img src="<?php echo base_url('/Image/'.$image->Image); ?>" alt="">
			</div>
		<?php endforeach; ?>
		</div>
	</div>
	<?php foreach($question as $q):?>
		<h5 class="center"><?php echo $q->Intitule;?> </h5><br><br>
	<?php endforeach; ?>

	<?php echo form_open('test/testform/'.$idTest.'/'.$compteur, 'class="col s12"'); ?>
		<div class="container">
			<div class="row">
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r1.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="true" type="radio" checked/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r2.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="false" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r3.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="false" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r4.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="false" type="radio"/>
						<span></span>
					</label>
				</div>
			</div>
			<div class="row">
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r5.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="false" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r6.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="false" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r7.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="false" type="radio"/>
						<span></span>
					</label>
				</div>
				<div class="col s3 center"><img src="<?php echo base_url('/Image/r8.png'); ?>"
												alt=""><br>
					<label>
						<input class="with-gap" name="answer" value="false" type="radio"/>
						<span></span>
					</label>
				</div>
			</div>

			<div class="row center">
				<button class="btn waves-effect blue" type="submit" name="action">Suivant
					<i class="material-icons right">send</i>
				</button>
			</div>
		</div>
	</form>
</div>
</body>
</html>
