<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link type="text/css" href="<?php echo ASSETS;?>css/style.css" rel="stylesheet">

        
        <title>Mon blog de Voyage</title>
    </head>

<body>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="nav-link link" href="<?php echo HOST;?>home"><span>Blog de Jean Rochefort</span></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link " href="<?php echo HOST;?>home"><span class="fa fa-home"></span> Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo HOST;?>posts"><span class="fa fa-bookmark"></span> Mes&nbsp;Articles</a>
                                </li>
                                <?php if($userSession->hasRole('admin')):?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo HOST;?>new"><span class="fa fa-print"></span> Nouveaux</a>
                                </li>
                                <?php endif;?>
                                <?php if(!$userSession->isLogged()):?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo HOST;?>loginForm"><span class="fa fa-sign-in"></span> Connexion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo HOST;?>registerForm"><span class="fa fa-user"></span> Inscription</a>
                                </li>
                                <?php else :?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo HOST;?>logout"><span class="fa fa-sign-out"></span> Déconnexion</a>
                                </li>
                                <?php endif;?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area bg-img background-overlay" style="background-color: black; height: 100px;" >
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->



    <section  id="Content">

    <!-- Insert contentPage -->
    <?php echo $contentPage;?>

    </section>

   <footer>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10 align-self-center">
                        <div style="text-align: center;">
                            <p>Copyright © <script>document.write(new Date().getFullYear());</script> Erwan Pasche</p>
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    
                </div>
            </div>
        </div>

        <!-- jQuery (Necessary for All JavaScript Plugins) -->
        <script src="<?php echo ASSETS;?>js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="<?php echo ASSETS;?>js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="<?php echo ASSETS;?>js/bootstrap.min.js"></script>
        <!-- Plugins js -->
        <script src="<?php echo ASSETS;?>js/plugins.js"></script>
        <!-- Active js -->
        <script src="<?php echo ASSETS;?>js/active.js"></script>
        
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({selector:'textarea'});</script>
    </footer>
</body>
    
</html>
