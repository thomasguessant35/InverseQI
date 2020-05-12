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
<div class="container white salarie_page z-depth-2" style="padding:20px;">
			<h1>Gestion des utilisateurs</h1>
		
			<p>Liste des utilisateurs</p>
			<a class="waves-effect waves-light btn right blue" href="<?php //echo base_url() . "user/create/";?>"><i class="material-icons right">assignment_ind</i>Ajouter un utilisateur</a>
			<div class="row">			
				<table class="bordered highlight center">
					<thead>
                        <th>Id</th>
                        <th>Prenom</th>
                        <th>Nom</th>
						<th>Mail</th>
					</thead>
					<tbody>
						<?php foreach($listeUser as $user):?>
						<tr>
							<td><?php echo $user->idUsers; ?></td>
                            <td><?php echo $user->Prenom; ?></td>
                            <td><?php echo $user->Nom; ?></td>
                            <td><?php echo $user->Mail; ?></td>
							<!--Les actions vont ici -->
							<td><a class="btn waves-effect waves-light blue" href="<?php /*echo base_url() . "user/edit/" . $user->id;*/?>"><i class="material-icons">create</i></a>
							<a class="btn waves-effect waves-light red modal-trigger" href="<?php /*echo base_url() . "user/delete/" . $user->id;*/?>"><i class="material-icons">delete</i></a></td>
							
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
			<a class="waves-effect waves-light btn right blue" href="<?php //echo base_url() . "user/create/";?>"><i class="material-icons right">assignment_ind</i>Ajouter un utilisateur</a>
            </br>
            </br>
        </div>
		<!-- Modal Structure -->
	    <div id="modal" class="modal">
	    	<div class="modal-content">
	      		<h4>Confirmation</h4>
	      		<p>Etes vous sûr de vouloir supprimer cet utilisateur ?</p>
	    	</div>
	    	<div class="modal-footer">
	    		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Annuler</a>
	      		<a id="modalButton" href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat">Supprimer</a>
	    	</div>
	  	</div>
</body>
</html>
