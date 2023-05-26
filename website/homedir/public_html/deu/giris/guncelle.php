<?php
session_start();
    if(isset($_SESSION["kullanici_adi"])){
        
    }
    
    else{
        header("location:../index.php");;
    }
//kullanıcı alanı başlangıç
include("../../assets/baglanti.php");

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
        $username_err = "Benutzername darf nicht leer sein.";
    } 
    else if (strlen($kullaniciadi) < 5 || strlen($kullaniciadi) > 20) {
        $username_err = "Der Benutzername muss 5-20 Zeichen lang sein.";
    } 
    else if (!preg_match("/^[a-zA-Z0-9_ğüşıöçĞÜŞİÖÇ ]+$/u", $kullaniciadi)) {
        $username_err = "Der Benutzername sollte nur aus Buchstaben (a-z), Zahlen (0-9) und Unterstrich (_) bestehen.";
    }
    else{
        $username = $kullaniciadi;
    }
    //kullanıcı adı doğrulama bitiş

    //email doğrulama
    
    
    
    
    $eposta = $_POST["email"];
    
    
    
    
    if (empty($eposta)) {
        $email_err="Das E-Mail-Feld darf nicht leer sein.";
    }
    else if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Ungültiges Email-Format.";
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
            $message = "Dieser Benutzername ist bereits vergeben, geben Sie einen anderen Benutzernamen ein.";
            $varmik=1;
        }   

        if(mysqli_num_rows($kontrolmail) > 0 && $email != $suankimail ) {
            $message = "Diese E-Mail wird verwendet, bitte schreiben Sie eine andere E-Mail.";
            $varmie=1;
        }

        if($varmik==1 && $varmie==1){
            $message = "Dieser Benutzername und diese E-Mail-Adresse werden bereits verwendet. Bitte geben Sie einen anderen Benutzernamen und eine andere E-Mail-Adresse ein.";
        } elseif($varmik==1){
            $message = "Dieser Benutzername ist bereits vergeben, geben Sie einen anderen Benutzernamen ein."       ;
        }       elseif($varmie==1){
            $message = "Diese E-Mail wird verwendet, bitte schreiben Sie eine andere E-Mail.
";
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
                
                $message = "Ihre Aktualisierungsanfragen wurden zur Überprüfung gesendet.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
            }
                else{
                    
                    $message = "Ihre Aktualisierungsanfrage konnte nicht gesendet werden. Bitte überprüfen Sie das Formular und versuchen Sie es erneut.";
        
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
                
                    $message = "Ihre E-Mail-Aktualisierungsanfrage wurde zur Überprüfung gesendet.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box; 
                    
                    
                }
                else{
                    
                     $message = "Ihre Aktualisierungsanfrage konnte nicht gesendet werden. Bitte überprüfen Sie das Formular und versuchen Sie es erneut.";
        
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
                
                    $message = "Ihre Anfrage zur Aktualisierung Ihres Benutzernamens wurde zur Überprüfung gesendet.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                    
                    
                    
                    
                    
                    
                }
                else{
                    
                    $message = "Ihre Aktualisierungsanfrage konnte nicht gesendet werden. Bitte überprüfen Sie das Formular und versuchen Sie es erneut.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                    
                    
                    
                    
                    mysqli_query($baglanti, $ekle) or die(mysqli_error($baglanti));
                    //echo mysqli_error($baglanti);
                    }
                mysqli_close($baglanti);  
                
            }
            if(!isset($username) && !isset($email) && $varmie==0 && $varmik ==0){
                
                $message = "Leider wurde Ihre Aktualisierungsanfrage abgelehnt, weil Sie die Informationen geschrieben haben, die Sie derzeit verwenden.";
        
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
    
        
        echo $alert_box;
                
                
            }
        mysqli_close($baglanti);
    }
}
//kullanıcı alanı bitiş





//firma alanı başlangıç



include("../../assets/baglanti2.php");


$firmaadi_err="";
$firmasahip_err="";
$firmatel_err="";
$firmaadres_err="";
$firmaeposta_err="";
$firma_turu_err="";

if(isset($_POST["kaydetfirma"])){


$kullanici = $_SESSION["kullanici_adi"];









$firma_turu = $_POST["firmaturu"];

if(empty($firma_turu)){
    $firma_turu_err="Lütfen seçiminizi yapınız.";
    }else{
        $firma_turuu = $firma_turu;
    }
}

