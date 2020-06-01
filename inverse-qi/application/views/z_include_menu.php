<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script>
	$(document).ready(function () {
		$('.sidenav').sidenav();
	});
</script>
<nav class="blue">
	<div class="nav-wrapper blue darken-1">
		<a href="/" class="brand-logo center">Inverse QI</a>

		<a href="#" class="sidenav-trigger" data-target="mobile-nav">
			<i class="material-icons">menu</i>
		</a>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<li><a href="/index.php/test">Accueil</a></li>
			<?php if ($this->session->userdata('Loggin')) : ?>
				<li><a href="/index.php/user">Utilisateurs</a></li>
				<li><a href="/index.php/question/listeQuestions">Questions</a></li>
				<li><a href="/index.php/test/listQuizz">Quizz</a></li>
				<li><a href="/index.php/user">Utilisateurs</a></li>
			<?php endif; ?>

			<?php if (!$this->session->userdata('Loggin')) : ?>
				<li><a href="/index.php/welcome/adminConnexion">Connexion</a></li>
			<?php endif; ?>
			<?php if ($this->session->userdata('Loggin')) : ?>
				<li><a href="/index.php/welcome/disconnect">Déconnexion</a></li>
			<?php endif; ?>
		</ul>
	</div>
</nav>

<ul class="sidenav blue" id="mobile-nav">
	<li><a href="/index.php/test">Accueil</a></li>
	<?php if ($this->session->userdata('Loggin')) : ?>
		<li><a href="/index.php/question">Questions</a></li>
		<li><a href="/index.php/test/listQuizz">Quizz</a></li>
		<li><a href="/index.php/user">Utilisateurs</a></li>
	<?php endif; ?>

	<?php if (!$this->session->userdata('Loggin')) : ?>
		<li><a href="/index.php/welcome/adminConnexion">Connexion</a></li>
	<?php endif; ?>
	<?php if ($this->session->userdata('Loggin')) : ?>
		<li><a href="/index.php/welcome/disconnect">Déconnexion</a></li>
	<?php endif; ?>
</ul>
