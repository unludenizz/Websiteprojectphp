<?php


$firmaid= $_GET['firmaid'];
//-----------------
// Veritabanı bağlantısı
      $host = '';
      $username = '';
      $password = '';
      $database = '';
      $mysqli = new mysqli($host, $username, $password, $database);
      
      // Bağlantı kontrolü
      if ($mysqli->connect_error) {
        die('Veritabanına bağlanırken hata oluştu: ' . $mysqli->connect_error);
      }

      // SQL sorgusu çalıştırılıyor ve sonuç kümesi alınıyor
       $result = $mysqli->query("SELECT firma_id, firma_resim FROM kabuledilenfotolar WHERE firma_id = $firmaid ORDER BY firma_id");






//---------------
include("assets/baglanti2.php");




$sorgu = mysqli_query($baglanti2, "SELECT firma_resim FROM kabuledilen_sektor WHERE id = $firmaid");

if (!$sorgu) {
    die("Sorgu hatası: " . mysqli_error($baglanti2));
}

$satir = mysqli_fetch_assoc($sorgu);

$firma_resim = $satir['firma_resim'];
//---------------------------------------------

$sorgu2 = mysqli_query($baglanti2, "SELECT firma_ismi FROM kabuledilen_sektor WHERE id = $firmaid");

if (!$sorgu2) {
    die("Sorgu hatası: " . mysqli_error($baglanti2));
}

$satir2 = mysqli_fetch_assoc($sorgu2);

$firma_ismi = $satir2['firma_ismi'];
//---------------------------------------------
$sorgu3 = mysqli_query($baglanti2, "SELECT firma_sahip FROM kabuledilen_sektor WHERE id = $firmaid");

if (!$sorgu3) {
    die("Sorgu hatası: " . mysqli_error($baglanti2));
}

$satir3 = mysqli_fetch_assoc($sorgu3);

$firma_sahip = $satir3['firma_sahip'];
//---------------------------------------------
$sorgu4 = mysqli_query($baglanti2, "SELECT firma_tel FROM kabuledilen_sektor WHERE id = $firmaid");

if (!$sorgu4) {
    die("Sorgu hatası: " . mysqli_error($baglanti2));
}

$satir4 = mysqli_fetch_assoc($sorgu4);

$firma_tel = $satir4['firma_tel'];
//---------------------------------------------
$sorgu5 = mysqli_query($baglanti2, "SELECT firma_eposta FROM kabuledilen_sektor WHERE id = $firmaid");

if (!$sorgu5) {
    die("Sorgu hatası: " . mysqli_error($baglanti2));
}

$satir5 = mysqli_fetch_assoc($sorgu5);

$firma_eposta = $satir5['firma_eposta'];
//---------------------------------------------
$sorgu6 = mysqli_query($baglanti2, "SELECT firma_adres FROM kabuledilen_sektor WHERE id = $firmaid");

if (!$sorgu6) {
    die("Sorgu hatası: " . mysqli_error($baglanti2));
}

$satir6 = mysqli_fetch_assoc($sorgu6);

