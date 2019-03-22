<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link type="text/css" href="<?php echo ASSETS;?>css/style.css" rel="stylesheet">
        <title>Mon blog de Voyage</title>
    
    </head>


<body>
    <header>
        <div id="Logo">
            <img src="<?php echo ASSETS;?>images/horse-logo2a.jpg">
            <span>Billet simple pour l'Alaska</span>
        </div>
            <div id="Menu">
                <nav class="Menu">
                    <a href="<?php echo HOST;?>home">Accueil</a>
                    <span>|</span>
                    <a href="<?php echo HOST;?>posts">Mes Articles</a>
                    <span>|</span>
                    <a href="<?php echo HOST;?>login">Connexion</a>
                </nav>
            </div>
        
    </header>

    <!-- Insert contentPage -->
    <?php echo $contentPage;?>

    <footer>
        <div>Copyright © 2019 Erwan Pasche</div>
    </footer>
</body>

</html>
