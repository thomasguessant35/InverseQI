<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('z_include_head.php'); ?>
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
