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
  
  <h3 class="center">Résultats</h3>

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
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>