<?php
    include("../sayac.php");
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
    <title>Gölhisar Sektör Rehberi</title>

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

    <!-- Modernizr -->
    <script src="../js/modernizr.js"></script>

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
                        <li><a href="profilim.php">Profilim</a>
                                </li>
                        <li id="wishlist"><a href="#sektörler">Sektörler</a>
                        </li>
                        <li id="buy"><a href="profilim.php">Firmanı ekle</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="profile" selected>Türkçe</option>
                            <option value="../eng/giris/profile">İngilizce</option>
                            <option value="../deu/giris/profile">Almanca</option>
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
                                
                                </li>
                                <li id="wishlist"><a href="#sektörler">Sektörler</a>
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
                <h1>GÖLHİSAR SEKTÖR</h1>
                <p>
                    Hoş Geldin, <?php echo $_SESSION["kullanici_adi"]; ?>
                </p>

            </div>
            <!-- End sub_content -->
        </div>
        <img src="../img/video_fix.png" alt="" class="header-video--media" data-video-src="../video/intro" data-teaser-source="../video/intro" data-provider="" data-video-width="1920" data-video-height="960">
    </section>
    <!-- End Header video -->
    <!-- End SubHeader ============================================ -->

    <div class="container margin_60_30" id="sektörler">
        <div class="main_title">
            <h2><strong>Gölhisarı   </strong>Keşfet</h2>
            <p>
    
            </p>
            <span><em></em></span>
        </div>
        <div class="row box_cat">
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $banka1; ?>')">
        <span><p><?php echo $bankafinans; ?></p></span>
        <i class="fa-solid fa-building-columns"></i>
        <h3>Banka ve Finans</h3>
        <p></p>
    </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $hizmet1; ?>')">
                    <span><p><?php echo $hizmetsektor; ?></p></span>
                    <i class="fa-solid fa-bell-concierge"></i>
                    <h3>Hizmet Sektörü</h3>
                    <p>
                       
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $egitim1; ?>')">
                    <span><p><?php echo $egitim; ?></p></span>
                    <i class="fa-solid fa-school"></i>
                    <h3>Eğitim</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $ev1; ?>')">
                    <span><p><?php echo $evbahce; ?></p></span>
                    <i class="fa-solid fa-house-chimney"></i>
                    <h3>Ev, Bahçe Ve Dekorasyon</h3>
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
                    <h3>Otomotiv</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $saglik1; ?>')">
                    <span><p><?php echo $saglik; ?></p></span>
                    <i class="fa-solid fa-notes-medical"></i>
                    <h3>Sağlık</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $resmi1; ?>')">
                    <span><p><?php echo $resmikurum; ?></p></span>
                    <i class="fa-solid fa-building-ngo"></i>
                    <h3>Resmi Kurumlar</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $yeme1; ?>')">
                    <span><p><?php echo $yemeicme; ?></p></span>
                    <i class="fa-solid fa-utensils"></i>
                    <h3>Yeme-İçme</h3>
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
                    <h3>Giyim-Moda</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $iletisim1; ?>')">
                    <span><p><?php echo $iletisim; ?></p></span>
                    <i class="fa-solid fa-solid fa-tower-cell"></i>
                    <h3>İletişim</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $insaat1; ?>')">
                    <span><p><?php echo $insaat; ?></p></span>
                    <i class="fa-solid fa-trowel-bricks"></i>
                    <h3>İnşaat</h3>
                    <p>
                        
                    </p>
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#" onclick="sendValue('<?php echo $konaklama1; ?>')">
                    <span><p><?php echo $konaklamaturizm; ?></p></span>
                    <i class="fa-solid fa-hotel"></i>
                    <h3>Konaklama-Turizm</h3>
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
                        <h3>İstediğini Bul</h3>
                        <p>
                            En kısa sürede aradığınıza ulaşın.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="feat_1">
                        <h3>Bilgi Edin</h3>
                        <p>
                            Aradığınız yeri gerekli bilgiler ile sizlere sunuyoruz.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div id="feat_3">
                        <h3>Sektörünüzü Ekleyin</h3>
                        <p>
                            Siz de sektörünüzü ekleyerek ziyaretçilerimizin sizi daha rahat bulmalarını sağlayabilirsiniz.
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
                    <h3>Hakkımızda</h3>
                    <p>Gölhisar'ımıza gelen ziyaretçilerimizin Gölhisar hakkında daha hızlı doğru ve geçerli bilgilere hızlıca ulaşabilmesi için oluşmuş bir ekibiz.</p>
                    <p><img src="../img/logo_2.png" alt="img" class="hidden-xs" width="170" height="30" data-retina="true">
                    </p>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h3>Hızlı Link</h3>
                    <ul>
                        <li><a href="faq.php">SSS</a>
                        </li>
                        <li><a href="contacts.php">İletişim</a>
                        </li>
                    </ul>
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

    <!-- Specific scripts -->
    <script src="../js/video_header.js"></script>
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
    <script src="../js/map_home.js"></script>
    <script src="../js/infobox.js"></script>
    <script>
    function sendValue(value) {
        // Set the URL of the current page with the value as a query parameter
        window.location.href = "yeme-icme.php?value=" + value;
    }
