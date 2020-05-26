<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
</br>
<a class="waves-effect waves-light btn center blue" href="<?php echo base_url() . "index.php/question/ajouter/";?>"><i class="material-icons right">assignment_ind</i>Ajouter une question</a>
</br>
</br>
<div class="container">
	<div class="row">
		<?php foreach ($listeQuestion as $question): ?>
			<a href="#">
				<div class="card col s4 hoverable" style="width: 222px; margin: 4px; height: 353px !important;">
				</br>
					<div class="card-image waves-effect waves-block waves-light">
						<?php for ($i=0;$i<8;$i++): ?>
							<img class="col s12" style="padding:10px;border:1px ridge black;max-width: 30%;height: auto;" src="<?php echo base_url('/Image/'.$question->rep_image.'/canvas'.$i.'.png'); ?>">
						<?php endfor; ?>
						<img style="padding:10px;border:1px ridge black;max-width: 30%;height: auto;" src="<?php echo base_url('/Image/'.$question->rep_image.'/canvas14.png'); ?>">
					</div>
					<div class="card-content">
						<p class="center"><?php echo $question->Intitule; ?></p>
						<p class="center"><?php echo $question->rep_image; ?></p>
						</br>
						<a class="btn waves-effect waves-light red modal-trigger center right"
						href="<?php echo "/index.php/questions/delete/".$question->idQuestion ;?>"><i class="material-icons">delete</i></a>
					</div>
				</div>
			</a>
		<?php endforeach; ?>
	</div>
</div>
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>
