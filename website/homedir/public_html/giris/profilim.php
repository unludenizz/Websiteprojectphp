<?php

session_start();
if (!isset($_SESSION["kullanici_adi"])) {
    header("location:../giris.php");
    exit;
}
$kullanici = $_SESSION["kullanici_adi"];












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
  $kullanici1=$_SESSION["kullanici_adi"];
   $ekle ="INSERT INTO sektorekle (firma_ismi, firma_sahip, firma_tel, firma_adres, firma_eposta, firma_turu, kullanici) VALUES ('$firmaadii', '$firmasahipp', '$firmatell', '$firmaadress', '$firmaepostaa', '$firma_turuu', '$kullanici1')";
        $calistirekle = mysqli_query($baglanti2, $ekle);
        if($calistirekle){
        
            $message = "Kayıt Başarılı!";
    
    $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    
    echo $alert_box;
            
             $sure = 2;

// Yönlendirme gerçekleştirmek için header'ı kullanın
header("refresh:$sure;url=https://www.golhisarim.com.tr/giris/profilim.php");
            
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




































//ikincigüncellemebaşlangıc//


include("../assets/baglanti.php");

$suankiad = $_SESSION['kullanici_adi'];
    
    $sql1 = "SELECT * FROM kullanicilar WHERE kullanici_adi = '{$_SESSION['kullanici_adi']}'";
    $sonuc = $baglanti->query($sql1);
    if ($sonuc->num_rows > 0) {
        $cek = $sonuc->fetch_assoc();
        if(!empty($cek['email'])){
            $suankimail = $cek['email'];
        }
    }
    
$username_err="";
$email_err="";
$parola_err1="";
$parola_err2="";
if(isset($_POST["kaydetkullanici"])){
    
     //kullanıcı adı doğrulama
     
     
    $kullaniciadi = $_POST["kullaniciadi"];

    if (empty($kullaniciadi)) {
        $username_err = "Kullanıcı adı boş geçilemez.";
    } 
    else if (strlen($kullaniciadi) < 5 || strlen($kullaniciadi) > 20) {
        $username_err = "Kullanıcı adı 5-20 karakter uzunluğunda olmalıdır.";
    } 
    else if (!preg_match("/^[a-zA-Z0-9_ğüşıöçĞÜŞİÖÇ ]+$/u", $kullaniciadi)) {
        $username_err = "Kullanıcı adı sadece harfler (a-z), rakamlar (0-9) ve alt çizgi (_) karakterlerinden oluşmalıdır.";
    }
    else{
        $username = $kullaniciadi;
    }
    //kullanıcı adı doğrulama bitiş

    //email doğrulama
    
    
    
    
    $eposta = $_POST["email"];
    
    
    
    
    if (empty($eposta)) {
        $email_err="Email alanı boş geçilemez.";
    }
    else if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Geçersiz email formatı.";
    }
    else{
        $email = $eposta;
    }
    
    //email doğrulama bitiş



   if(empty($username_err) && empty($email_err))
   { 
    $kontrolid = mysqli_query($baglanti,"SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'");

    $kontrolmail= mysqli_query($baglanti, "SELECT * FROM kullanicilar WHERE email = '$email' ");


    
    

            if(mysqli_num_rows($kontrolid) > 0 && $username !== $suankiad) {
            $message = "Bu kullanıcı adı zaten alınmış başka bir kullanıcı adı     yazınız.";
            $varmik=1;
        }   

        if(mysqli_num_rows($kontrolmail) > 0 && $email != $suankimail ) {
            $message = "Bu e-posta kullanılıyor başka e-posta yazınız.";
            $varmie=1;
        }

        if($varmik==1 && $varmie==1){
            $message = "Bu kullanıcı adı ve e-posta kullanılıyor, lütfen başka kullanıcı       adı ve e-posta giriniz.";
        } elseif($varmik==1){
            $message = "Bu kullanıcı adı zaten alınmış başka bir kullanıcı adı yazınız."       ;
        }       elseif($varmie==1){
            $message = "Bu e-posta kullanılıyor başka e-posta yazınız.";
        }

        if(isset($message)){
            $alert_box = "<div class='alertt'><div class='alertt-box'><span class       ='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
            echo $alert_box;
        }
        
    
        
    
        
        
            if(mysqli_num_rows($kontrolid) > 0 && $username === $suankiad) {
            $username = NULL;
            }
            if($email == $suankimail){
            $email =NULL;
            }
    
            
            if(isset($username) && isset($email) && $varmie==0 && $varmik ==0){
                
            
            
            
            
                $ekle ="INSERT INTO guncellekullanici (kullanici_adi, email, kullanici, guncelmail) VALUES ('$username','$email', '$suankiad', '$suankimail')";
                $calistirekle = mysqli_query($baglanti, $ekle);
                if($calistirekle){
                
                $message = "Güncelleme İstekleriniz İncelenmek Üzere Gönderilmiştir.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
            }
                else{
                    
                    $message = "Güncelleme İsteğiniz Gönderilememiştir Formu Kontrol Edip Tekrar Deneyiniz.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                    
                    
                    mysqli_query($baglanti, $ekle) or die(mysqli_error($baglanti));
                    //echo mysqli_error($baglanti);
                    }
                mysqli_close($baglanti);  
                
            }
            if(!isset($username) && isset($email) && $varmie==0 && $varmik ==0){
                
            
            
            
            
                $ekle ="INSERT INTO guncellekullanici (email, kullanici, kullanici_adi, guncelmail) VALUES ('$email', '$suankiad', '-', '$suankimail')";
                $calistirekle = mysqli_query($baglanti, $ekle);
                if($calistirekle){
                
                    $message = "E-Posta Güncelleme İsteğiniz İncelenmek Üzere Gönderilmiştir.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box; 
                    
                    
                }
                else{
                    
                     $message = "Güncelleme İsteğiniz Gönderilememiştir Formu Kontrol Edip Tekrar Deneyiniz.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box; 
                    
                    
                    
                    
                    mysqli_query($baglanti, $ekle) or die(mysqli_error($baglanti));
                    //echo mysqli_error($baglanti);
                    }
                mysqli_close($baglanti);  
                
            }
            if(isset($username) && !isset($email) && $varmie==0 && $varmik ==0){
                
            
            
            
            
                $ekle ="INSERT INTO guncellekullanici (kullanici_adi, kullanici, email, guncelmail) VALUES ('$username', '$suankiad', '-', '$suankimail')";
                $calistirekle = mysqli_query($baglanti, $ekle);
                if($calistirekle){
                
                    $message = "Kullanıcı Adı Güncelleme İsteğiniz İncelenmek Üzere Gönderilmiştir.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                    
                    $sure = 2;

// Yönlendirme gerçekleştirmek için header'ı kullanın
header("refresh:$sure;url=https://www.golhisarim.com.tr/giris/profilim.php");
                    
                    
                    
                    
                }
                else{
                    
                    $message = "Güncelleme İsteğiniz Gönderilememiştir Formu Kontrol Edip Tekrar Deneyiniz.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                    
                    
                    
                    
                    mysqli_query($baglanti, $ekle) or die(mysqli_error($baglanti));
                    //echo mysqli_error($baglanti);
                    }
                mysqli_close($baglanti);  
                
            }
            if(!isset($username) && !isset($email) && $varmie==0 && $varmik ==0){
                
                $message = "Ne yazık ki şu an kullandığınız bilgileri yazdığınız için güncelleme isteğiniz red edilmiştir";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                
                
            }
        mysqli_close($baglanti);
    }
}
//kullanıcı alanı bitiş





