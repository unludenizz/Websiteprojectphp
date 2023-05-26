<?php
session_start();
    if(isset($_SESSION["kullanici_adi"])){
        
    }
    else{
        header("location:../index.php");;
    }
    
$firmaismi = $_GET['firmaismi'];
$kategori = $_GET['kategori'];    
    
    
if(isset($_SESSION['kategori']) && isset($_SESSION['firmaismi'])){
        header("location:guncelle.php");
    }
//firma alanı başlangıç

include("../assets/baglanti2.php");













$firmaadi_err="";
$firmasahip_err="";
$firmatel_err="";
$firmaadres_err="";
$firmaeposta_err="";
$firma_turu_err="";

if(isset($_POST["kaydetfirma"])){


$kullanici = $_SESSION["kullanici_adi"];



$firmaadi = $_POST["firmaadi"];

   if (empty($firmaadi)) {
        $firmaadi_err = "Firma adı boş geçilemez.";
    } 
    else if (strlen($firmaadi) < 3 || strlen($firmaadi) > 20) {
        $firmaadi_err = "Firma adı 3-20 karakter uzunluğunda olmalıdır.";
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
else if (!preg_match("/^[a-zA-Z0-9_ğüşıöçĞÜŞİÖÇ ]+$/u", $firmasahip)) {
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
        echo $firmaturu;
    }



//////////////////////////////////////////////////////////////////////
$sql2 = "SELECT * FROM kabuledilen_sektor WHERE kullanici = '{$_SESSION['kullanici_adi']}'AND firma_ismi = '{$firmaismi}' AND firma_turu = '{$kategori}'";
$sonuc = $baglanti2->query($sql2);
if ($sonuc->num_rows > 0) {
    $cek = $sonuc->fetch_assoc();
if(!empty($cek['firma_sahip'])){
    $suankifirmaadi = $cek['firma_ismi'];
    $suankifirmasahip = $cek['firma_sahip'];
    $suankifirmatel = $cek['firma_tel'];
    $suankifirmaadres = $cek['firma_adres'];
    $suankifirmaeposta = $cek['firma_eposta'];
    $suankifirmaturu = $cek['firma_turu'];
    $firmaid = $cek['id'];
}}









if(empty($firmaadi_err) && empty($firmasahip_err) && empty($firmatel_err) && empty($firmaadres_err) && empty($firmaeposta_err) && empty($firma_turu_err))
{ 
    $kontrolfirmaadi = mysqli_query($baglanti2,"SELECT * FROM kabuledilen_sektor WHERE firma_ismi = '$firmaadii'");

    $kontrolfirmasahip= mysqli_query($baglanti2, "SELECT * FROM kabuledilen_sektor WHERE firma_sahip = '$firmasahipp'");

    $kontrolfirmatel = mysqli_query($baglanti2,"SELECT * FROM kabuledilen_sektor WHERE firma_tel = '$firmatell'");

    $kontrolfirmaadres= mysqli_query($baglanti2, "SELECT * FROM kabuledilen_sektor WHERE firma_adres = '$firmaadress'");

    $kontrolfirmaeposta = mysqli_query($baglanti2,"SELECT * FROM kabuledilen_sektor WHERE firma_eposta = '$firmaepostaa'");

    $kontrolfirmaturu= mysqli_query($baglanti2, "SELECT * FROM kabuledilen_sektor WHERE firma_turu = '$firma_turuu'");
    
    ////////////////////////////////////////////////////

    if(mysqli_num_rows($kontrolfirmaadi) > 0 && $firmaadii !== $suankifirmaadi) {
        $message = "Bu Firma ismi zaten alınmış başka bir Firma ismi yazınız.";
        $varmiFirmaİsmi=1;
    }
    $kontroltur = mysqli_query($baglanti2, "SELECT * FROM kabuledilen_sektor WHERE firma_turu = '$firma_turuu' AND firma_ismi = '$firmaadii'");
    
    if(mysqli_num_rows($kontrolfirmaturu) > 0 && $firma_turuu !== $suankifirmaturu && mysqli_num_rows($kontroltur) > 0) {
        $message = "Bu firma türü adına firma ismi zaten kayıtlı başka bir firma türü yazınız veya firma adınızı değiştiriniz.";
        $varmiFirmaTuru=1;
    }
    
    
    
    
    if ($varmiFirmaİsmi==1 || $varmiFirmaSahip==1 || $varmiFirmaTel==1 || $varmiFirmaAdres==1 || $varmiFirmaEposta==1 || $varmiFirmaTuru==1) {
    $message = "Hatalar:\n";
    $message .= "<br>";
    
    if ($varmiFirmaİsmi==1) {
        $message .= "- Bu isimde bir firma zaten kayıtlı.\n";
        $message .= "<br>";
    }
    
    if ($varmiFirmaTuru==1) {
        $message .= "- Bu firma türü başka bir firmanın adı ile kayıt edilmiş başka bir firma turu seçiniz veya firma adınızı değiştiriniz.";
    }
    if(isset($message)){
            $alert_box = "<div class='alertt'><div class='alertt-box'><span class       ='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
            echo $alert_box;
        }

}
$say =0;
    if(mysqli_num_rows($kontrolfirmaadi) > 0 && $firmaadii == $suankifirmaadi) {
            $firmaadii = "-";
            $say+=1;
            }
    if(mysqli_num_rows($kontrolfirmasahip) > 0 && $firmasahipp == $suankifirmasahip) {
            $firmasahipp = "-";
            $say+=1;
            }
    if(mysqli_num_rows($kontrolfirmatel) > 0 && $firmatell == $suankifirmatel) {
            $firmatell = "-";
            $say+=1;
            }
    if(mysqli_num_rows($kontrolfirmaadres) > 0 && $firmaadress == $suankifirmaadres) {
            $firmaadress = "-";
            $say+=1;
            }
    if(mysqli_num_rows($kontrolfirmaeposta) > 0 && $firmaepostaa == $suankifirmaeposta) {
            $firmaepostaa = "-";
            $say+=1;
            }
    if(mysqli_num_rows($kontrolfirmaturu) > 0 && $firma_turuu == $suankifirmaturu) {
            $firma_turuu = "-";
            $say+=1;
            }
    echo $firmaadii;
    echo $firmasahipp;
    echo $firmatell;
    echo $firmaadress;
    echo $firmaepostaa;
    echo $firma_turuu;



if(isset($firmaadii) && isset($firmasahipp) && isset($firmatell) && isset($firmaadress) && isset($firmaepostaa) && isset($firma_turuu) && $varmiFirmaİsmi ==0 && $varmiFirmaSahip ==0 && $varmiFirmaTel ==0 && $varmiFirmaAdres ==0 && $varmiFirmaEposta ==0 && $varmiFirmaTuru ==0 && $say!=6){
                $ekle ="INSERT INTO guncellefirma (firma_ismi, firma_sahip, firma_tel, firma_adres, firma_eposta, firma_turu, guncelismi, guncelsahip, gunceltel, gunceladres, gunceleposta, guncelturu, kullanici, firma_id) VALUES ('$firmaadii','$firmasahipp', '$firmatell', '$firmaadress', '$firmaepostaa', '$firma_turuu', '$suankifirmaadi', '$suankifirmasahip','$suankifirmatel','$suankifirmaadres','$suankifirmaeposta', '$suankifirmaturu', '$kullanici', '$firmaid')";
                $calistirekle = mysqli_query($baglanti2, $ekle);
                if($calistirekle){
                
                $message = "Güncelleme İstekleriniz İncelenmek Üzere Gönderilmiştir.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
            }
                else{
                    
                    $message = "Güncelleme İsteğiniz Gönderilememiştir Formu Kontrol Edip Tekrar Deneyiniz.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                    
                    
                    mysqli_query($baglanti2, $ekle) or die(mysqli_error($baglanti2));
                    //echo mysqli_error($baglanti);
                    }
                mysqli_close($baglanti2);  
                
            }
else{
    $message = "Ne yazık ki şu an kullandığınız bilgileri yazdığınız için güncelleme isteğiniz red edilmiştir";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
}
            
            
       
            


}












}

//firma alanı bitiş
?>


<!DOCTYPE html>
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<html>

<head>
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
                  <!-- <div class="loginceviri">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="guncellefirma" selected>Türkçe</option>
                            <option value="../eng/giris/guncellefirma">İngilizce</option>
                            <option value="../deu/giris/guncellefirma">Almanca</option>
                        </select>
                    </div>-->
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </header>
    <!-- End Header =============================================== -->

    <div class="container margin_30">
        <div class="row">
            <div class="gizlegiris">
                
                
            </div>
            <div class="bilgilendirme">
                    <strong><h3>SADECE DEĞİŞTİRMEK İSTEDİĞİNİZ BİLGİLERİ DEĞİŞTİRİNİZ.</h3></strong>
                    </div>
            <div class="col-lg-4 col-lg-offset-2 col-sm-6">
                <div class="box_login">
                    <strong><h3>FİRMA BİLGİLERİNİ GÜNCELLE/DEĞİŞTİR</h3></strong>
                     <!-- kayıt -->
                   <form action="guncellefirma.php?firmaismi=<?php echo $firmaismi?>&kategori=<?php echo $kategori?>" method="POST">
                       <h5>Firma Adı:</h5>
                        <div class="form-group">
                            
                            <input type="text" id="username" name="firmaadi" class="form-control  
                            
                            <?php
                                
                                if(!empty($firmaadi_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" value="<?php echo $firmaismi; ?>" placeholder="Firma Adı">
                            <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmaadi_err;  ?>
                            </div>
                        </div>
                        <h5>Firma Sahibi:</h5>
                        <div class="form-group">
                            
                            <input type="text" placeholder="Firma Sahibi" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmasahip_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" value="<?php
                            
                            include("../assets/baglanti2.php");
                            $sql1 = "SELECT * FROM kabuledilen_sektor 
                            WHERE kullanici = '{$_SESSION['kullanici_adi']}'
                            AND firma_ismi = '{$firmaismi}' 
                            AND firma_turu = '{$kategori}'";
                            $sonuc = $baglanti2->query($sql1);
                            if ($sonuc->num_rows > 0) {
                                $cek = $sonuc->fetch_assoc();
                                if(!empty($cek['firma_sahip'])){
                                    echo $cek['firma_sahip'];
                                }
                                else{
                                    header("location:guncelle.php");
                                }
                            }
                            else{
                                //header("location:guncelle.php");
                            }
                            
                            ?>" name="firmasahip" >
                            <span class="input-icon"><i class="icon-person"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmasahip_err;  ?>
                            </div>
                        </div>
                        <h5>Firma Telefonu:</h5>
                        <div class="form-group">
                            
                            <input type="text" placeholder="Firma Telefon" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmatel_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" value="<?php echo $cek['firma_tel'];?>" name="firmatel">
                            <span class="input-icon"><i class="icon_phone"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmatel_err;  ?>
                            </div>
                        </div>
                        <h5>Firma Adresi:</h5>
                        <div class="form-group">
                            
                            <input type="text" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmaadres_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" value="<?php echo $cek['firma_adres'];?>" placeholder="Firma Adresi" name="firmaadres">
                            <span class="input-icon"><i class="icon-address-book"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmaadres_err;  ?>
                            </div>
                        </div>
                        <h5>Firma E-posta:</h5>
                        <div class="form-group">
                            
                            <input type="text" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($firmaeposta_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" value="<?php echo $cek['firma_eposta'];?>" placeholder="Firma E-posta adresi" name="firmaeposta">
                            <span class="input-icon"><i class="icon_mail_alt"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmaeposta_err;  ?>
                            </div>
                        </div>
                        <h5>Firma Kategoriniz:</h5>
                        <div class="form-group">
                            <select class="form-control
                            
                            
                            <?php
                                
                                if(!empty($firma_turu_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " aria-label="Default select example" name="firmaturu">
                                <span class="input-icon"><i class="icon-down-2"></i></span>
                            <option value="banka-ve-finans" <?php if($kategori === 'banka-ve-finans') echo 'selected'; ?>>Banka ve Finans</option>
                              <option value="hizmet-sektoru" <?php if($kategori === 'hizmet-sektoru') echo 'selected'; ?>>Hizmet Sektörü</option>
                              <option value="egitim" <?php if($kategori === 'egitim') echo 'selected'; ?>>Eğitim</option>
                              <option value="ev-bahce-ve-dekorasyon" <?php if($kategori === 'ev-bahce-ve-dekorasyon') echo 'selected'; ?>>Ev, Bahçe ve Dekorasyon</option>
                              <option value="otomotiv" <?php if($kategori === 'otomotiv') echo 'selected'; ?>>Otomotiv</option>
                              <option value="saglik" <?php if($kategori === 'saglik') echo 'selected'; ?>>Sağlık</option>
                              <option value="resmi-kurumlar" <?php if($kategori === 'resmi-kurumlar') echo 'selected'; ?>>Resmi Kurumlar</option>
                              <option value="yeme-icme" <?php if($kategori === 'yeme-icme') echo 'selected'; ?>>Yeme-İçme</option>
                              <option value="giyim-moda" <?php if($kategori === 'giyim-moda') echo 'selected'; ?>>Giyim-Moda</option>
                              <option value="iletisim" <?php if($kategori === 'iletisim') echo 'selected'; ?>>İletişim</option>
                              <option value="insaat" <?php if($kategori === 'insaat') echo 'selected'; ?>>İnşaat</option>
                              <option value="konaklama-turizm" <?php if($kategori === 'konaklama-turizm') echo 'selected'; ?>>Konaklama-Turizm</option>
                            </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    <?php echo $firma_turu_err;  ?>
                            </div>
                        </div>
                        <h5></h5>
                        <h5>Firma Resmi:</h5>
                        <div class="form-group">
                            <div class="resimalani">
                                <img class="img-responsive" src="../<?php echo $cek[firma_resim] ?>"
                            </div>
                        </div>
                        <div class="resimalani">
                            <a href = "resimekle.php?firmaismi=<?php echo $firmaismi?>&kategori=<?php echo $kategori?>"><h5>Fotoğraf İşlemleri İçin Buraya Tıklayınız.</h5></a>
                        </div>
                        <div>
                            
                        </div>
                        <div id="pass-info" class="clearfix"></div>
                        <button  type="submit" name="kaydetfirma" class="button_login">Gönder</button>
                    </form>
                </div>
            </div>
            
        </div>
        
        
        <div class="bilgilendirme1">
                    
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
    <script src"../js/firmaguncelle.js"></script>

    
    
   

</body>

</html>