$firma_adres = $satir6['firma_adres'];




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
    <title>Firma Detay</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- BASE CSS -->
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    
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
                        <h1><a href="index.php" title="Gölhisar Sektör">Gölhisar Sektörüm</a></h1>
                    </div>
                </div>
                <nav class="col--md-8 col-sm-9 col-xs-8">
                    <ul id="primary_nav">
                        <li id="wishlist"><a href="index.php#sektörler">Sektörler</a>
                        </li>
                        <li id="buy"><a href="sektorekle.php">Sektörünü ekle</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="firma-detail" selected>Türkçe</option>
                            <option value="eng/giris/firma-detail">İngilizce</option>
                            <option value="deu/giris/firma-detail">Almanca</option>
                        </select>
                        </div></li>
                    </ul>
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobil</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="../img/logo_2.png" alt="img" data-retina="true" width="170" height="30">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>
                        <ul>
                            <li class="submenu">
                                <li><a href="index.php">Anasayfa</a>
                                </li>
                                <li><a href="faq.html">SSS</a>
                                </li>
                                <li><a href="contacts.php">İletişim</a>
                                </li>
                                <li id="buy"><a href="#">Sektörünü ekle</a>
                                </li>
                                <li id="wishlist"><a href="index.php#sektörler">Sektörler</a>
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
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="../<?php echo $firma_resim;  ?>" data-natural-width="1400" data-natural-height="420">
        <!-- End sub_content -->
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="index.php">Anasayfa</a>
                </li>
                <li><a href="index.php#sektörler">Sektörler</a>
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
                        
                        <h1 style="color:Maroon"><?php echo $firma_ismi; ?> </h1>
                        <h1></h1>
                        <h4>Firma Sahibi :<a href="#"> <?php echo $firma_sahip; ?> </a></h4>
                        <h4>Firma Telefon No :<a href="#"> <?php echo $firma_tel; ?> </a></h4>
                        <h4>Firma E-Posta :<a href="#"> <?php echo $firma_eposta; ?> </a></h4>
                        <h4>Firma Adresi :<a href="#"> <?php echo $firma_adres; ?> </a></h4>
                        <h1></h1>
                        <h4><a href="#">Firmaya Ait Bazı Görseller :</a></h4>
                        <!-- slider başka  -->
                        <?php
                         if ($result->num_rows > 0) {
      echo '<div class="slider">';
      
      while ($row = $result->fetch_assoc()) {
        $fotoadres = $row['firma_resim'];
        echo '<img src="' . $fotoadres . '">';
      }
      
      echo '<div class="prev-button" onclick="prevSlide()">Geri</div>';
      echo '<div class="next-button" onclick="nextSlide()">İleri</div>';
      echo '</div>';
    } else {
      echo 'Belirtilen firma ID\'si için fotoğraf bulunamadı.';
    }

    // Veritabanı bağlantısı kapatılıyor
    $result->close();
    $mysqli->close();
                        
                      ?>  
                        
                        
                        
                        <!-- slider bitiş -->
                    </div>
                    
                    
                </div>
                
                     
            </div>
            <!-- End col lg 9 -->
            
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
                    <p><img src="img/logo_2.png" alt="img" class="hidden-xs" width="170" height="30" data-retina="true">
                    </p>
                </div>
                <div class="col-md-3 col-sm-4">
                    <h3>Hızlı Link</h3>
                    <ul>
                        <li><a href="about.php">Hakkımızda</a>
                        </li>
                        <li><a href="faq.html">SSS</a>
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
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/common_scripts_min.js"></script>
    <script src="assets/validate.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/infobox.js"></script>
    
    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GOOGLE map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/mapmarker.jquery.js"></script>
    <script type="text/javascript" src="js/mapmarker_func.jquery.js"></script>

</body>

<style>
    .slider {
      position: relative;
      width: 700px; /* Slider genişliğini buradan ayarlayabilirsiniz */
      height: 500px; /* Slider yüksekliğini buradan ayarlayabilirsiniz */
      overflow: hidden;
    }
    .slider img {
      display: block; /* Eklenen stil */
      max-width: 100%;
      max-height: 100%;
      width: 700px;
      height: 500px;
    }
    .prev-button,
    .next-button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      padding: 10px;
      cursor: pointer;
    }
    .prev-button {
      left: 10px;
    }
    .next-button {
      right: 10px;
    }
  </style>
<script>
    var slideIndex = 0;
    var slides = document.querySelectorAll('.slider img');

    function showSlide(index) {
      if (index >= slides.length) {
        slideIndex = 0;
      } else if (index < 0) {
        slideIndex = slides.length - 1;
      }

      for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }
      slides[slideIndex].style.display = 'block';
    }

    function prevSlide() {
      slideIndex--;
      showSlide(slideIndex);
    }

    function nextSlide() {
      slideIndex++;
      showSlide(slideIndex);
    }

    // İlk slaydı göster
    showSlide(slideIndex);
  </script>

</html>