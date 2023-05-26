<?php

session_start();
if (!isset($_SESSION["kullanici_adi"])) {
    header("location:../giris.php");
    exit;
}

$name_err = "";
$lastname_err = "";
$email_err = "";
$phone_err = "";
$message_err = "";
$name = $lastname = $email = $phone = $message = "";

if (isset($_POST["gonder"])) {
    // isim doğrulama
    $isim = $_POST["name_contact"];
    if (empty($isim)) {
        $name_err = "Kullanıcı adı boş geçilemez.";
    } else if (!preg_match("/^[a-zA-ZığüşöçĞÜŞİÖÇ]+$/", $isim)) {
        $name_err = "Kullanıcı adı sadece harfler (a-z), rakamlar (0-9) ve alt çizgi (_) karakterlerinden oluşmalıdır.";
    } else {
        $name = $isim;
    }

    // soyisim doğrulama
    $soyisim = $_POST["lastname_contact"];
    if (empty($soyisim)) {
        $lastname_err = "Soy ad boş geçilemez.";
    } else if (!preg_match("/^[a-zA-ZığüşöçĞÜŞİÖÇ]+$/", $soyisim)) {
        $lastname_err = "Soy ad sadece harflerden oluşmalıdır.";
    } else {
        $lastname = $soyisim;
    }

    // email doğrulama
    $eposta = $_POST["email_contact"];
    if (empty($eposta)) {
        $email_err = "Email alanı boş geçilemez.";
    } else if (!preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $eposta)) {
        $email_err = "Geçersiz email formatı.";
    } else {
        $email = $eposta;
    }

    // telefon doğrulama
    $telefon = $_POST["phone_contact"];
    if (empty($telefon)) {
        $phone_err = "Telefon alanı boş geçilemez.";
    } else if (!preg_match("/^[0-9]+$/", $telefon)) {
        $phone_err = "Geçersiz telefon formatı.";
    } else {
        $phone = $telefon;
    }

    // mesaj doğrulama
    $mesaj = $_POST["message_contact"];
    if (empty($mesaj)) {
        $message_err = "Mesaj alanı boş geçilemez.";
    } else {
        $message = $mesaj;
    }

    // tüm doğrulamalar başarılıysa
    if (!empty($name) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($message))
    {
        include("../phpmailer/iletisim.php");
    }
    else{
    	    
    	}

    







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
    <title>İletişim</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

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
                        <li><a href="profilim.php">Profilim</a>
                                </li>
                        <li id="wishlist"><a href="profile.php#sektörler">Sektörler</a>
                        </li>
                        <li id="buy"><a href="sektorekle.php">Sektörünü ekle</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="contacts" selected>Türkçe</option>
                            <option value="../eng/giris/contacts">İngilizce</option>
                            <option value="../deu/giris/contacts">Almanca</option>
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
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="../img/sub_header_contact.jpg" data-natural-width="1400" data-natural-height="420">
        <!-- End sub_content -->
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="profile.php">Anasayfa</a>
                </li>
                <li><a href="contacts.php">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End position -->

    <div class="container margin_60_30">
        <div class="row">

            <div class="col-md-9">
                <div class="box_style_general">
                    <div class="indent_title_in">
                        <i class="icon_pencil-edit"></i>
                        <h3>Bize Ulaş</h3>
                    </div>
                    <div class="wrapper_indent">
                        <div id="message-contact"></div>
                        <form method="POST" action="contacts.php" id="contactform">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Adınız:</label>
<input type="text" class="form-control <?php if(!empty($name_err)){ echo "is-invalid"; } ?>" id="name_contact" name="name_contact" >
<?php if(!empty($name_err)){ echo "<div class='invalid-feedback'>" . $name_err . "</div>"; } ?>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Soy Adınız:</label>
<input type="text" class="form-control <?php if(!empty($lastname_err)){ echo "is-invalid"; } ?>" id="lastname_contact" name="lastname_contact" >
<?php if(!empty($lastname_err)){ echo "<div class='invalid-feedback'>" . $lastname_err . "</div>"; } ?>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>E-postanız:</label>
<input type="text" class="form-control <?php if(!empty($email_err)){ echo "is-invalid"; } ?>" id="email_contact" name="email_contact" >
<?php if(!empty($email_err)){ echo "<div class='invalid-feedback'>" . $email_err . "</div>"; } ?>

                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>Telefonunuz:</label>
<input type="text" class="form-control <?php if(!empty($phone_err)){ echo "is-invalid"; } ?>" id="phone_contact" name="phone_contact" >
<?php if(!empty($phone_err)){ echo "<div class='invalid-feedback'>" . $phone_err . "</div>"; } ?>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Mesajınız:</label>
<input type="text" class="form-control <?php if(!empty($message_err)){ echo "is-invalid"; } ?>" id="message_contact" name="message_contact" >
<?php if(!empty($message_err)){ echo "<div class='invalid-feedback'>" . $message_err . "</div>"; } ?>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <input type="submit" name="gonder" value="Gönder" class="button add_bottom_30" id="" />
                                     <?php if (isset($success_message)) { ?>
  <div class="success-message"><?php echo $success_message; ?></div>
<?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End wrapper_indent -->
                </div>
                <!-- End box style 1-->
            </div>
            <!-- End col lg 9 -->
            <aside class="col-md-3">
                <h4>İletişim Bilgimiz</h4>
                <p>
                    <a href="#">iletisim@golhisarim.com.tr</a>
                </p>
                <h5>Yol Tarifi</h5>
                <form action="http://maps.google.com/maps" method="get" target="_blank">
                    <div class="form-group">
                        <input type="text" name="saddr" placeholder="Bulunduğunuz Konumu Giriniz..." class="form-control styled">
                        <input type="hidden" name="daddr" value="Burdur, Gölhisar">
                        <!-- Write here your end point -->
                    </div>
                    <input type="submit" value="Görüntüle" class="button small nomargin">
                </form>
                <hr class="styled">
            </aside>
            <!--End aside -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->

    <div id="map_contact"></div>
    <!-- end map-->

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
                
                <div class="col-md-2 col-sm-4">
                    <h3>Dil Ayarı:</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="language" onchange="onSelectLanguagePHP(this)">
                            <option value="contacts" selected>Türkçe</option>
                            <option value="../eng/giris/contacts">İngilizce</option>
                            <option value="../deu/giris/contacts">Almanca</option>
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
    
    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GOOGLE map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="../js/mapmarker.jquery.js"></script>
    <script type="text/javascript" src="../js/mapmarker_func.jquery.js"></script>

</body>

</html>