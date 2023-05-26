<?php

session_start();
if (!isset($_SESSION["kullanici_adi"])) {
    header("location:../giris.php");
    exit;
}
$kullanici = $_SESSION["kullanici_adi"];



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
    <title>meine Firmen</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- BASE CSS -->
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/menu.css" rel="stylesheet">
    <link href="../../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    
    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">
    <link href="../../css/profilim.css" rel="stylesheet">

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
                        <li id="wishlist"><a href="profile.php#sektörler">Branchen</a>
                        </li>
                        <li id="buy"><a href="sektorekle.php">Fügen Sie Ihre Branche hinzu</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="profilim" selected>Deutsch</option>
                            <option value="../../eng/giris/profilim">Englisch</option>
                            <option value="../../giris/profilim">Türkisch</option>
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
                                <li id="wishlist"><a href="profile.php#sektörler">Branchen</a>
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
    <section class="parallax_window_in" data-parallax="scroll" data-image-src="../../img/sub_header_contact.jpg" data-natural-width="1400" data-natural-height="420">
        <!-- End sub_content -->
    </section>
    <!-- End section -->
    <!-- End SubHeader ============================================ -->

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="profile.php">Startseite</a>
                </li>
                <li><a href="profilim.php">mein Profil</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- End position -->

    <div class="container margin_60_30">
        <div class="row">
  <div class="col-md-4 mt-1">
    <div class="card text-center sidebar">
      <div class="card-body">
        <img src="../../img/kullaniciresim.jpg" class="rounded-circle" width="150">
        <div class="mt-3">
          <h3><?php echo $kullanici;  ?></h3>
          <strong><a href='guncelle.php'>Um Änderungen an Ihren Unternehmens-/persönlichen Daten vorzunehmen, klicken Sie auf , um ein Foto zu Ihrem Unternehmen hinzuzufügen.</a></strong><br><br>
          <?php include("../../assets/baglanti.php");
    
                                    $sql = "SELECT * FROM kullanicilar WHERE kullanici_adi= '{$_SESSION['kullanici_adi']}'";
                                    $sonuc = $baglanti->query($sql);
                                    
                                    if($sonuc->num_rows>0){
                                        while($cek=$sonuc->fetch_assoc()){
                                            $hesabisil = $cek['id'];
                                        }
                                    }
                                    
                                
                                ?>
          <button type="button" class="btn btn-danger" onclick="hesabisil('<?php echo $hesabisil; ?>')">LÖSCHEN SIE DAS KONTO</button>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-8 mt-1">
    <div class="card mb-3 content">
      <div class="card-body">
        <div class="row">

            <h5>E-Mail:</h5>

          <div class="col-md-9 text-secondary">
            <?php
              
              include("../../assets/baglanti.php");
                $sql = "SELECT * FROM kullanicilar WHERE kullanici_adi = '{$_SESSION['kullanici_adi']}'";
                $sonuc = $baglanti->query($sql);
                $cek = $sonuc->fetch_assoc();
                echo $cek['email'];
                mysqli_close($baglanti);
                
              ?>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-3 content">
      <h1 class="m-3">Meine Firmendaten:</h1>
      <div class="card-body">
        <div class="row">
            <div class="protable">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name der Firma</th>
                                            <th>Firmentyp</th>
                                            <th>Mein Firmenprofil</th>
                                            <th>Unternehmensprofilbild entfernen</th>
                                            <th>Fügen Sie Ihrem Unternehmen Fotos hinzu</th>
                                            <th>Löschen Sie Ihr Unternehmen</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("../../assets/baglanti2.php");
    
                                    $sql = "SELECT * FROM kabuledilen_sektor WHERE kullanici= '{$_SESSION['kullanici_adi']}'";
                                    $sonuc = $baglanti2->query($sql);
                                    
                                    if($sonuc->num_rows>0){
                                        while($cek=$sonuc->fetch_assoc()){
                                            echo "
    <tr>
        <td>".$cek['firma_ismi']."</td>
        <td>".$cek['firma_turu']."</td>
        <td><img src='../../".$cek['firma_resim']."' width='200'></td>
        <td><button type='button' class='btn btn-secondary' onclick='confirmAd(".$cek['id'].")'>entfernen</button></td>
        <td><button type='button' class='btn btn-success' onclick=\"Ad('".$cek['firma_ismi']."','".$cek['firma_turu']."')\">Hinzufügen</button></td>
        <td><button type='button' class='btn btn-danger' onclick='confirmDel(".$cek['id'].")'>löschen</button></td>
    </tr>
";

                                        }
                                    }
                                    else{
                                        echo "keine Daten gefunden";
                                    }
                                
                                ?>
                                        
                                    </tbody>
                                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper">
  <div class="top-photos" >
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead><h3>Ihre akzeptierten Firmenfotos</h3>
                                        <tr>
                                            <th>Name der Firma</th>
                                            <th>Firmenbild</th>
                                            <th>Wählen Sie das Profilbild des Unternehmens aus</th>
                                            <th>löschen</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("../../assets/baglanti2.php");
                                   $sql = "SELECT * FROM kabuledilenfotolar WHERE kullanici = '{$_SESSION['kullanici_adi']}'";
                                    $sonuc = $baglanti2->query($sql);
                                    
                                    if($sonuc->num_rows>0){
                                        while($cek=$sonuc->fetch_assoc()){
                                            echo "
                            <tr>
                                <td>".$cek['firma_ismi']."</td>
                                <td><img src='../".$cek['firma_resim']."' width='300'></td>
                                <td><button type='button' class='btn btn-success' onclick='confirmA("                   .$cek['id'].")'>Seç</button></td>
                                <td><button type='button' class='btn btn-danger' onclick='confirmAad("                      .$cek['id'].", \"".$cek['firma_resim']."\")'>Sil</button></td>
                            </tr>
                        ";

                                        }
                                    }
                                    else{
                                        echo "Sie haben noch kein Firmenfoto akzeptiert.";
                                    }
                                
                                ?>
                                        
                                    </tbody>
                                </table>
  </div>
  <div class="bottom-photos">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead><h3>Ihre ausstehenden Unternehmensfotos</h3>
                                        <tr>
                                            <th>Name der Firma</th>
                                            <th>Firmenbild</th>
                                            <th>löschen</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("../../assets/baglanti2.php");
                                   $sql = "SELECT * FROM fotolar WHERE kullanici = '{$_SESSION['kullanici_adi']}'";
                                    $sonuc = $baglanti2->query($sql);
                                    
                                    if($sonuc->num_rows>0){
                                        while($cek=$sonuc->fetch_assoc()){
                                            echo "
                            <tr>
                                <td>".$cek['firma_ismi']."</td>
                                <td><img src='../".$cek['firma_resim']."' width='300'></td>
                                <td><button type='button' class='btn btn-danger' onclick='confirmAdd("                      .$cek['id'].", \"".$cek['firma_resim']."\")'>Sil</button></td>
                            </tr>
                        ";

                                        }
                                    }
                                    else{
                                        echo "Sie haben noch kein Firmenfoto hochgeladen, bitte laden Sie es hoch.";
                                    }
                                
                                ?>
                                        
                                    </tbody>
                                </table>
  </div>
