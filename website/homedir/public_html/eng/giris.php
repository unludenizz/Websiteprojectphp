<?php

include("../assets/baglanti.php");

$username_err="";
$parola_err="";
if(isset($_POST["giris"])){
    
    
    
     //kullanıcı adı doğrulama
     
     
     
    $kullaniciadi = $_POST["kullaniciadi"];

    if (empty($kullaniciadi)) {
        $username_err = "Kullanıcı adı boş geçilemez.";
    } 
    else{
        $username = $kullaniciadi;
    }
    //kullanıcı adı doğrulama bitiş


    //parola doğrulama
    $parola1 = $_POST["parola"];

    
    if(empty($parola1)){
        $parola_err = "Parola boş geçilemez.";
    }
    
    else{
        $password1 = $parola1;
    }
    //parola bitiş
    
    
    
    
    

    if(isset($username) && isset($password1)){
            
        $secim = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
        $calistir = mysqli_query($baglanti,$secim);
        $kayitsayisi = mysqli_num_rows($calistir);
        
        if($kayitsayisi>0){
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $sifre = $ilgilikayit["parola"];
            
            if(password_verify($password1,$sifre)){
                session_start();
                $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
                $_SESSION["email"] = $ilgilikayit["email"];
                header("location:giris/profile.php");
            }
            else{
                
                 $message = "Password is incorrect!";
    
          $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    
            echo $alert_box;
            }
        }
        
        else{
            
            
             $message = "Username is incorrect!";
    
          $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    
            echo $alert_box;
        }
            
            
            
            
    mysqli_close($baglanti);
}
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
                            <option value="giris" selected>English</option>
                            <option value="../giris">Turkish</option>
                            <option value="../deu/giris">German</option>
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
                    <form action="giris.php" method="POST">
                    <strong><i class="icon_key_alt"></i><h3>Login</h3></strong>
                    <div class="form-group">
                        <input type="text" name="kullaniciadi" class=" form-control " placeholder="Username">
                        <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                    </div>
                    <div class="form-group" style="margin-bottom:5px;">
                        <input type="password" class="form-control" placeholder="Password" name="parola" style="margin-bottom:5px;">
                        <span class="input-icon"><i class="icon_lock_alt"></i></span>
                    </div>
                    <p class="small">
                        <a href="forgotpass.php">Click here if you forget your Password.</a>
                    </p>
                    <p class="small">
                        <a href="kayit.php">Click here if you don't have account.</a>
                    </p>
                    <button type="submit" name="giris" class="button_login">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-12 text-center">
               © Gölhisar'ım 2023 - All Rights Reserved.
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