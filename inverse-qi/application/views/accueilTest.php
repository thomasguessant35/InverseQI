<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('z_include_head.php'); ?>
</head>

<?php include('z_include_menu.php'); ?>

<body class="blue lighten-5">
</br>
</br>
</br>
  	<div class="container login_page"  style="margin-bottom: 7.2%;">

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
</br>
</br>
</br>
</br>
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>
