<?php

include("../assets/adminbaglanti.php");

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
            
        $secim = "SELECT * FROM uyelik WHERE kullanici_adi = '$username'";
        $calistir = mysqli_query($baglanti,$secim);
        $kayitsayisi = mysqli_num_rows($calistir);
        
        if($kayitsayisi>0){
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $sifre = $ilgilikayit["parola"];
            
            if($password1 == $sifre){
                session_start();
                $_SESSION["kullanici_adi"] = $ilgilikayit["kullanici_adi"];
                header("location:panel.php");
            }
            else{
                echo '<div class="alert alert-danger" role="alert">Parola Yanlış</div>';
            }
        }
        
        else{
            
            echo '<div class="alert alert-danger" role="alert">Kullanıcı Adı Yanlış</div>';
        }
            
            
            
            
    mysqli_close($baglanti);
}
}



?>




<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hoş Geldin!</h1>
                                    </div>
                                    <form class="user" action="login.php" method="POST" >
                                         <div class="form-group">
                        <input type="text" name="kullaniciadi" class=" form-control form-control-user" placeholder="Kullanıcı Adı">
                    </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"  placeholder="Şifre" name="parola">
                                            
                                        <button type="submit" name="giris" class="btn btn-primary btn-user btn-block">GİRİŞ YAP</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>