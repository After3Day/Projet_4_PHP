<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"/>
        <link type="text/css" href="<?php echo ASSETS;?>css/style.css" rel="stylesheet">

        
        <title>Mon blog de Voyage</title>
    </head>

<body>

    <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="<?php echo HOST;?>home">Blog de Jean Rochefort</a>
                    </div>
                         <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                            
                            <li class=""> <a class="" href="<?php echo HOST;?>home"><span class="glyphicon glyphicon-home"></span> Accueil</a> </li>
                            <li> <a class="" href="<?php echo HOST;?>posts">Mes&nbsp;Articles</a> </li>
                            <?php if($userSession->hasRole('admin')):?>
                            <li> <a class="" href="<?php echo HOST;?>new">Nouveaux</a> </li>
                            <?php endif;?>
                            </ul>

                            <?php if(!$userSession->isLogged()):?>
                            <ul class="nav navbar-nav navbar-right">
                                <li> <a class="" href="<?php echo HOST;?>loginForm"><span class="glyphicon glyphicon-log-in"></span> Connexion</a> </li>
                                <li> <a class="" href="<?php echo HOST;?>registerForm"><span class="glyphicon glyphicon-user"></span> Inscription</a> </li>
                            </ul>
                            <?php else :?>
                            <ul class="nav navbar-nav navbar-right">
                                <li> <a class="" href="<?php echo HOST;?>logout"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a> </li>
                            </ul>
                            <?php endif;?>
                        </div>
                </div>
            </nav>
    </header>

    <section  id="Content">

    <!-- Insert contentPage -->
    <?php echo $contentPage;?>

    </section>

   <footer class="container-fluid text-center">
        
            <div>Copyright © 2019 Erwan Pasche</div>
        <script src="<?php echo ASSETS;?>js/javascript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </footer>
</body>
    
</html>
