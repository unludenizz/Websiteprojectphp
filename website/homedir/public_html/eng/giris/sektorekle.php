<?php
include("../../assets/baglanti2.php");
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
        $firmaadi_err = "Company name cannot be blank.";
    } 
    else if (strlen($firmaadi) < 3 || strlen($firmaadi) > 30) {
        $firmaadi_err = "Company name should be 3-30 characters long.";
    } 
    else if (!preg_match("/^[a-zA-Z0-9_ğüşıöçĞÜŞİÖÇ ]+$/u", $firmaadi)) {
        $firmaadi_err = "Company name should only consist of letters (a-z), numbers (0-9) and underscore (_).";
    }
    else{
        $firmaadii = $firmaadi;
    }
    

$firmasahip = $_POST["firmasahip"];

if (empty($firmasahip)) {
        $firmasahip_err = "Company owner name cannot be blank.";
    } 
else if (strlen($firmasahip) < 3 || strlen($firmasahip) > 40) {
        $firmasahip_err = "Company owner name should be 3-40 characters long.";
    }
else if (!preg_match("/^[a-zA-ZğüşıöçĞÜŞİÖÇ ]+$/u", $firmasahip)) {
        $firmasahip_err = "Company owner name should only consist of letters (a-z).";
    }
else{
        $firmasahipp = $firmasahip;
    }






$firmatel = $_POST["firmatel"];

if (empty($firmatel)) {
        $firmatel_err = "Company Phone cannot be left blank.";
    } 
else if (strlen($firmatel) < 8 || strlen($firmatel) > 15) {
       $firmatel_err = "Company Phone should be 8-15 characters long.";
    }
else if (!preg_match("/^[0-9+]+$/", $firmatel)) {
        $firmatel_err = "Company Phone should only consist of numbers (0-9).";
    }
else{
        $firmatell = $firmatel;
    }










$firmaadres = $_POST["firmaadres"];

if (empty($firmaadres)) {
        $firmaadres_err = "Company Phone should only consist of numbers (0-9).";
    } 
else if (strlen($firmaadres) < 8 || strlen($firmaadres) > 80) {
       $firmaadres_err = "Company Address should be 8-80 characters long.";
    }
else{
        $firmaadress = $firmaadres;
    }









$firmaeposta = $_POST["firmaeposta"];

 if (empty($firmaeposta)) {
        $firmaeposta_err="Email field cannot be empty.";
    }
    else if (!filter_var($firmaeposta, FILTER_VALIDATE_EMAIL)) {
        $firmaeposta_err = "Invalid email format.";
    }
    else{
        $firmaepostaa = $firmaeposta;
    }




$firma_turu = $_POST["firmaturu"];

if(empty($firma_turu)){
    $firma_turu_err="Please make your selection.";
    }else{
        $firma_turuu = $firma_turu;
    }
$varmif = 0;
if(empty($firmaadi_err))
   {
       $kontrolfirmaismi = mysqli_query($baglanti2,"SELECT * FROM kabuledilen_sektor WHERE firma_ismi = '$firmaadii'");
       if(mysqli_num_rows($kontrolfirmaismi) > 0) {
            $message = "This company name is already taken, enter another company name.";
            
            $varmif+=1;
            $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
            echo $alert_box;
        }
       
}

if(isset($firmaadii) && isset($firmasahipp) && isset($firmatell) && isset($firmaadress) && isset($firmaepostaa) && isset($firma_turuu) && $varmif === 0){

   $ekle ="INSERT INTO sektorekle (firma_ismi, firma_sahip, firma_tel, firma_adres, firma_eposta, firma_turu, kullanici) VALUES ('$firmaadii', '$firmasahipp', '$firmatell', '$firmaadress', '$firmaepostaa', '$firma_turuu', '$kullanici')";
        $calistirekle = mysqli_query($baglanti2, $ekle);
        if($calistirekle){
        
            $message = "Registration Successful!";
    
    $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";

    
    echo $alert_box;
            
            
            
        }
        else{
            $message = "Registration Failed.";
    
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
    <link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="../img/apple-touch-icon-57x57-precomposed.png">
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
                            <option value="sektorekle" selected>English</option>
                            <option value="../../giris/sektorekle">Turkish</option>
                            <option value="../../deu/giris/sektorekle">German</option>
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
                    <strong><h3>COMPANY INFO</h3></strong>
                     <!-- kayıt -->
                   <form action="sektorekle.php" method="POST">
                        <div class="form-group">
                            <input type="text" id="username" name="firmaadi" class="form-control  
                            
                            <?php
                                
                                if(!empty($firmaadi_err)){
                                    echo "is-invalid";
                                }
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            " id="exampleInputEmail1"  placeholder="Company Name">
                            <span class="input-icon"><i class="icon_pencil-edit"></i></span>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?php echo $firmaadi_err;  ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Company owner" class="form-control 
                            
                            
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
                            <input type="text" placeholder="Company Phone" class="form-control 
                            
                            
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
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" placeholder="Company address" name="firmaadres">
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
                            
                            
                            
                            
                            
                            " id="exampleInputPassword1" placeholder="Company Email address" name="firmaeposta">
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
                              <option value="">Please select the appropriate industry for your company below.</option>
                              <option value="banka-ve-finans">Banking and Finance</option>
                              <option value="hizmet-sektoru">Service industry</option>
                              <option value="egitim">Education</option>
                              <option value="ev-bahce-ve-dekorasyon">Home, Garden And Decoration</option>
                              <option value="otomotiv">Otomotiv</option>
                              <option value="saglik">Health</option>
                              <option value="resmi-kurumlar">Government agencies</option>
                              <option value="yeme-icme">Eating and drinking</option>
                              <option value="giyim-moda">Clothing-Fashion</option>
                              <option value="iletisim">Communication</option>
                              <option value="insaat">Building</option>
                              <option value="konaklama-turizm">Accommodation-Tourism</option>
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
               © Gölhisar'ım 2023 - All Rights Reserved.
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
   
</body>

</html>