<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link type="text/css" href="<?php echo ASSETS;?>css/style.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <title>Mon blog de Voyage</title>
    </head>

<body>

    <header >
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                            <ul class="nav navbar-nav">
                            <li> <img src="<?php echo ASSETS;?>images/horse-logo2a.jpg"> </li>
                            <li> <p>Billet simple pour l'Alaska </p></li>
                            <li class="active"> <a class="" href="<?php echo HOST;?>home">Accueil</a> </li>
                            <li> <a class="" href="<?php echo HOST;?>posts">Mes&nbsp;Articles</a> </li>
                            <?php if(!$userSession->isLogged()):?>
                            <li> <a class="" href="<?php echo HOST;?>loginForm">Connexion</a> </li>
                            <li> <a class="" href="<?php echo HOST;?>registerForm">Inscription</a> </li>
                            <?php else :?>
                                <?php if($userSession->hasRole('admin')):?>
                                <li> <a class="" href="<?php echo HOST;?>new">Nouveaux</a> </li>
                                <?php endif;?>
                            <li> <a class="" href="<?php echo HOST;?>logout">Déconnexion</a> </li>
                            <?php endif;?>
                        </ul>
                        <form class="navbar-form navbar-right inline-form">
                          <div class="form-group">
                            <input type="search" class="input-sm form-control" placeholder="Recherche">
                            <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
                          </div>
                        </form>
                </div>
            </nav>
    </header>
    <section  id="Content">

    <!-- Insert contentPage -->
    <?php echo $contentPage;?>

    </section>

    <footer id ="footer">
        <div>Copyright © 2019 Erwan Pasche</div>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </footer>
</body>
    
</html>
