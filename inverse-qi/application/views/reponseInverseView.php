<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
</br>

<h3 class="center">Réponse :</h3>
</div>
</br>
<div class="row center">
	<div class="col s12">
		<canvas id="canvas" width="150" height="150" style="border: 1px ridge black;background:white;"></canvas>
		<?php $cA=0; ?>
		<?php $tA=0; ?>
		<?php $tB=50; ?>
		<?php $cB=0; ?>
		<?php $rA=25; ?>
		<?php $rB=25; ?>
		<?php for ($i=0; $i < 26; $i++): ?> 
			<?php if ($resultat[0][$i] == 1 && $i<9) {
				echo "<script>  var canvas = document.getElementById('canvas');
						var ctx = canvas.getContext('2d');ctx.fillRect (".$cA.", ".$cB.", 50, 50); </script>";
			}else if($resultat[0][$i] == 1 && $i>18){
				echo "<script>  var canvas = document.getElementById('canvas');
						var ctx = canvas.getContext('2d');
						ctx.beginPath();
						ctx.arc(".$rA.", ".$rB.", 25, 0, 2 * Math.PI,);
						ctx.fill();</script>";				
			}else if($resultat[0][$i] == 1){
				echo "<script>  var canvas = document.getElementById('canvas');
						var ctx = canvas.getContext('2d');
						ctx.beginPath();
						ctx.moveTo(".$cA.", ".$cB.");
						ctx.lineTo(".$cA.", ".($cB+50).");
						ctx.lineTo(".($cA+50).", ".($cB+50).");
						ctx.closePath();
						ctx.fill();
						</script>";
			}?>
			<?php $cA=$cA+50; ?>
			<?php $rA=$rA+50; ?>
			<?php if ($i==2 || $i==5 || $i==11 || $i==14): ?>
				<?php $cA=0; ?>
				<?php $cB=$cB+50; ?>
			<?php endif; ?>
			<?php if ($i==8 ): ?>
				<?php $cA=0; ?>
				<?php $cB=00; ?>
			<?php endif; ?>
			<?php if ( $i==20 || $i==23): ?>
				<?php $rA=25; ?>
				<?php $rB=$rB+50; ?>
			<?php endif; ?>
			<?php if ($i==17): ?>
				<?php $rA=25; ?>
			<?php endif; ?>
		<?php endfor; ?>
	</div>
</div>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>