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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src='<?= base_url() ?>js/collapsible.js' type='text/javascript'></script>
</head>
<body class="blue lighten-5">
<?php include('z_include_menu.php'); ?>
</br>
</br>
<div class="container white client_create z-depth-2 " style="padding:20px;">
	<h2>Ajouter un Quizz</h2>

	<?php echo validation_errors(); ?>


	<form action="<?php echo base_url() . "index.php/test/Quizz_Create"; ?>" method="post">

		<div class="row">
			<?php echo form_open('test/Quizz_Create', 'class="col s12"'); ?>

			<div class="input-field col s12">
				<label> </label>
				<input type="text" name="Nom" placeholder="Nom" size="32"/>
			</div>

		</div>

		<div class="row">
			<div id="listeQuestion" class=" col s5 collection with-header">

				<?php foreach ($listeQuestion as $question): ?>
					<p id="question<?php echo $question->idQuestion; ?>">
						<label>
							<input type="checkbox" name="question<?php echo $question->idQuestion; ?>"
								   value="<?php echo $question->idQuestion; ?>" class="checkbox-selection"/>
							<span><?php echo $question->Intitule; ?></span>
						</label>
					</p>
				<?php endforeach; ?>

			</div>
			<div id="listeChoix" class="col s5 collection with-header">

			</div>


			<div class="col s2">
				<button class="btn waves-effect waves-light blue" type="submit" value="Envoyer">Envoyer
				</button>
			</div>


		</div>
	</form>
</br>
</br>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>

	<script>
		$(document).ready(
				function () {

					$('.checkbox-selection').on('click', function () {
						if ($(this).prop("checked")) {
							$('#listeChoix').append($(this).parent().parent());
						} else {
							$('#listeQuestion').append($(this).parent().parent());
						}
					});

				}
		);
	</script>
</body>


<style>
	.area {
		margin: 10px;
		width: 150px;
		height: 150px;
		border: 4px dashed #2196f3;
		background-color: #e3f2fd;
		filter: alpha(opacity=50);
		-khtml-opacity: 0.5;
		-moz-opacity: 0.5;
		opacity: 0.5;
		text-align: center;
		border-radius: 20px;
	}

	.area:hover,
	.area.dragging,
	.area.uploading {
		filter: alpha(opacity=100);
		-khtml-opacity: 1;
		-moz-opacity: 1;
		opacity: 1;
	}

	.area input {
		width: 100%;
		height: 100%;
		border: none;
		cursor: pointer;
	}

	.area input:focus {
		outline: none;
	}

	}
</style>
<?php include('z_include_footer.php'); ?>
</html>
