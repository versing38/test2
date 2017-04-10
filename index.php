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
    
        <header class="layer mask transparent blur" id="layer-connect">
            <div class="page-home" style="padding: 20px;">
                <input type="button" value="X" class="btn btn-primary btn-xl" style="float: right;" onclick="Closepopup('#layer-connect')" />
                <div class="col-md-12">
                    <h1> Connectez-vous</h1>
                    <form id="formulaireconnect" method="post" action="#">
                        <div class="col-md-10 col-md-offset-1" style="padding: 15px;">
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="service-box">
                                    <input type="text" style="width: 100%;" name="log" placeholder="Login">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="service-box">
                                    <input type="password" style="width: 100%;" name="pass" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="service-box">
                                    <input type="submit" style="width: 100%;" name="" value="Envoyer">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="postcon"></div>
                    <hr>
                </div>
            </div>
        </header>
    
        
    <div class="page">
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
                            <a class="page-scroll" href="#about">A propos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Formation</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#livredor">Livre d'or</a>
                        </li>
                        <li>
                            <a style="cursor: pointer;" onclick="popup('#layer-connect')">Connection</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header >



            <div class="layer mask transparent blur" id="layer-apropos">
                <div class="page-home" style="padding: 20px;">
                    <input type="button" value="X" class="btn btn-primary btn-xl" style="float: right;" onclick="Closepopup('#layer-apropos')" />
                    <div class="col-md-12">
                        <h1> Création fonction js d'une fenêtre popup</h1>
                        <hr>
                    </div>
                </div>
            </div>
            

            <div id="header-carousel" class="carousel slide" data-ride="header-carousel-ride">
              <div class="carousel-inner pagepop">
                <div class="item" style="background-image: url('img/slide1.jpg');">
                    <div class="mask-slide"></div>
                    <div class="header-content">
                        <div class="header-content-inner col-lg-4 col-lg-offset-1">
                            <h1 id="homeHeading">IT-akademy</h1>
                            <hr>
                            <p>Ecole de formation dans le secteur informatique</p>
                            
                            <input type="button" value="JavaScript" class="btn btn-primary btn-xl" onclick="popup('#layer-apropos')" />
                        </div>
                         
                        <div class="row icon_header" style="margin-left: -50px !important;">
                            <div class="col-lg-2  col-md-2 col-xs-2 text-center">
                                <div class="service-box">
                                    <i class="fa fa-4x fa-book text-primary animated bounceInDown "></i>
                                    <h3>Formations</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-2 text-center">
                                <div class="service-box">
                                    <i class="fa fa-4x fa-graduation-cap text-primary animated bounceInDown"></i>
                                    <h3>Centre</h3>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-xs-2 text-center">
                                <div class="service-box"   >
                                    <i class="fa fa-4x fa-user text-primary animated bounceInDown "></i>
                                    <h3>Equipe</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url('img/slide5.jpg');">
                    <div class="mask-slide"></div>
                  <div class="header-content" style="text-align: center;">
                        <div class="textforslide">
                            <h2>Des formateurs souvent cool mais pas toujours...</h2>
                            <h1>Une équipe serieuse</h1>

                            
                            <a  style="cursor: pointer;" class="btn btn-primary btn-xl page-scroll" >Toutes les formations</a>
                        </div>
                    </div>
                </div>
               
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#header-carousel" role="button" data-slide="prev">
                <i class="fa fa-chevron-left fa-3x"></i>
              </a>
              <a class="right carousel-control" href="#header-carousel" role="button" data-slide="next">
                <i class="fa fa-chevron-right fa-3x"></i>
              </a>
            </div>
            
            
        </header>
        
        <section class="bg-primary" id="about" style="height: 300px; ">
            <div class="svg-top-container">
                <svg class="tt" xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 L100 100 L100 2 L0 100 Z" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container" style="padding-top: 50px;">
                <div class="row">
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                            <h3>Mcdo</h3>
                            <p>juste en bas du centre</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-certificate text-primary sr-icons"></i>
                            <h3>Une salle</h3>
                            <p>sans clim...</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 text-center">
                        <div class="service-box">
                            <i class="fa fa-4x fa-users text-primary sr-icons"></i>
                            <h3>Des mac</h3>
                            <p>assez jolies</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <section class="no-padding" id="portfolio">
            <h2>Trouver le programme de formation qui vous correspond</h2>
            <hr/>
            <div class="container-fluid">
                <div class="row no-gutter popup-gallery">
                    <div class="col-lg-3 col-sm-6">
                        <a href="img/portrait1.jpg" class="portfolio-box">
                            <img src="img/portrait1.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category">
                                        Développement
                                    </div>
                                </div>
                            </div>
                            <div class="project-name">
                            Apprenez à développer
                        </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="img/portrait2.jpg" class="portfolio-box">
                            <img src="img/portrait2.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category">
                                        Gestion
                                    </div>   
                                </div>
                            </div>
                        </a>
                        <div class="project-name">
                            Devenez chef de projet
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="img/portrait3.jpg" class="portfolio-box">
                            <img src="img/portrait3.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Reseau  
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="project-name">
                            Osez le réseau
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="img/portrait4.jpg" class="portfolio-box">
                            <img src="img/portrait4.jpg" class="img-responsive" alt="">
                            <div class="portfolio-box-caption">
                                <div class="portfolio-box-caption-content">
                                    <div class="project-category text-faded">
                                        Secrétaire
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="project-name">
                            Apprenez a faire du café
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <aside id="livredor">
            <div class="layer mask transparent blur" id="layer-livre">
                <div class="page-home" style="padding: 20px;">
                    <input type="button" value="X" class="btn btn-primary btn-xl" style="float: right;" onclick="Closepopup('#layer-livre')" />
                
                    
                    <form id="formulairenewmessage" method="post" action="#">
                        <div class="col-md-10 col-md-offset-1" style="padding: 15px;">
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="service-box">
                                    <input type="text" style="width: 100%;" name="newauthor" placeholder="Votre nom">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="service-box">
                                    <input type="text" style="width: 100%;" name="newmessage" placeholder="Message">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 text-center">
                                <div class="service-box">
                                    <input type="submit" style="width: 100%;" name="" value="Envoyer">
                                </div>
                            </div>
                        </div>
                    </form>
                    <h1 id="post"></h1>
                </div>
            </div>
            
            
            
            <div class="container text-center pagelivre">
                <div class="call-to-action">
                    <h2>Livre d'or</h2>
                </div>
                <div class="col-md-12" style="text-align: center;">

                    <a  class="btn btn-primary btn-xl page-scroll" onclick="popup('#layer-livre')" style="cursor: pointer;">Contactez-nous !</a> 
                    
                </div>
            </div>
        </aside>

        <section id="services">
            <div class="layer mask transparent blur" id="layer-subcribe">
                <div class="page-home" style="padding: 20px;">
                    <input type="button" value="X" class="btn btn-primary btn-xl" style="float: right;" onclick="Closepopup('#layer-subcribe')" />
                
                    <div class="col-md-12" style="text-align: center;">

                        <h1 style="color: white;"> Inscrivez vous !</h1><br/><hr><br/>
                        
                    </div>
                    <form>
                        <div  class="col-md-8 col-md-offset-2">
                            <input type="text" style="width: 100%;" name="nom" placeholder="Nom">
                        </div>
                        <div  class="col-md-8 col-md-offset-2">
                            <input type="text" style="width: 100%;" name="nom" placeholder="Prénom">
                        </div>
                        <div  class="col-md-8 col-md-offset-2">
                            <input type="text" style="width: 100%;" name="nom" placeholder="Mail">
                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <input type="button" style="width: 100%; margin-top: 50px;" value="S'inscrire" class="btn btn-primary btn-xl"  onclick="Closepopup('#layer-subcribe')" />
                        </div>
                    </form>
                    
                </div>
            </div>
            <div id="header-carousels" class="carousel slide" data-ride="header-carousel-ride">
              <div class="carousel-inner">
                <div class="item" style="background-image: url('img/slide3.jpg');">
                    <div class="mask-slide"></div>
                    <div class="header-content" style="text-align: center; color: white;">
                        <div class="textforslide">
                            <h2 >Une école pour les pro !</h2>
                            <h1>Vous ne trouverez pas mieux</h1>    
                            <a  class="btn btn-primary btn-xl page-scroll" style="cursor: pointer;">Inscrivez-vous !</a> 
                        </div>
                    </div>
                </div>

              </div>
              
            </div>
            
        </section>

        

        

        <section id="contact" >
            <div class="svg-top-containers">
                <svg class="tt" xmlns="http://www.w3.org/2000/svg" width="0" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 L100 100 L100 2 L0 100 Z" stroke-width="0"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Suivez-nous et contactez-nous !</h2>
                        <hr class="primary">
                    </div>
                    
                    <div class="col-lg-1 col-lg-offset-4 text-center">
                        <a href="#"><i class="fa fa-facebook fa-3x sr-contact"></i></a>
                    </div>
                    <div class="col-lg-1 text-center">
                        <a href="https://www.linkedin.com/company/cdaf-formation" target="_blank"><i class="fa fa-linkedin fa-3x sr-contact"></i></a>
                    </div>
                    <div class="col-lg-1 text-center">
                        <a href="http://www.viadeo.com/profile/002292j07d2f1tnh" target="_blank"><i class="fa fa-viadeo fa-3x sr-contact"></i></a>
                    </div>
                    <div class="col-lg-1 text-center">
                        <a href="mailto:your-email@your-domain.com"><i class="fa fa-envelope-o fa-3x sr-contact"></i></a>
                    </div>

                    <div class="col-lg-6 col-lg-offset-3 text-center contact-phone">
                        <p><i class="fa fa-phone"></i> 00 00 00 00 00</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
        

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

    <script type="text/javascript">
        $("#formulairenewmessage").submit(function(){

            $.ajax({type:"POST", data: $(this).serialize(), url:"php/addmessage.php",
                success: function(data){
                    $("#post").html(data);
                },

                error: function(){
                    $("#post").html('Une erreur est survenue.');

                }

            });
            return false;

        });
        $("#formulaireconnect").submit(function(){

            $.ajax({type:"POST", data: $(this).serialize(), url:"php/connect.php",
                success: function(data){
                    $("#postcon").html(data);
                },

                error: function(){
                    $("#postcon").html('Une erreur est survenue.');

                }

            });
            return false;

        });
    </script>

</body>

</html>
