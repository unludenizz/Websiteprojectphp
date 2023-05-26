<?php

    session_start();
    if(isset($_SESSION["kullanici_adi"])){
        
    }
    
    else{
        header("location:../giris.php");;
    }
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>FAQ</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">

    <!-- BASE CSS -->
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/menu.css" rel="stylesheet">
    <link href="../../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    
    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->

    <div class="layer"></div>
    <!-- Menu mask -->

    <!-- Header ================================================== -->
     <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col--md-4 col-sm-3 col-xs-4">
                    <div id="logo_home">
                        <h1><a href="index.html" title="Gölhisar Sektör">My Gölhisar Company</a></h1>
                    </div>
                </div>
                <nav class="col--md-8 col-sm-9 col-xs-8">
                    <ul id="primary_nav">
                        <li id="wishlist"><a href="profile.php#sektörler">Companys</a>
                                </li>
                        <li id="login"><a href="cikis.php">Log Out</a>
                        </li>
                        <li id="buy"><a href="sektorekle.php">Add Your Company</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="faq" selected>English</option>
                            <option value="../../giris/faq">Turkish</option>
                            <option value="../../deu/giris/faq">German</option>
                        </select>
                        </div></li>
                    </ul>
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobil</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="../../img/logo_2.png" alt="img" data-retina="true" width="170" height="30">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <li><a href="profile.php">Home</a>
                                </li>
                                <li><a href="faq.php">FAQ</a>
                                </li>
                                <li><a href="contacts.php">Contact</a>
                                </li>
                                <li><a href="sektorekle.php">Add Your Company</a>
                                </li>
                                <li id="wishlist"><a href="profile.php#sektörler">Companys</a>
                                </li>
                        </ul>
                    </div>
                    <!-- End main-menu -->
                </nav>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </header>
    <!-- End Header =============================================== -->

    <!-- SubHeader =============================================== -->
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="../../img/sub_header_florence_2.jpg" data-natural-width="1400" data-natural-height="420">
        <!-- End sub_content -->
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="profile.php">Home</a>
                </li>
                <li><a href="faq.php">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-9">
                <h3 class="nomargin_top" data-parent="#firma">Company Related Questions</h3>

                <div class="panel-group" id="transport">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse"
                            data-parent="#firma" href="#collapseOne">Why should you add your company?<i class="indicator icon_plus_alt2  pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                If you add your company to our website, it will be displayed to customers who visit our site. This can open up new opportunities for your business and is a great chance for you.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#transport" href="#collapseTwo">Why should you choose us?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                You should choose us to help your visitors to Gölhisar find your location more easily and showcase your business to them before they arrive, making it easier for them to explore your industry while in Gölhisar.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#transport" href="#collapseThree">How can I add my company?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                You can add your company by clicking on the 'Add Sector' button visible in the menu on our website.
                            </div>
                        </div>
                    </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#transport" href="#collapseFour">Can you keep my information confidential when I add my company?<i class="indicator icon_plus_alt2  pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                Your information is safe with us, and we take great care to ensure your confidentiality and security. Protecting your privacy is our top priority.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End panel-group -->

                <h3 data-parent="#kayıt">Register</h3>
                <div class="panel-group" id="works">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#works" href="#collapseOne_works">How can I register?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseOne_works" class="panel-collapse collapse">
                            <div class="panel-body">
                                You can register and log in by clicking on the 'Log In' button visible in the menu on our website.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#works" href="#collapseTwo_works">Can I add a company without registering/logging in?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseTwo_works" class="panel-collapse collapse">
                            <div class="panel-body">
                                Unfortunately, no. To add a company to our website, you need to register and log in to your account first. This is necessary to ensure the security and accuracy of the information being added, as well as to provide you with the ability to edit or update your company's information as needed.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End panel-group -->

                <h3 data-parent="#genel">General</h3>

                <div class="panel-group" id="doc">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#doc" href="#collapseOne_doc">Do you have social media accounts?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseOne_doc" class="panel-collapse collapse">
                            <div class="panel-body">
                                It will be available for your service as soon as possible.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#doc" href="#collapseTwo_doc">Why does your website support three languages?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseTwo_doc" class="panel-collapse collapse">
                            <div class="panel-body">
                                That's a great idea. Supporting three languages on your website can help you assist tourists who come from other countries, and it also allows a wider range of people to benefit from your website and get to know Gölhisar better. It's important to make your website accessible to as many people as possible and promote your town to the world.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End col-md-9 -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->

    <!-- Footer ================================================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3>About Us</h3>
                    <p>We are a team formed so that our visitors to Gölhisar can quickly access accurate and valid information about Gölhisar.</p>
                    <p><img src="../../img/logo_2.png" alt="img" class="hidden-xs" width="170" height="30" data-retina="true">
                    </p>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h3>Quick Link</h3>
                    <ul>
                        <li><a href="faq.php">FAQ</a>
                        </li>
                        <li><a href="contacts.php">Contact</a>
                        </li>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-2 col-sm-4">
                    <h3>The language setting:</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="language" onchange="onSelectLanguagePHP(this)">
                            <option value="faq" selected>English</option>
                            <option value="../../giris/faq">Turkish</option>
                            <option value="../../deu/giris/faq">German</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- End row -->
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    © My Gölhisar 2023 - All Rights Reserved.
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

    <!-- COMMON SCRIPTS -->
    <script src="../../js/jquery-2.2.4.min.js"></script>
    <script src="../../js/common_scripts_min.js"></script>
    <script src="../../assets/validate.js"></script>
    <script src="../../js/functions.js"></script>
    <script src="../../js/infobox.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="../../js/theia-sticky-sidebar.min.js"></script>
    <script>
        'use strict';
        jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
        });
        $('#faq_box a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top - 120
            }, 900, 'swing', function () {
                window.location.hash = target;
            });
        });
    </script>
</body>

</html>