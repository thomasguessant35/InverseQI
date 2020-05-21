<nav class="col s12 m12 l12">
	<div class="nav-wrapper blue darken-1 menu">
		<a href="/" class="brand-logo center">Invers QI</a>
		<ul id="nav-mobile" class="left hide-on-med-and-down">
			<li><a href="/index.php/test">Accueil</a></li>
			<?php if ($this->session->userdata('Loggin')) :?>
				<li><a href="/index.php/question">Questions</a></li>
				<li><a href="/index.php/test/listQuizz">Quizz</a></li>
			<?php endif;?>
		</ul>

		<?php if (!$this->session->userdata('Loggin')) :?>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="/index.php/welcome/adminConnexion">Connexion</a></li>
			</ul>
		<?php endif;?>
		<ul id="nav-mobile" class="right hide-on-med-and-down">
			<?php if ($this->session->userdata('Loggin')) :?>
				<li><a href="/index.php/welcome/disconnect">Déconnexion</a></li>
			<?php endif; ?>

	</div>
</nav>
