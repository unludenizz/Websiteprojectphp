<?php
    include("../../sayac.php");
    session_start();
    if(isset($_SESSION["kullanici_adi"])){
        
    }
    
    else{
        header("location:../giris.php");;
    }
    
    
    
    
    $banka1 = "banka-ve-finans";
    $egitim1 = "egitim";
    $ev1= "ev-bahce-ve-dekorasyon";
    $giyim1 = "giyim-moda";
    $hizmet1 = "hizmet-sektoru";
    $iletisim1 = "iletisim";
    $insaat1 = "insaat";
    $konaklama1 = "konaklama-turizm";
    $otomotiv1 = "otomotiv";
    $resmi1 = "resmi-kurumlar";
    $saglik1 = "saglik";
    $yeme1 = "yeme-icme";
?>
<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>Golhisar-Sektorführer</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
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

    <!-- Modernizr -->
    <script src="../../js/modernizr.js"></script>

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
                        <h1><a href="profile.php" title="Gölhisar Sektör">Mein Golhisar-Sektor</a></h1>
                    </div>
                </div>
                <nav class="col--md-8 col-sm-9 col-xs-8">
                    <ul id="primary_nav">
                        <li><a href="profilim.php">mein Profil</a>
                                </li>
                        <li id="wishlist"><a href="#sektörler">Branchen</a>
                        </li>
                        <li id="buy"><a href="sektorekle.php">Fügen Sie Ihre Branche hinzu</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="profile" selected>Deutsch</option>
                            <option value="../../eng/giris/profile">Englisch</option>
                            <option value="../../giris/profile">Türkisch</option>
                        </select>
                        </div></li>
                        <li id="login"><a href="cikis.php">Ausloggen</a>
                        </li>
                    </ul>
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobil</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="../../img/logo_2.png" alt="img" data-retina="true" width="170" height="30">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <li><a href="profile.php">Startseite</a>
                                </li>
                                <li><a href="profilim.php">mein Profil</a>
                                </li>
                                <li><a href="faq.php">FAQ</a>
                                </li>
                                <li><a href="contacts.php">Kommunikation</a>
                                </li>
                                <li id="buy"><a href="sektorekle.php">Fügen Sie Ihre Branche hinzu</a>
                                </li>
                                <li id="wishlist"><a href="#sektörler">Branchen</a>
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
    <section class="header-video">
        <div id="hero_video">
            <div id="sub_content_in">
                <h1>SEKTOR GOLHİSAR</h1>
                <p>
                    Willkommen, <?php echo $_SESSION["kullanici_adi"]; ?>
                </p>

            </div>
            <!-- End sub_content -->
        </div>
        <img src="../../img/video_fix.png" alt="" class="header-video--media" data-video-src="../../video/intro" data-teaser-source="../../video/intro" data-provider="" data-video-width="1920" data-video-height="960">
    </section>
    <!-- End Header video -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60_30" id="sektörler">
        <div class="main_title">
            <h2><strong>Erkunden Sie    </strong>Golhisar</h2>
            <p>
    
            </p>
            <span><em></em></span>
        </div>
        <div class="row box_cat">
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $banka1; ?>')">
        <span><p><?php echo $bankafinans; ?></p></span>
        <i class="fa-solid fa-building-columns"></i>
        <h3>Banken und Finanzen</h3>
        <p></p>
    </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $hizmet1; ?>')">
                    <span><p><?php echo $hizmetsektor; ?></p></span>
                    <i class="fa-solid fa-bell-concierge"></i>
                    <h3>Dienstleistungsbranche</h3>
                    <p>
                       
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $egitim1; ?>')">
                    <span><p><?php echo $egitim; ?></p></span>
                    <i class="fa-solid fa-school"></i>
                    <h3>Ausbildung</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $ev1; ?>')">
                    <span><p><?php echo $evbahce; ?></p></span>
                    <i class="fa-solid fa-house-chimney"></i>
                    <h3>Haus, Garten und Dekoration</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
        </div>
        <!-- End row -->

        <div class="row box_cat">
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $otomotiv1; ?>')">
                    <span><p><?php echo $otomotiv; ?></p></span>
                    <i class="fa-solid fa-car"></i>
                    <h3>Automobil</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $saglik1; ?>')">
                    <span><p><?php echo $saglik; ?></p></span>
                    <i class="fa-solid fa-notes-medical"></i>
                    <h3>Gesundheit</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $resmi1; ?>')">
                    <span><p><?php echo $resmikurum; ?></p></span>
                    <i class="fa-solid fa-building-ngo"></i>
                    <h3>Regierungsbehörden</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $yeme1; ?>')">
                    <span><p><?php echo $yemeicme; ?></p></span>
                    <i class="fa-solid fa-utensils"></i>
                    <h3>Essen und Trinken</h3>
                    <p>
                       
                    </p>
                </a>
            </div>
        </div>
        <div class="row box_cat">
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $giyim1; ?>')">
                    <span><p><?php echo $giyimmoda; ?></p></span>
                    <i class="fa-solid fa-shirt"></i>
                    <h3>Kleidung-Mode</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $iletisim1; ?>')">
                    <span><p><?php echo $iletisim; ?></p></span>
                    <i class="fa-solid fa-solid fa-tower-cell"></i>
                    <h3>Kommunikation</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $insaat1; ?>')">
                    <span><p><?php echo $insaat; ?></p></span>
                    <i class="fa-solid fa-trowel-bricks"></i>
                    <h3>Gebäude</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $konaklama1; ?>')">
                    <span><p><?php echo $konaklamaturizm; ?></p></span>
                    <i class="fa-solid fa-hotel"></i>
                    <h3>Unterkunft-Tourismusm</h3>
                    <p>
                       
                    </p>
                </a>
            </div>
        </div>
        
        <!-- End row -->
    </div>
    <!-- End container -->

    
    <!-- End pattern dots -->

    <div id="map_home">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12721.431556301408!2d29.5086409!3d37.1441888!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c12155a7e95721%3A0x50989692b80cac5d!2sPazar%2C%20G%C3%B6lhisar%20Belediyesi%2C%2015400%20G%C3%B6lhisar%2FBurdur!5e0!3m2!1sen!2str!4v1679877000594!5m2!1sen!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End map_home -->

   
                    
    <!--  End section white -->

    <section class="parallax_window_home bright">
        <div class="container">
            <div class="row features add_bottom_45">
                <div class="col-sm-4">
                    <div id="feat_2">
                        <a href="about.php" class="bt_info">Klicken Sie für mehr</a>
                        <h3>Finden Sie, was Sie wollen</h3>
                        <p>
                            Finden Sie so schnell wie möglich, wonach Sie suchen.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="feat_1">
                        <a href="about.php" class="bt_info">Klicken Sie für mehr</a>
                        <h3>Informationen bekommen</h3>
                        <p>
                            Wir stellen Ihnen den gesuchten Ort mit den nötigen Informationen vor.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="feat_3">
                        <a href="about.php" class="bt_info">Klicken Sie für mehr</a>
                        <h3>Fügen Sie Ihre Branche hinzu</h3>
                        <p>
                            Indem Sie Ihre Branche hinzufügen, können Sie es unseren Besuchern erleichtern, Sie zu finden.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End row -->
    </section>
    <!-- End section -->

   

    <!-- Footer ================================================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3>über uns</h3>
                    <p>Wir sind ein Team, das so gebildet wurde, dass unsere Besucher von Gölhisar schnell auf genaue und gültige Informationen über Gölhisar zugreifen können.</p>
                    <p><img src="../../img/logo_2.png" alt="img" class="hidden-xs" width="170" height="30" data-retina="true">
                    </p>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h3>Hızlı Link</h3>
                    <ul>
                        <li><a href="about.php">über uns</a>
                        </li>
                        <li><a href="faq.php">FAQ</a>
                        </li>
                        <li><a href="contacts.php">Kommunikation</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End row -->
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    © Gölhisar'ım 2023 - Alle Rechte vorbehalten.
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

    <!-- Specific scripts -->
    <script src="../../js/video_header.js"></script>
    <script>
        'use strict';
        HeaderVideo.init({
            container: $('.header-video'),
            header: $('.header-video--media'),
            videoTrigger: $("#video-trigger"),
            autoPlayVideo: true
        });
        // Tabs
        new CBPFWTabs(document.getElementById('tabs'));
    </script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script src="../../js/map_home.js"></script>
    <script src="../../js/infobox.js"></script>
    <script>
    function sendValue(value) {
        // Set the URL of the current page with the value as a query parameter
        window.location.href = "yeme-icme.php?value=" + value;
    }
</script>
</body>

</html>