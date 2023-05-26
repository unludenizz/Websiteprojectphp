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


<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">

    <!-- BASE CSS -->
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link href="../css/menu.css" rel="stylesheet">
    
    <!-- YOUR CUSTOM CSS -->
    <link href="../css/custom.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body id="login">

    <!--[if lte IE 8]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
    <![endif]-->

    <!-- Header ================================================== -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4">
                    <a href="profile.php" id="logo">
                        <img src="../img/logo_login.png" width="170" height="30" alt="" data-retina="true">
                    </a>
                </div>
                <div class="col-xs-8">
                    <a href="profile.php" class="btn_home pull-right"><i class="icon_house_alt"></i></a>
                   <div class="loginceviri">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="sektorekle" selected>Türkçe</option>
                            <option value="../eng/giris/sektorekle">İngilizce</option>
                            <option value="../deu/giris/sektorekle">Almanca</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </header>
    <!-- End Header =============================================== -->

    <div class="container margin_30">
        
         <div class="row">
            <div class="gizlekayit">
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box_login">
                    <strong><h3>FİRMA BİLGİLERİ</h3></strong>
                     <!-- kayıt -->
                   <form action="sektorekle.php" method="POST">
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
        
        
        
        <!-- End row -->
        <div class="row">
            <div class="col-md-12 text-center">
               © Gölhisar'ım 2023 - Tüm Hakları Saklıdır.
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- COMMON SCRIPTS -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/common_scripts_min.js"></script>
    <script src="../assets/validate.js"></script>
    <script src="../js/functions.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="../js/pw_strenght.js"></script>
    <script src="../js/infobox.js"></script>
   
</body>

</html>