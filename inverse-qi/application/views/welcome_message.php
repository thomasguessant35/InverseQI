<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
	<div class="container">

		<h5 class="center"><?php echo "Question ".$compteur." sur ".$countQuestion[0]->Nbre; ?> </h5><br>


		<div class="groupeImg" >

				<?php for($i=0;$i<=8;$i++):?>
					<div class="Img">
						<img style="border:1px ridge black;background:white;" src="<?php echo base_url('/Image/'.$dossierQuestion.'/canvas'.$i.'.png'); ?>" alt="">
					</div>
					<?php if (($i+1)%3==0): ?>
						</br>
					<?php endif;?>
				<?php endfor; ?>

		</div>
		<div class="intitule">
			<?php foreach($question as $q):?>
				<h5 class="center"><?php echo $q->Intitule;?> </h5><br>
			<?php endforeach; ?>
		</div>

		<?php echo form_open('test/testform/'.$idTest.'/'.$compteur, 'class="col s12"'); ?>
			<div class="groupeImg">
				<?php  $i=0; ?>
				<?php foreach($reponses as $reponse):?>
					<?php $value = "false"; $i++;?>
					<?php if($reponse == 14):?>
						<?php $value = "true"; ?>
					<?php endif;?>

					<div class="Img" >
						<img src="<?php echo base_url('/Image/'.$dossierQuestion.'/canvas'.$reponse.'.png'); ?>" id="effetHover" onclick="pageSvt(<?php echo $reponse ?>)" alt="" style="border:1px ridge black;background:white; ">
						<br>
						<label style="display: none">
							<input id="<?php echo $reponse ?>" value="<?php echo $value ?>" name="answer" type="radio" checked />

							<span></span>
						</label>
					</div>
					<?php if (($i)%3==0): ?>
						<br>
					<?php endif;?>
				<?php endforeach; ?>


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

<style type="text/css">

	#effetHover:hover {

		cursor: pointer;
		box-shadow: 3px 3px 1px #1e88e5;
		z-index: 2;
		-webkit-transition: all 200ms ease-in;
		-webkit-transform: scale(1.1);
		-ms-transition: all 200ms ease-in;
		-ms-transform: scale(1.1);
		-moz-transition: all 200ms ease-in;
		-moz-transform: scale(1.1);
		transition: all 200ms ease-in;
		transform: scale(1.1);
	}
	.groupeImg {
		text-align: center;
		//transform: scale(0.60);
		position: relative;
		//top: -120px;
	}
	#imgR {

		transform: scale(0.60);
		position: relative;
		//top: -325px;
	}
	.intitule {
		position: relative;
		//top: -240px;
	}
	.Img {
		display: inline-flex;
		flex-direction: row;
		padding: 2px;
		height: 120px;
		/* width: 100px; */
		flex-wrap: nowrap;
	}
</style>