//firma alanı başlangıç










include("../assets/baglanti2.php");




if(isset($_POST["kaydetfirma"])){


$kullanici = $_SESSION["kullanici_adi"];









$firma_turu = $_POST["firmaturu"];

if(empty($firma_turu)){
    $firma_turu_err="Lütfen seçiminizi yapınız.";
    }else{
        $firma_turuu = $firma_turu;
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
    <title>Firmalarım</title>

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
    <link href="../css/profilim.css" rel="stylesheet">

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
                        <li id="buy"><a href="#firmaekle">Firmanı ekle</a>
                        </li>
                        <li><div class="styled-select">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="profilim" selected>Türkçe</option>
                            <option value="../eng/giris/profilim">İngilizce</option>
                            <option value="../deu/giris/profilim">Almanca</option>
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
                <li><a href="profilim.php">Profilim</a>
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
        <img src="../img/kullaniciresim.jpg" class="rounded-circle" width="150">
        <div class="mt-3">
          <h3><?php echo $_SESSION["kullanici_adi"];;  ?></h3>
          <strong><a href='guncelle.php'>Firmanızda/Kişisel bilgilerinizde değiklik yapmak için, firmanıza fotoğraf eklemek için tıklayınız.</a></strong><br><br>
          <?php include("../assets/baglanti.php");
    
                                    $sql = "SELECT * FROM kullanicilar WHERE kullanici_adi= '{$_SESSION['kullanici_adi']}'";
                                    $sonuc = $baglanti->query($sql);
                                    
                                    if($sonuc->num_rows>0){
                                        while($cek=$sonuc->fetch_assoc()){
                                            $hesabisil = $cek['id'];
                                        }
                                    }
                                    
                                
                                ?>
          <button type="button" class="btn btn-danger" onclick="hesabisil('<?php echo $hesabisil; ?>')">HESABI SİL</button>

        </div>
      </div>
    </div>
  </div>
  <div class="col-md-8 mt-1">
    <div class="card mb-3 content">
      <div class="card-body">
        <div class="row">

            <h5>E-posta:</h5>

          <div class="col-md-9 text-secondary">
            <?php
              
              include("../assets/baglanti.php");
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
      <h1 class="m-3">Firma Bilgilerim:</h1>
      <div class="card-body">
        <div class="row">
            <div class="protable">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Firma İsmi</th>
                                            <th>Firma Türü</th>
                                            <th>Firma Profilim</th>
                                            <th>Firmanın Profil Resmini Kaldır</th>
                                            <th>Firmana Fotoğraf Ekle</th>
                                            <th>Firmanı Sil</th>
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
                                        <?php include("../assets/baglanti2.php");
    
                                    $sql = "SELECT * FROM kabuledilen_sektor WHERE kullanici= '{$_SESSION['kullanici_adi']}'";
                                    $sonuc = $baglanti2->query($sql);
                                    
                                    if($sonuc->num_rows>0){
                                        while($cek=$sonuc->fetch_assoc()){
                                            echo "
    <tr>
        <td>".$cek['firma_ismi']."</td>
        <td>".$cek['firma_turu']."</td>
        <td><img src='../".$cek['firma_resim']."' width='200'></td>
        <td><button type='button' class='btn btn-secondary' onclick='confirmAd(".$cek['id'].")'>Kaldır</button></td>
        <td><button type='button' class='btn btn-success' onclick=\"Ad('".$cek['firma_ismi']."','".$cek['firma_turu']."')\">Ekle</button></td>
        <td><button type='button' class='btn btn-danger' onclick='confirmDel(".$cek['id'].")'>Sil</button></td>
    </tr>
";

                                        }
                                    }
                                    else{
                                        echo "hiç bir veri bulunamadı";
                                    }
                                
                                ?>
                                        
                                    </tbody>
                                </table>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                      
                                
                                
                                
                                
                                
            </div>
            
        </div>
      </div>
      
      
      
      
      
      
      
      
                                <div class="box_login">
                    <strong><h3>HESAP BİLGİLERİNİ GÜNCELLE/DEĞİŞTİR</h3></strong>
                     <!-- kayıt -->
                    <form action="profilim.php" method="POST">
                        <div class="form-group">
                            <h5>Kullanıcı Adınız:</h5>
                            <input type="text" id="username" name="kullaniciadi" class="form-control  
                            
                            <?php
                                
                                if(!empty($username_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" value="<?php echo $_SESSION["kullanici_adi"];?>" placeholder="Kullanıcı Adı">
                            <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $username_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>E-postanız:</h5>
                            <input type="text" placeholder="E-posta" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($email_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" value="<?php
                            
                            include("../assets/baglanti.php");
                            $sql1 = "SELECT * FROM kullanicilar WHERE kullanici_adi = '{$_SESSION['kullanici_adi']}'";
                            $sonuc = $baglanti->query($sql1);
                            if ($sonuc->num_rows > 0) {
                                $cek = $sonuc->fetch_assoc();
                                if(!empty($cek['email'])){
                                    echo $cek['email'];
                                }
                                else{
                                    echo 'Lüfen önce kayıt olunuz.';
                                }
                            }
                            
                            ?>" name="email" >
                            <span class="input-icon"><i class="icon_mail_alt"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $email_err;  ?>
                            </div>
                        </div>
                        
                        <div id="pass-info" class="clearfix"><a class ="guncellesifreyazi" href="../forgotpass.php" >Şifreni Değiştirmek İçin Buraya Tıkla</a></div>
                        <button  type="submit" name="kaydetkullanici" class="button_login">Gönder</button>
                        <h5>SADECE DEĞİŞTİRMEK İSTEDİĞİNİZ BİLGİLERİ DEĞİŞTİRİNİZ.</h5>
                    </form>
                </div>
                                
      
      
      
      
      <h1 id="firmaekle">Firma Ekle :</h1>
                                <div class="row">
            <div class="gizlekayit">
            </div>
            
                <div class="box_login">
                    <strong><h3>FİRMA BİLGİLERİ</h3></strong>
                     <!-- kayıt -->
                   <form action="profilim.php" method="POST">
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
                        <button  type="submit" name="kaydet" class="button_login">Gönder</button>
                    </form>
                </div>
            
        </div>

      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    </div>
  </div>
</div>


















<div class="wrapper">
  <div class="top-photos" >
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead><h3>Kabul Edilen Firma Fotoğraflarınız</h3>
                                        <tr>
                                            <th>Firma İsmi</th>
                                            <th>Firma Resim</th>
                                            <th>Firmanın Profil Resmini Seç</th>
                                            <th>Sil</th>
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
                                        <?php include("../assets/baglanti2.php");
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
                                        echo "Henüz Kabul Edilen Firma Fotoğrafınız Bulunmamaktadır.";
                                    }
                                
                                ?>
                                        
                                    </tbody>
                                </table>
                            
  </div>
  <div class="bottom-photos">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead><h3>Beklemede Olan Firma Fotoğraflarınız</h3>
                                        <tr>
                                            <th>Firma İsmi</th>
                                            <th>Firma Resim</th>
                                            <th>Sil</th>
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
                                        <?php include("../assets/baglanti2.php");
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
                                        echo "Henüz Firma Fotoğrafı Yüklememişsiniz Lütfen Yükleyiniz.";
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
    
    <script src="../js/kullanicijs/kullaniciislemleri.js"></script>
    
    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- GOOGLE map -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="../js/mapmarker.jquery.js"></script>
    <script type="text/javascript" src="../js/mapmarker_func.jquery.js"></script>

</body>

</html>