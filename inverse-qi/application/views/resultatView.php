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
        <div class="row">
        <?php $compt = 1?>
        <?php foreach($questions as $question):?>
            <p>Question <?php echo $compt?> : </p>
            <?php foreach($question as $q):?>
                <?php for($i=0;$i<=7;$i++):?>
                    <div class="col s4 center"><img style="border:1px ridge black;" src="<?php echo base_url('/Image/'.$q->rep_image.'/canvas'.$i.'.png'); ?>" alt="">
                    </div>
                <?php endfor; ?>
                <div class="col s4 center"><img style="border:1px ridge black;" src="<?php echo base_url('/Image/'.$q->rep_image.'/canvas14.png'); ?>" alt=""></div>
            <?php endforeach; ?>
            <?php $compt++?>
        <?php endforeach; ?>
        </div>
    </div>
</br>
</br>
</body>
<?php include('z_include_footer.php'); ?>
</html>