</script>
<div id="popupp" class="popupp">
		<span class="closee" onclick="closePopupp()">&times;</span>
		<p></p>
		      <?php
include("../assets/baglanti2.php");
mysqli_set_charset($baglanti2, "utf8");
$firmaadi_err="";
$firmasahip_err="";
$firmatel_err="";
$firmaadres_err="";
$firmaeposta_err="";
$firma_turu_err="";

    session_start();
    if(isset($_SESSION["kullanici_adi"])){
        
    }
    
    else{
        header("location:../index.php");;
    }
if(isset($_POST["kaydet"])){


$kullanici = $_SESSION["kullanici_adi"];



$firmaadi = $_POST["firmaadi"];

   if (empty($firmaadi)) {
        $firmaadi_err = "Firma adı boş geçilemez.";
    } 
    else if (strlen($firmaadi) < 3 || strlen($firmaadi) > 30) {
        $firmaadi_err = "Firma adı 3-30 karakter uzunluğunda olmalıdır.";
    } 
    else if (!preg_match("/^[a-zA-Z0-9_ğüşıöçĞÜŞİÖÇ ]+$/u", $firmaadi)) {
        $firmaadi_err = "Firma adı sadece harfler (a-z), rakamlar (0-9) ve alt çizgi (_) karakterlerinden oluşmalıdır.";
    }
    else{
        $firmaadii = $firmaadi;
    }
    

$firmasahip = $_POST["firmasahip"];

if (empty($firmasahip)) {
        $firmasahip_err = "Firma sahibi adı boş geçilemez.";
    } 
else if (strlen($firmasahip) < 3 || strlen($firmasahip) > 40) {
        $firmasahip_err = "Firma sahibi adı 3-40 karakter uzunluğunda olmalıdır.";
    }
else if (!preg_match("/^[a-zA-ZğüşıöçĞÜŞİÖÇ ]+$/u", $firmasahip)) {
        $firmasahip_err = "Firma sahibi adı sadece harflerden (a-z) oluşmalıdır.";
    }
else{
        $firmasahipp = $firmasahip;
    }






$firmatel = $_POST["firmatel"];

if (empty($firmatel)) {
        $firmatel_err = "Firma Telefonu boş geçilemez.";
    } 
else if (strlen($firmatel) < 8 || strlen($firmatel) > 15) {
       $firmatel_err = "Firma Telefonu 8-15 karakter uzunluğunda olmalıdır.";
    }
else if (!preg_match("/^[0-9+]+$/", $firmatel)) {
        $firmatel_err = "Firma Telefonu sadece rakamlardan (0-9) oluşmalıdır.";
    }
else{
        $firmatell = $firmatel;
    }










$firmaadres = $_POST["firmaadres"];

if (empty($firmaadres)) {
        $firmaadres_err = "Firma Adresi boş geçilemez.";
    } 
else if (strlen($firmaadres) < 8 || strlen($firmaadres) > 80) {
       $firmaadres_err = "Firma Adresi 8-80 karakter uzunluğunda olmalıdır.";
    }
else{
        $firmaadress = $firmaadres;
    }









$firmaeposta = $_POST["firmaeposta"];

 if (empty($firmaeposta)) {
        $firmaeposta_err="Email alanı boş geçilemez.";
    }
    else if (!filter_var($firmaeposta, FILTER_VALIDATE_EMAIL)) {
        $firmaeposta_err = "Geçersiz email formatı.";
    }
    else{
        $firmaepostaa = $firmaeposta;
    }




$firma_turu = $_POST["firmaturu"];

if(empty($firma_turu)){
    $firma_turu_err="Lütfen seçiminizi yapınız.";
    }else{
        $firma_turuu = $firma_turu;
    }
$varmif = 0;
if(empty($firmaadi_err))
   {
       $kontrolfirmaismi = mysqli_query($baglanti2,"SELECT * FROM kabuledilen_sektor WHERE firma_ismi = '$firmaadii'");
       if(mysqli_num_rows($kontrolfirmaismi) > 0) {
            $message = "Bu firma ismi zaten alınmış başka bir firma ismi yazınız.";
            
            $varmif+=1;
            $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
            echo $alert_box;
        }
       
}

if(isset($firmaadii) && isset($firmasahipp) && isset($firmatell) && isset($firmaadress) && isset($firmaepostaa) && isset($firma_turuu) && $varmif === 0){

   $ekle ="INSERT INTO sektorekle (firma_ismi, firma_sahip, firma_tel, firma_adres, firma_eposta, firma_turu, kullanici) VALUES ('$firmaadii', '$firmasahipp', '$firmatell', '$firmaadress', '$firmaepostaa', '$firma_turuu', '$kullanici')";
        $calistirekle = mysqli_query($baglanti2, $ekle);
        if($calistirekle){
        
            $message = "Kayıt Başarılı!";
    
    $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    
    echo $alert_box;
            
            
            
        }
        else{
            $message = "Kayıt Başarısız.";
    
    $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    
    echo $alert_box;
            echo mysqli_error($baglanti2);
            }
        mysqli_close($baglanti2);


}

}
?>
                <div class="box_login">
                    <strong><h3>FİRMA BİLGİLERİ</h3></strong>
                     <!-- kayıt -->
                   <form action="profile.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="username" name="firmaadi" class="form-control  
                            
                            <?php
                                
                                if(!empty($firmaadi_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1"  placeholder="Firma Adı">
                            <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmaadi_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Firma Sahibi" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmasahip_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" name="firmasahip" >
                            <span class="input-icon"><i class="icon-person"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmasahip_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Firma Telefon" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmatel_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" name="firmatel">
                            <span class="input-icon"><i class="icon_phone"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmatel_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmaadres_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" placeholder="Firma Adresi" name="firmaadres">
                            <span class="input-icon"><i class="icon-address-book"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmaadres_err;  ?>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <input type="text" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmaeposta_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" placeholder="Firma E-posta adresi" name="firmaeposta">
                            <span class="input-icon"><i class="icon_mail_alt"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmaeposta_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control
                            
                            
                            <?php
                                
                                if(!empty($firma_turu_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " aria-label="Default select example" name="firmaturu">
                                <span class="input-icon"><i class="icon-down-2"></i></span>
                              <option value="">Firmanıza uygun sektörü aşağıdan seçiniz.</option>
                              <option value="banka-ve-finans">Banka ve Finans</option>
                              <option value="hizmet-sektoru">Hizmet Sektörü</option>
                              <option value="egitim">Eğitim</option>
                              <option value="ev-bahce-ve-dekorasyon">Ev, Bahçe ve Dekorasyon</option>
                              <option value="otomotiv">Otomotiv</option>
                              <option value="saglik">Sağlık</option>
                              <option value="resmi-kurumlar">Resmi Kurumlar</option>
                              <option value="yeme-icme">Yeme-İçme</option>
                              <option value="giyim-moda">Giyim-Moda</option>
                              <option value="iletisim">İletişim</option>
                              <option value="insaat">İnşaat</option>
                              <option value="konaklama-turizm">Konaklama-Turizm</option>
                            </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    <?php echo $firma_turu_err;  ?>
                            </div>
                        </div>
                        
                        <div id="pass-info" class=""></div>
                        <button type="submit" name="kaydet" class="button_login">Gönder</button>
                    </form>
                </div>
            
		
	</div>
</body>

</html>