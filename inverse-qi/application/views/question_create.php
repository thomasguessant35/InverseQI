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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src='<?= base_url() ?>resources/dropzone.js' type='text/javascript'></script>
</head>
<body class="blue lighten-5">
        <?php include('z_include_menu.php'); ?>
        </br>
        </br>
    	<div class="container white client_create z-depth-2 " style="padding:20px;">
			<h2>Ajouter une question</h2>
			
			<?php echo validation_errors(); ?>
				<div class="row">
					<?php echo form_open('question/create', 'class="col s12"'); ?>
				
					<div class="input-field col s12">
						<label>Intitulé</label>
						<input type="text" name="intitule" value="<?php echo set_value('intitule'); ?>" size="32" />
                    </div>
                    <div class="row">
                        <div class="area col s3">
                            <label for="image1">Image 1</label>
                            <input type="file" id="image1" name="image1" value="<?php echo set_value('image1'); ?>"/>
                        </div>
                        <div class="area col s3">
                            <label>Image 2</label>
                            <input type="file" id="image2" value="<?php echo set_value('image2'); ?>"/>
                        </div>
                        <div class="area col s3">
                            <label>Image 3</label>
                            <input type="file" id="image3" value="<?php echo set_value('image3'); ?>"/>
                        </div>
                    <div>
                    <div class="row">
                        <div class="area col s3">
                            <label>Image 4</label>
                            <input type="file" id="image4" value="<?php echo set_value('image4'); ?>"/>
                        </div>
                        <div class="area col s3">
                            <label>Image 5</label>
                            <input type="file" id="image5" value="<?php echo set_value('image5'); ?>"/>
                        </div>
                        <div class="area col s3">
                            <label>Image 6</label>
                            <input type="file" id="image6" value="<?php echo set_value('image6'); ?>"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="area col s3">
                            <label>Image 7</label>
                            <input type="file" id="image7" value="<?php echo set_value('image7'); ?>"/>
                        </div>
                        <div class="area col s3">
                            <label>Image 8</label>
                            <input type="file" id="image8" value="<?php echo set_value('image8'); ?>"/>
                        </div>
                        <div class="area col s3">
                            <label>Image 9</label>
                            <input type="file" id="image9" value="<?php echo set_value('image9'); ?>"/>
                        </div>
                    </div>
					<div>
						<button class="btn waves-effect waves-light right blue" type="submit">Ajouter<i class="material-icons right">send</i></button>
                    </div>
                    </br>
                    </br>
				</form>
			</div>	
        </div>
 
        <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js' type='text/javascript'></script>
    </body>
    <style>
    .area {
        margin: 10px;
        width: 150px;
        height: 150px;
        border: 4px dashed #2196f3;
        background-color: #e3f2fd;
        filter: alpha(opacity=50);
        -khtml-opacity: 0.5;
        -moz-opacity: 0.5;
        opacity: 0.5;
        text-align: center;
        border-radius: 20px;
    }

    .area:hover,
    .area.dragging,
    .area.uploading {
        filter: alpha(opacity=100);
        -khtml-opacity: 1;
        -moz-opacity: 1;
        opacity: 1;
    }

    .area input {
        width: 100%;
        height: 100%;
        border: none;
        cursor: pointer;
    }

    .area input:focus {
        outline: none;
    }

}
    </style>
    <script>
        var input = document.querySelector('image1');
        input.addEventListener('change', updateImageDisplay);
        function updateImageDisplay() {
            var curFiles = input.files;
            var image = document.createElement('img');
            image.src = window.URL.createObjectURL(curFiles[i]);

            document.querySelector('image1').appendChild(image);
        }
    </script>
</html>