</div>
        <!-- End row -->
    </div>
    <!-- End container -->
    <!-- end map-->

    <!-- Footer ================================================== -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h3>über uns</h3>
                    <p>Wir sind ein Team, das so gebildet wurde, dass unsere Besucher von Gölhisar schnell auf genaue und gültige Informationen über Gölhisar zugreifen können.</p>
                    <p><img src="../img/logo_2.png" alt="img" class="hidden-xs" width="170" height="30" data-retina="true">
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
                
                <div class="col-md-2 col-sm-4">
                    <h3>Die Spracheinstellung:</h3>
                    <div class="styled-select">
                        <select class="form-control" name="lang" id="language" onchange="onSelectLanguagePHP(this)">
                            <option value="contacts" selected>Deutsch</option>
                            <option value="../../eng/giris/contacts">Englisch</option>
                            <option value="../../giris/contacts">Turkisch</option>
                        </select>
                    </div>
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
    <script src="../..//jquery-2.2.4.min.js"></script>
    <script src="../../js/common_scripts_min.js"></script>
    <script src="../../assets/validate.js"></script>
    <script src="../../js/functions.js"></script>
    <script src="../../js/infobox.js"></script>
    
    <script src="../../js/kullanicijs/kullaniciislemleri.js"></script>
    
    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GOOGLE map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="../../js/mapmarker.jquery.js"></script>
    <script type="text/javascript" src="../../js/mapmarker_func.jquery.js"></script>

</body>

</html>