<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
</br>
  
  <h3 class="center">Félicitaions !</h3>

  <h5 class="center">Votre QI est de <?php echo $score ?></h5>

  <div class="col s3 center"><img sizes="(max-width: 300px) (max-width: 200px)" width="400" src="<?php echo base_url('/Image/'.$imageFin); ?>"alt=""><br>
  <h5 class="center"><?php echo $messageFin ?></h5>

  <a href=<?php echo "/index.php/test/resultatQuizz/".$idTest?> class="waves-effect waves-light btn blue">Résultat</a>
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>
