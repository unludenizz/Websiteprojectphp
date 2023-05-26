<?php


$servername = "";
$username = "";
$password = "";
$dbname = "";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}


// E-posta adresi ve token URL parametrelerinden alınır
$email = $_GET['email'];
$token = $_GET['token'];

// Veritabanında eşleşen bir kullanıcı ve token var mı kontrol edilir
$sql = "SELECT * FROM kullanicilar WHERE email='$email' AND token='$token'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Kullanıcının şifresi sıfırlanabilir
    $yenisifre= $_POST['sifre'];
    $yenisifree = password_hash($yenisifre,PASSWORD_DEFAULT);
    if (isset($_POST['submit'])) {    
    
     $sql = "UPDATE kullanicilar
SET parola = '$yenisifree'
WHERE email = '$email'";
    
    $result = $conn->query($sql);
    $message = "Das Passwort wurde geändert!";
    // Uyarı kutusu HTML kodu
    $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    // Uyarı kutusunu görüntüle
    echo $alert_box;
    
    $url = "https://www.golhisarim.com.tr/deu/giris.php";
    $wait_time = 3;
    header("Refresh:$wait_time; url=$url");
    
    
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $token = '';

      for ($i = 0; $i < 30; $i++) {
       $token .= $chars[mt_rand(0, strlen($chars) - 1)];
      }
        
        $sql = "UPDATE kullanicilar SET token='$token' WHERE email='$email'";
        $conn->query($sql);
    
    }
} else {
    // Eşleşen bir kullanıcı ve token yoksa, hata mesajı gösterilir
    
    
    $message = "Ungültiger Link zum Zurücksetzen des Passworts!";
    // Uyarı kutusu HTML kodu
    $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    // Uyarı kutusunu görüntüle
    echo $alert_box;
    
    $url = "https://www.golhisarim.com.tr/deu/index.php";
    $wait_time = 3;
    header("Refresh:$wait_time; url=$url");
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
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
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
                    <a href="index.php" id="logo">
                        <img src="../img/logo_login.png" width="170" height="30" alt="" data-retina="true">
                    </a>
                </div>
                <div class="col-xs-8">
                    <a href="index.php" class="btn_home pull-right"><i class="icon_house_alt"></i></a>
                    <div class="loginceviri">
                        <select class="form-control" name="lang" id="languages" onchange="onSelectLanguagePHP(this)">
                            <option value="reset" selected>Deutsch</option>
                            <option value="../eng/reset">Englisch</option>
                            <option value="../reset">Türkisch</option>
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
            <div class="gizlegiris">
                
                
            </div>
            <div class="col-lg-4 col-lg-offset-2 col-sm-6">
                <div class="box_login">
                     <!-- giriş -->
                    <form action=http://www.golhisarim.com.tr/deu/reset.php?email=<?php echo $email;?>&token=<?php echo $token;?> method="POST">
                    <strong><i class="icon_key_alt"></i><h3>Passwort zurücksetzen</h3></strong>
                    <div class="form-group">
                        <input type="text" name="sifre" class=" form-control " placeholder="Neues Kennwort">
                        <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                    </div>
                   
                   
                    <button type="submit" name="submit" onclick="openpopuppp()" class="button_login">ÄNDERN</button>
                    </form>
                </div>
            </div>
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
    <script src="../js/jquery-2.2.4.min.js"></script>
    <script src="../js/common_scripts_min.js"></script>
    <script src="../assets/validate.js"></script>
    <script src="../js/functions.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="../js/pw_strenght.js"></script>
    <script src="../js/infobox.js"></script>
    <script>
   setTimeout(function() {
  document.getElementById("ototikla").click();
   }, 5000); // 5 saniye sonra butona tıklanacak
</script>
</body>

</html>