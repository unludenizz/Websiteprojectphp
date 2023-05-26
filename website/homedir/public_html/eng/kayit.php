<?php

include("../assets/baglanti.php");

$username_err="";
$email_err="";
$parola_err1="";
$parola_err2="";
if(isset($_POST["kaydet"])){
    
    
    
     //kullanıcı adı doğrulama
     
     
     
    $kullaniciadi = $_POST["kullaniciadi"];

    if (empty($kullaniciadi)) {
        $username_err = "Username place shouldn't be empty.";
    } 
    else if (strlen($kullaniciadi) < 5 || strlen($kullaniciadi) > 20) {
        $username_err = "Username should has 5-20 characters length.";
    } 
    else if (!preg_match("/^[a-zA-Z0-9_]+$/", $kullaniciadi)) {
        $username_err = "Username should only consist of letters (a-z), numbers (0-9) and underscore (_).";
    }
    else{
        $username = $kullaniciadi;
    }
    //kullanıcı adı doğrulama bitiş

    //email doğrulama
    
    
    
    
    $eposta = $_POST["email"];
    
    
    
    
    if (empty($eposta)) {
        $email_err="Email place shouldn't be empty.";
    }
    else if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format.";
    }
    else{
        $email = $eposta;
    }
    
    //email doğrulama bitiş
    
    
    
    //parola doğrulama
    $parola1 = $_POST["parola1"];
    $parola2 = $_POST["parola2"];
    
    if(empty($parola1)){
        $parola_err1 = "Password place shouldn't be empty.";
    }
    else if (strlen($parola1) < 5 || strlen($parola1) > 20) {
        $parola_err1 = "Your password should be 5-20 characters long.";
    } 
    else{
        $password1 = password_hash($parola1,PASSWORD_DEFAULT);
    }
    
    if(empty($parola2)){
        $parola_err2 = "Repeat password cannot be left blank.";
    }
    else if (strlen($parola2) < 5 || strlen($parola2) > 20) {
        $parola_err2 = "Your password should be 5-20 characters long.";
    }
    
    else if($parola1 != $parola2){
        $parola_err2 =" Passwords do not match.";
    }
    
    else{
        $password2 = $parola2;
    }

    
    //parola bitiş
    
    
    
    $kontrolid = mysqli_query($baglanti, "SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'");
    $kontrolmail= mysqli_query($baglanti, "SELECT * FROM kullanicilar WHERE email = '$email' ");
    
    if(mysqli_num_rows($kontrolid) > 0) {
        $message = "This username is already taken, enter another username.";
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
        echo $alert_box;
    }
    if(mysqli_num_rows($kontrolmail) > 0) {
        $message = "This e-mail is in use, please write another e-mail.";
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
        echo $alert_box;
    }
    
    
    
    else {
        
        if(isset($username) && isset($email) && isset($password1)){
            
        
        
        
        
        $ekle ="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$username','$email','$password1')";
        $calistirekle = mysqli_query($baglanti, $ekle);
        if($calistirekle){
        $message = "Registration Successful !";
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
        echo $alert_box;
        $url = "https://www.golhisarim.com.tr";
       $wait_time = 3;
        header("Refresh:$wait_time; url=$url");
        }
        else{
            $message = "Registration failed.";
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
        echo $alert_box;
            //echo mysqli_error($baglanti);
            }
        mysqli_close($baglanti);
    }
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
                            <option value="kayit" selectedPHP>English</option>
                            <option value="../kayit">Turkish</option>
                            <option value="../deu/kayit">German</option>
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
                    <strong><i class="icon_lock-open_alt"></i><h3>CREATE ACCOUNT</h3></strong>
                     <!-- kayıt -->
                    <form action="kayit.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="username" name="kullaniciadi" class="form-control  
                            
                            <?php
                                
                                if(!empty($username_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1"  placeholder="Username">
                            <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $username_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($email_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1" name="email" >
                            <span class="input-icon"><i class="icon_mail_alt"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $email_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($parola_err1)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" name="parola1">
                            <span class="input-icon"><i class="icon_lock_alt"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $parola_err1;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control 
                            
                            
                            <?php
                                
                                if(!empty($parola_err2)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" placeholder="Password" name="parola2">
                            <span class="input-icon"><i class="icon_lock_alt"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $parola_err2;  ?>
                            </div>
                        </div>
                        <a class ="uyelikyazi" href="giris.php" >Click here if you have account</a>
                        <div id="pass-info" class="clearfix"></div>
                        <button  type="submit" name="kaydet" class="button_login">Create new account</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End row -->
        <div class="row">
            <div class="col-md-12 text-center">
               © Gölhisar'ım 2023 - All rights reserved.
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