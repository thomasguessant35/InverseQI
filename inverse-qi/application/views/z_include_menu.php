<nav>
    <div class="nav-wrapper blue darken-1">
        <a href="/" class="brand-logo center">Invers QI</a>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="/">Accueil</a></li>
        <?php if(isAuthenticated()) :?>
            <li><a href="/index.php/question">Questions</a></li>
        <?php endif;?>
        </ul>

        <?php if(!isAuthenticated()) :?>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="/index.php/welcome/adminConnexion">Connexion</a></li>
            </ul>
        <?php endif;?>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <?php if(isAuthenticated()) :?>
            <li><a href="/index.php/welcome/disconnect">Déconnexion</a></li>
        <?php endif;?>
        
    </div>
</nav>