//firma alanı bitiş
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
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,300" rel="stylesheet" type="text/css">

    <!-- BASE CSS -->
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="../../css/menu.css" rel="stylesheet">
    <link href="../../css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link href="../../css/menu.css" rel="stylesheet">
    
    <!-- YOUR CUSTOM CSS -->
    <link href="../../css/custom.css" rel="stylesheet">

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
                        <img src="../../img/logo_login.png" width="170" height="30" alt="" data-retina="true">
                    </a>
                </div>
                <div class="col-xs-8">
                    <a href="profile.php" class="btn_home pull-right"><i class="icon_house_alt"></i></a>
                   <div class="loginceviri">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="guncelle" selected>Deutsch</option>
                            <option value="../../eng/giris/guncelle">Englisch</option>
                            <option value="../../giris/guncelle">Türkisch</option>
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
            <div class="bilgilendirme">
                    
                    </div>
            <div class="col-lg-4 col-lg-offset-2 col-sm-6">
                <div class="box_login">
                    <strong><h3>KONTOINFORMATIONEN AKTUALISIEREN/ÄNDERN</h3></strong>
                     <!-- kayıt -->
                    <form action="guncelle.php" method="POST">
                        <div class="form-group">
                            <h5>Dein Benutzername:</h5>
                            <input type="text" id="username" name="kullaniciadi" class="form-control  
                            
                            <?php
                                
                                if(!empty($username_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" value="<?php echo $_SESSION["kullanici_adi"];?>" placeholder="Nutzername">
                            <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $username_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <h5>E-Mail:</h5>
                            <input type="text" placeholder="E-Mail" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($email_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" value="<?php
                            
                            include("../../assets/baglanti.php");
                            $sql1 = "SELECT * FROM kullanicilar WHERE kullanici_adi = '{$_SESSION['kullanici_adi']}'";
                            $sonuc = $baglanti->query($sql1);
                            if ($sonuc->num_rows > 0) {
                                $cek = $sonuc->fetch_assoc();
                                if(!empty($cek['email'])){
                                    echo $cek['email'];
                                }
                                else{
                                    echo 'Bitte registrieren Sie sich zuerst.';
                                }
                            }
                            
                            ?>" name="email" >
                            <span class="input-icon"><i class="icon_mail_alt"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $email_err;  ?>
                            </div>
                        </div>
                        
                        <div id="pass-info" class="clearfix"><a class ="guncellesifreyazi" href="../forgotpass.php" >Klicken sie hier, um ihr Passwort zu ändern</a></div>
                        <button  type="submit" name="kaydetkullanici" class="button_login">Schicken</button>
                        <h5>ÄNDERN SIE NUR DIE INFORMATIONEN, DIE SIE ÄNDERN WOLLEN.</h5>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="box_login">
                    <strong><h3>UNTERNEHMENSINFORMATIONEN AKTUALISIEREN/ÄNDERN</h3></strong>
                     <!-- kayıt -->
                   <form action="guncelle.php" method="POST">
                       <div class="form-group">
                            <select class="form-control" aria-label="Default select example" id="select" name="firmaturu">
                                <span class="input-icon"><i class="icon-down-2"></i></span>
                              
                              <?php
                              include("../../assets/baglanti2.php");
                              $sayac=1;
                                $sql = "SELECT * FROM kabuledilen_sektor WHERE kullanici = '{$_SESSION['kullanici_adi']}'";
                                $sonuc = $baglanti2->query($sql);
                                
                                if ($sonuc->num_rows > 0) {
                                echo '<option value="">Wählen Sie Ihr Unternehmen.</option>';
                                  while ($cek = $sonuc->fetch_assoc()) {
                                    echo '<option value="'.$cek['firma_turu'].'">'.$cek['firma_ismi'].' &nbsp;&nbsp;&nbsp;</option>';
                                    $sayac+=1;
                                  }
                                } else {
                                  echo '<option value="">Ihr Unternehmen existiert nicht.</option>';
                                }
                              ?>
                            </select>
                            <div><h5><a href="sektorekle.php"> Klicken Sie auf Unternehmen hinzufügen.</a></h5></div>
                        <div class="aralik2"></div>
                        <div class="aralik"><h5>Um Ihre Unternehmensinformationen zu ändern, wählen Sie zunächst Ihr Unternehmen aus.</h5></div>    

                        <div class="aralik1"><h5>Lassen Sie das Feld leer, wo Sie es nicht ändern möchten.</h5></div>    
                            
                    </form>
                </div>
            </div>
            
        </div>
        
        
        <div class="bilgilendirme1">
                    <strong></strong>
                    </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-12 text-center">
               © Gölhisar'ım 2023 - Alle Rechte vorbehalten.
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
    <!-- validation -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- COMMON SCRIPTS -->
    <script src="../../js/jquery-2.2.4.min.js"></script>
    <script src="../../js/common_scripts_min.js"></script>
    <script src="../../assets/validate.js"></script>
    <script src="../../js/functions.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="../../js/pw_strenght.js"></script>
    <script src="../../js/infobox.js"></script>
    <script src"../../js/firmaguncelle.js"></script>
    
    
    <script>
        const selectElement = document.querySelector('select[name="firmaturu"]');
selectElement.addEventListener('change', function() {
  const selectedOption = this.options[this.selectedIndex];
  const kategori = selectedOption.value;
  const selectedText = selectedOption.textContent.trim();
  const firmaismi = selectedText;
  console.log(firmaismi); // "yemek"
  console.log(kategori); // "yeme-icme"

  confirmAdd(firmaismi,kategori);
});

function confirmAdd(firmaismi,kategori) {
  var result = "a";
  if (result) {
   window.location.href = "guncellefirma.php?firmaismi=" + firmaismi+ "&kategori=" + kategori;
  }
}
    </script>


    
    
    
   

</body>

</html>