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
    <title>SSS</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">

    <!-- BASE CSS -->
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    
    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

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
                        <h1><a href="profile.php" title="Gölhisar Sektör">Gölhisar Sektörüm</a></h1>
                    </div>
                </div>
                <nav class="col--md-8 col-sm-9 col-xs-8">
                    <ul id="primary_nav">
                        <li><a href="faq.php">SSS</a>
                                </li>
                        <li id="wishlist"><a href="profile.php#sektörler">Sektörler</a>
                        </li>
                        <li id="buy"><a href="sektorekle.php">Sektörünü ekle</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="faq" selected>Türkçe</option>
                            <option value="eng/giris/faq">İngilizce</option>
                            <option value="deu/giris/faq">Almanca</option>
                        </select>
                        </div></li>
                        <li id="login"><a href="cikis.php">Çıkış Yap</a>
                        </li>
                    </ul>
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobil</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="../img/logo_2.png" alt="img" data-retina="true" width="170" height="30">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <li><a href="profile.php">Anasayfa</a>
                                </li>
                                <li><a href="profilim.php">Profilim</a>
                                </li>
                                <li><a href="faq.php">SSS</a>
                                </li>
                                <li><a href="contacts.php">İletişim</a>
                                </li>
                                <li id="buy"><a href="sektorekle.php">Sektörünü ekle</a>
                                </li>
                                <li id="wishlist"><a href="profile.php#sektörler">Sektörler</a>
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
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="../img/sub_header_florence_2.jpg" data-natural-width="1400" data-natural-height="420">
        <!-- End sub_content -->
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="profile.php.//">Anasayfa</a>
                </li>
                <li><a href="faq.php">SSS</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End position -->

    <div class="container margin_60">
        <div class="row">
            <div class="col-md-9">
                <h3 class="nomargin_top" data-parent="#firma">Firmayla İlgili Sorular</h3>

                <div class="panel-group" id="transport">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse"
                            data-parent="#firma" href="#collapseOne">Neden firmanızı eklemelisiniz?<i class="indicator icon_plus_alt2  pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                Firmanızı sitemize eklemeniz durumunda firmanız sitemizi ziyaret eden müşteriler tarafından görüntülenir. Bu sayede ise firmanızın önünü açarsınız ve bu sizin için çok iyi bir fırsat.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#transport" href="#collapseTwo">Neden bizi tercih etmelisiniz?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Gölhisar'a gelen misafirlerimizin yerleri daha hızlı bir şekilde bulabilmesi ve onlara sektörlerinizi gölhisara gelmeden göstermek için bizi tercih etmelisiniz.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#transport" href="#collapseThree">Firmamı nasıl eklerim?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                Firmanızı footerdaki hızlı linke basarak ekleyebilirsiniz.
                            </div>
                        </div>
                    </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#transport" href="#collapseFour">Firmamı koyduğum zaman kendi bilgilerimi güvende tutabilir misiniz?<i class="indicator icon_plus_alt2  pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                Bilgileriniz bizimle güvende bu konuda aşırı titiz olmakla beraber sizlerin güvencesini sağlamak en büyük amacımızdır.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End panel-group -->

                <h3 data-parent="#kayıt">Kayıt</h3>
                <div class="panel-group" id="works">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#works" href="#collapseOne_works">Kayıt nasıl olurum?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseOne_works" class="panel-collapse collapse">
                            <div class="panel-body">
                                Sitemizin menü tarafında görünen Giriş yap butonuna tıklayarak kayıt olup giriş yapabilirsiniz.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#works" href="#collapseTwo_works">Kayıt olmadan/giriş yapmadan firma ekleyebilir miyim?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseTwo_works" class="panel-collapse collapse">
                            <div class="panel-body">
                                Hayır, firma eklemek için giriş yapmanız şart.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End panel-group -->

                <h3 data-parent="#genel">Genel</h3>

                <div class="panel-group" id="doc">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#doc" href="#collapseOne_doc">Sosyal medya hesaplarınız var mı?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseOne_doc" class="panel-collapse collapse">
                            <div class="panel-body">
                                En kısa sürede hizmetinize açılacaktır.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#doc" href="#collapseTwo_doc">Siteniz neden 3 dil destekliyor?<i class="indicator icon_plus_alt2 pull-right"></i></a>
                          </h4>
                        </div>
                        <div id="collapseTwo_doc" class="panel-collapse collapse">
                            <div class="panel-body">
                                Yurtdışından gelen turistlerimize de yardımcı olabilmek için böyle bir fikir ürettik. Herkesin sitemizden yararlanmasını ve Gölhisar'ımızı daha iyi tanımasını isteriz.
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
                    <h3>Hakkımızda</h3>
                    <p>Gölhisar'ımıza gelen ziyaretçilerimizin Gölhisar hakkında daha hızlı doğru ve geçerli bilgilere hızlıca ulaşabilmesi için oluşmuş bir ekibiz.</p>
                    <p><img src="../img/logo_2.png" alt="img" class="hidden-xs" width="170" height="30" data-retina="true">
                    </p>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h3>Hızlı Link</h3>
                    <ul>
                        <li><a href="about.php">Hakkımızda</a>
                        </li>
                        <li><a href="faq.php">SSS</a>
                        </li>
                        <li><a href="contacts.php">İletişim</a>
                        </li>
                    </ul>
                </div>
                
                <div class="col-md-2 col-sm-4">
                    <h3>Dil Ayarı:</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="language" onchange="onSelectLanguagePHP(this)">
                            <option value="faq" selected>Türkçe</option>
                            <option value="../eng/giris/faq">İngilizce</option>
                            <option value="../deu/giris/faq">Almanca</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- End row -->
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    © Gölhisar'ım 2023 - Tüm Hakları Saklıdır.
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </footer>
    <!-- End Footer =============================================== -->

    <!-- COMMON SCRIPTS -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/common_scripts_min.js"></script>
    <script src="../assets/validate.js"></script>
    <script src="../js/functions.js"></script>
    <script src="../js/infobox.js"></script>
    <!-- SPECIFIC SCRIPTS -->
    <script src="../js/theia-sticky-sidebar.min.js"></script>
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

</html>../