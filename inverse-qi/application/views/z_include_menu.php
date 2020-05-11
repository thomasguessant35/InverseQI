<nav>
    <div class="nav-wrapper blue darken-1">
        <a href="/#" class="brand-logo center">Invers QI</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="<?php echo base_url('inverseQI/inverse-qi/./index.php/welcome'); ?>">Accueil</a></li>
        </ul>
		<ul id="nav-mobile" class="left hide-on-med-and-down">
			<li><a href="<?php echo base_url('inverseQI/inverse-qi/./index.php/Questions/listesQuestions'); ?>">Questions</a>
			</li>
		</ul>
        <?php if(!isAuthenticated()) :?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url('inverseQI/inverse-qi/./index.php/welcome/adminConnexion'); ?>">Connexion</a></li>
            </ul>
        <?php endif;?>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php if(isAuthenticated()) :?>
            <li><a href="/index.php/user/disconnect">Déconnexion</a></li>
        <?php endif;?>

    </div>
</nav>
