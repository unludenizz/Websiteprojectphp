<?php
session_start();
    if(isset($_SESSION["kullanici_adi"])){
        
    }
    
    else{
        header("location:../index.php");
    }
   
$kategori = $_GET["kategori"];
$firmaismi = $_GET["firmaismi"];
$kullanici = $_SESSION["kullanici_adi"];




include("../assets/baglanti2.php");
    $sql2 = "SELECT * FROM kabuledilen_sektor WHERE kullanici =     '{$_SESSION['kullanici_adi']}'AND firma_ismi = '{$firmaismi}' AND firma_turu     = '{$kategori}'";
    $sonuc = $baglanti2->query($sql2);
    if ($sonuc->num_rows > 0) {
        $cek = $sonuc->fetch_assoc();
    if(!empty($cek['firma_sahip'])){
        $firmaid= $cek['id'];
    }}


include("../assets/baglanti2.php");
$sql3 = "SELECT firma_resim_sayisi FROM fotolar WHERE firma_id = $firmaid";
$sonuc1 = mysqli_query($baglanti2, $sql3);



if (mysqli_num_rows($sonuc1) > 0) {
    while($cek = mysqli_fetch_assoc($sonuc1)) {
        $resimsayisi += $cek["firma_resim_sayisi"] ;
    }
} 

$resimsayisi = $resimsayisi;

 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $resimDosyaAdi = $_FILES['resim']['name'];
    $resimDosyaBoyutu = $_FILES['resim']['size'];
    $resimGeciciAdi = $_FILES['resim']['tmp_name'];
    $resimTipi = $_FILES['resim']['type'];
  // resmin kaydedileceği dizin
  
    $hedefDizin = "../img/kullanicifotograflari/";
    $hedefDizin1 = "img/kullanicifotograflari/";
    
    $resimUzantisi = pathinfo($resimDosyaAdi, PATHINFO_EXTENSION);

    include("../assets/baglanti2.php");
    $sql2 = "SELECT * FROM kabuledilen_sektor WHERE kullanici =     '{$_SESSION['kullanici_adi']}'AND firma_ismi = '{$firmaismi}' AND firma_turu     = '{$kategori}'";
    $sonuc = $baglanti2->query($sql2);
    if ($sonuc->num_rows > 0) {
        $cek = $sonuc->fetch_assoc();
    if(!empty($cek['firma_sahip'])){
        $firmaid= $cek['id'];
    }}
    mysqli_close($baglanti2);

    include("../assets/baglanti2.php");
$sql3 = "SELECT firma_resim_sayisi FROM fotolar WHERE firma_id = $firmaid";
$sonuc1 = mysqli_query($baglanti2, $sql3);

    $simdi = date("Y-m-d H:i:s");
    if($resimsayisi<10){
        // yeni dosya adını oluştur
        $resimsayisi+=1;
        $yeniDosyaAdi = $firmaid ."-". $simdi. "." . $resimUzantisi;
        
        // resmin kaydedileceği tam dosya yolu
        
        $hedefDosya = $hedefDizin . $yeniDosyaAdi;
        $hedefDosya1 = $hedefDizin1 . $yeniDosyaAdi;
        
        $sql4 = "INSERT INTO fotolar (firma_id, firma_resim, firma_resim_sayisi, kullanici, firma_ismi) VALUES ('$firmaid', '$hedefDosya1', 1, '$kullanici', '$firmaismi')";
            
        if (mysqli_query($baglanti2, $sql4) && move_uploaded_file($resimGeciciAdi, $hedefDosya)) {
    $message = "Yeni fotoğraf başarıyla eklendi.";
    header("refresh:1;url=#");
    $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt(); '>×</span>$message</div></div>";
        
    echo $alert_box;
    
    
}
 else {
        }
        } else {
            
            $message = "Fotoğraf Ekleme Hakkınız Dolmuştur Lütfen Önce Fotoğraflarınızı Siliniz. ";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
        }

    // Veritabanı bağlantısını kapatma
    mysqli_close($baglanti2);
        
    }

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
                   <!--<div class="loginceviri">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="resimekle" selected>Türkçe</option>
                            <option value="../eng/giris/resimekle">İngilizce</option>
                            <option value="../deu/giris/resimekle">Almanca</option>
                        </select>
                    </div> -->
                </div>
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </header>
    <!-- End Header =============================================== -->

    <div class="container margin_30">
        <div class="row">
        </div>
        <div class="row">
            <div class="bilgilendirme">
                    
                    </div>
            <div class="col-lg-4 col-lg-offset-2 col-sm-6">
                <div class="box_login">
                    <strong><h3>FİRMANIZIN FOTOĞRAFINI EKLEYİNİZ</h3></strong>
                     <!-- kayıt -->
                    <form action="resimekle.php?firmaismi=<?php echo $firmaismi?>&kategori=<?php echo $kategori?>" method="POST" enctype="multipart/form-data">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="file" name="resim" accept="image/*" capture="user" value="" onchange="this.setCustomValidity('')" oninvalid="this.setCustomValidity('Lütfen bir resim dosyası seçin.')" required>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h4><input type="submit" value="Fotoğraf Ekle"></h4>
                    </form>
                    <h5>Kalan Fotoğraf Hakkınız:<?php echo 10-$resimsayisi;?></h5>
                </div>
            </div>
            
            
        </div>
        
        
        <div class="bilgilendirme1">
                    <strong></strong>
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