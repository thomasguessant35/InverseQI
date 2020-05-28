<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
<div class="container">

	<h5 class="center">Question : </h5><br>

	<div class="container" >
		
		<div class="row">
		<?php for($i=0;$i<=8;$i++):?>
			<div class="col s4 center"><img style="border:1px ridge black;background:white;" src="<?php echo base_url('/Image/'.$dossierQuestion.'/canvas'.$i.'.png'); ?>" alt="">
			</div>
		<?php endfor; ?>
		</div>
	</div>
	<?php foreach($question as $q):?>
		<h5 class="center"><?php echo $q->Intitule;?> </h5><br><br>
	<?php endforeach; ?>

	<?php echo form_open('test/testform/'.$idTest.'/'.$compteur, 'class="col s12"'); ?>
		<div class="container">
			<div class="row">
			<?php foreach($reponses as $reponse):?>
				<?php $value = "false"; ?>
				<?php if($reponse == 14):?>
					<?php $value = "true"; ?>
				<?php endif;?>

				<div class="col s4 center" >
					<img src="<?php echo base_url('/Image/'.$dossierQuestion.'/canvas'.$reponse.'.png'); ?>" onclick="pageSvt(<?php echo $reponse ?>)" alt="" style="border:1px ridge black;background:white;">
					<br>
					<label style="display: none">
						<input id="<?php echo $reponse ?>" value="<?php echo $value ?>" name="answer" type="radio" checked />

						<span></span>
					</label>
				</div>
			<?php endforeach; ?>
			</div>

			<div class="row center" style="display: none" >
				<button class="btn waves-effect blue" type="submit" name="action">Suivant
					<i class="material-icons right">send</i>
				</button>
			</div>
		</div>
	</form>
</div>
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>

<script>
	function pageSvt($rep) {

        document.getElementById($rep).checked = true;
        var x = document.getElementsByTagName("form");
        x[0].submit();

    }

</script>
