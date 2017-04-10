<?php
    session_start();

    if (!isset($_SESSION['nom'])) {
        ?>
            <script type="text/javascript">
                document.location.replace('/');         
            </script>
        <?php
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Livre d'or</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="magnific-popup/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">

    <!-- Theme CSS -->
    <link href="css/creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    
        
        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    
                    <a class="navbar-brand-p navbar-brand page-scroll" href="#page-top">
                        <h1>It-akademy</h1>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a style="cursor: pointer;" href="php/disconnect.php">Deconnexion</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header >


            

            <div id="header-carousel" class="carousel slide" data-ride="header-carousel-ride">
              <div class="carousel-inner pagepop">
                <div class="item" style="background-image: url('img/slide1.jpg');">
                    <div class="mask-slide"></div>
                    <div class="header-content">
                        <div class="header-content-inner col-lg-4 col-lg-offset-1">
                            <h1 id="homeHeading">LIVRE D'OR</h1>
                            <hr>
                            
                        </div>
                    </div>
                </div>
              
               
              </div>
              <!-- Controls -->
        
            </div>
            
            
        </header>
        
        <section class="bg-primary" id="about" style="height: 300px; ">
            <div class="svg-top-container">
                <svg class="tt" xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 L100 100 L100 2 L0 100 Z" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container" style="padding-top: 50px;">
                <?php
    

                    try
                    {
                        $bdd = new PDO('mysql:host=localhost;dbname=vagrant;charset=utf8', 'root', 'root');
                    }
                    catch (Exception $e)
                    {
                        die('Erreur : ' . $e->getMessage());
                    }

                    $reponse = $bdd->query("SELECT * FROM message");

                    while ($donnees = $reponse->fetch())
                    {   

                        ?>
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-lg-2 col-md-2 text-center">
                                   <h1 style="color: grey;"><?php echo $donnees['name_author']; ?></h1>
                                </div>
                                <div class="col-lg-10 col-md-10 text-center">
                                    <h1 style="color: grey;"><?php echo $donnees['message']; ?></h1>
                                </div>
                                <hr>
                            </div>

                        <?php

                            }
                                                
                            $reponse->closeCursor();

                        ?>
            </div>
            
        </section>


    

       

    
    <!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="scrollreveal/scrollreveal.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.transit.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
