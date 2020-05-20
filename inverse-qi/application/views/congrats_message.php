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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
