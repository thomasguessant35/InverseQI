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
</br>
</br>
  	<div class="container login_page">

        <div class="white login_box z-depth-4" style="padding:20px;">
            <h5 class="center">Connexion au test</h5>
            
            <?php echo validation_errors(); ?>

            <?php echo form_open('test'); ?>
                
                <h5>Code test</h5>
                <input type="text" name="codeTest" value="" size="50" />
                             
                <div style="margin:20px;">
                    <button class="btn waves-effect waves-light right blue" type="submit">Se connecter
                        <i class="material-icons right">send</i>
                    </button>
                </div>
                </br>
                </br>
            </form>
        </div>

    </div>

</body>
</html>
