<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link type="text/css" href="<?php echo ASSETS;?>css/style.css" rel="stylesheet">
        <title>Mon blog de Voyage</title>
    </head>

<body>
    <header id="navbar">
        <div id="Logo">
            <img src="<?php echo ASSETS;?>images/horse-logo2a.jpg">
            <span>Billet simple pour l'Alaska</span>
        </div>
            <div id="Menu">
                <nav class="Menu">
                    <a class="LienMenu" href="<?php echo HOST;?>home">Accueil</a>
                    <span  class="SepMenu">|</span>
                    <a class="LienMenu" href="<?php echo HOST;?>posts">Mes&nbsp;Articles</a>
                    <span class="SepMenu">|</span>
                    <?php if(!$userSession->isLogged()):?>
                        <a class="LienMenu" href="<?php echo HOST;?>loginForm">Connexion</a>
                        <span class="SepMenu">|</span>
                        <a class="LienMenu" href="<?php echo HOST;?>registerForm">Inscription</a>
                    <?php else :?>
                        <?php if($userSession->hasRole('admin')):?>
                            <a class="LienMenu" href="<?php echo HOST;?>create">Nouveaux</a>
                            <span class="SepMenu">|</span>
                        <?php endif;?>
                        <a class="LienMenu" href="<?php echo HOST;?>logout">Déconnexion</a>
                    <?php endif;?>
                </nav>
            </div>
    </header>
    <section  id="Content">

    <!-- Insert contentPage -->
    <?php echo $contentPage;?>

    </section>

    <footer id ="footer">
        <div>Copyright © 2019 Erwan Pasche</div>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </footer>
</body>
    
</html>
