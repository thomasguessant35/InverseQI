<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
	<?php include('z_include_head.php'); ?>
</head>
<?php include('z_include_menu.php'); ?>


<body onload="initialize()" class="blue lighten-5 center">
</br>
</br>

	<div class="row">

		<div class="row col s3" id="buttoradio">

			<p class="col s12"  style="padding:5px;">Choix du canvas</p>

			<div class="col s12"  style="padding:5px;">
				<label>
					<input class="with-gap" id="canvas1_1" name="group3" type="radio" checked/>
					<span>Canvas 1</span>
				</label>

				<label>
					<input class="with-gap" id="canvas2_2" name="group3" type="radio"/>
					<span>Canvas 2</span>
				</label>

				<label>
					<input class="with-gap" id="canvas3_3" name="group3" type="radio"/>
					<span>Canvas 3</span>
				</label>
			</div>
			<div class="col s12" style="padding:5px;">
				<label>
					<input class="with-gap" id="canvas4_4" name="group3" type="radio"/>
					<span>Canvas 4</span>
				</label>

				<label>
					<input class="with-gap" id="canvas5_5" name="group3" type="radio"/>
					<span>Canvas 5</span>
				</label>

				<label>
					<input class="with-gap" id="canvas6_6" name="group3" type="radio"/>
					<span>Canvas 6</span>
				</label>
			</div>
			<div class="col s12" style="padding:5px;">
				<label>
					<input class="with-gap" id="canvas7_7" name="group3" type="radio"/>
					<span>Canvas 7</span>
				</label>

				<label>
					<input class="with-gap" id="canvas8_8" name="group3" type="radio"/>
					<span>Canvas 8</span>
				</label>
			</div>

		</div>

        <div class="row col s5">

            <canvas class="white" id="canvas0" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            <canvas class="white" id="canvas1" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            <canvas class="white" id="canvas2" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            </br>
            <canvas class="white" id="canvas3" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            <canvas class="white" id="canvas4" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            <canvas class="white" id="canvas5" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            </br>
            <canvas class="white" id="canvas6" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            <canvas class="white" id="canvas7" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
            <canvas class="white" id="canvasq" width="150" height="150">
                <p>Désolé, votre navigateur ne supporte pas Canvas. Mettez-vous à jour</p>
            </canvas>
        </div>

		<div class="row col s4">

			<div class="col s12" style="padding:20px;">
				<a id="ajouterC" class="waves-effect waves-light btn blue">Carré</a>
				<a id="ajouterT" class="waves-effect waves-light btn blue">Triangle</a>
				<a id="ajouterCI" class="waves-effect waves-light btn blue">Cercle</a>
			</div>

			<div class="col s12" style="padding:20px;">
				<a id="Bluecolor" class="waves-effect waves-light btn blue">Couleur bleu</a>
				<a id="Redcolor" class="waves-effect waves-light btn red">Couleur rouge</a>
			</div>

			<div class="col s12" style="padding:20px;">
				<a id="Carrevide" class="waves-effect waves-light btn blue">vide</a>
				<a id="Carrerempli" class="waves-effect waves-light btn blue">plein</a>
			</div>

			<div class="col s12">
				<div style="text-align:center;padding:20px;">
					<div class="row">
						<span>Move panel</span>
						<div class="col s12" style="padding:5px;">
						<a id="up" class="waves-effect waves-light btn blue">Haut</a>
						</div>
						<div class="col s12" style="padding:5px;">
						<a id="left" class="waves-effect waves-light btn blue"> Gauche</a>
						<a id="right" class="waves-effect waves-light btn blue">Droite</a>
						</div>
						<div class="col s12" style="padding:5px;">
						<a id="down" class="waves-effect waves-light btn blue">Bas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="row center">
		<a id="tester" class="waves-effect waves-light btn blue">Tester</a>
	</div>
</br>
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>


<script src="<?php echo base_url(); ?>vendor/js/testeInverse.js"></script>
