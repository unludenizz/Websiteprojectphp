<?php

    session_start();
    if(isset($_SESSION["kullanici_adi"])){
        
    }
    
    else{
        header("location:login.php");;
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

    <title>GÖLHİSAR'IM Admin - Kullanıcı Tablosu</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="panel.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">GÖLHİSAR'IM Admin<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="panel.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Panel</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

           
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="kayittables.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kullanıcı Tablosu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kullaniciguncelleme.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kullanıcı Bilgi Güncelleme Tablosu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kabuledilensektor.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kabul Edilen Firmalar Tablosu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="firmaguncelle.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Firma Bilgi Güncelleme Tablosu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="firmadegerlendirme.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Firma Değerlendirme Tablosu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kabuledilenresimler.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kabul Edilen Resimler Tablosu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="resimdegerlendirme.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Resim Değerlendirme Tablosu</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cikis.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Çıkış Yap</span></a>
                    
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Veriyi aratın..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["kullanici_adi"]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="cikis.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Kabul Edilen Sektör Tablosu</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Güncel Sektörler Ve Bilgileri</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Firma İsmi</th>
                                            <th>Firma Sahibi</th>
                                            <th>Firma Telefonu</th>
                                            <th>Firma Adresi</th>
                                            <th>Firma E-postası</th>
                                            <th>Firma Eklenme Tarihi</th>
                                            <th>Firma Türü</th>
                                            <th>Kullanıcımız</th>
                                            <th>Firma Profili</th>
                                            <th>Firma Profilini Kaldır</th>
                                            <th>Silme İşlemi</th>
                                            <th>Düzenle</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php include("../assets/baglanti2.php");
                                    mysqli_set_charset($baglanti2, "utf8");
                                    $sql = "SELECT * FROM kabuledilen_sektor";
                                    $sonuc = $baglanti2->query($sql);
                                    
                                    if($sonuc->num_rows>0){
                                        while($cek=$sonuc->fetch_assoc()){
                                            echo "
                                            
                                <tr>
                                    <td>".$cek['firma_ismi']."</td>
                                    <td>".$cek['firma_sahip']."</td>
                                    <td>".$cek['firma_tel']."</td>
                                    <td>".$cek['firma_adres']."</td>
                                    <td>".$cek['firma_eposta']."</td>
                                    <td>".$cek['firma_ekle_tarih']."</td>
                                    <td>".$cek['firma_turu']."</td>
                                    <td>".$cek['kullanici']."</td>
                                    <td><img src='../".$cek['firma_resim']."' width='300'></td>
                                    <td><button type='button' class='btn btn-secondary' onclick='confirmAd("                   .$cek['id'].")'>Kaldır</button></td>
                                    <td><button type='button' class='btn btn-danger' onclick='confirmDel(".$cek['id'].")'>Sil</button></td>
                                    
                                    
                                    <td><button onclick='editUser(\"".$cek['firma_ismi']."\", \"".$cek['firma_sahip']."\",\"".$cek['firma_tel']."\",\"".$cek['firma_adres']."\",\"".$cek['firma_eposta']."\",\"".$cek['firma_turu']."\",\"".$cek['kullanici']."\")' type='button' class='btn btn-danger' style='background-color: orange; color: white;'>Düzenle</button></td>
                                </tr>
                                            
                                            ";
                                            
                                             if(isset($_POST["guncelle"])){

        
         $kid = $cek['id'];
        $yfirma_ismi = $_POST["firma_ismi"];
       $yfirma_sahip = $_POST["firma_sahip"];
       $yfirma_tel = $_POST["firma_tel"];
       $yfirma_adres = $_POST["firma_adres"];
       $yfirma_eposta = $_POST["firma_eposta"];
       $yfirma_turu = $_POST["firma_turu"];
       $ykullanici = $_POST["kullanici"];
       
       
       
       $fgk= $cek['kullanici_adi'];
       
       
       


$sql = "UPDATE kabuledilen_sektor SET firma_ismi = '$yfirma_ismi', firma_sahip = '$yfirma_sahip',firma_tel = '$yfirma_tel',firma_adres = '$yfirma_adres',firma_eposta = '$yfirma_eposta',firma_turu = '$yfirma_turu',kullanici = '$ykullanici' WHERE id = '$kid'";






if (mysqli_query($baglanti2, $sql)) {
    $message = "Güncelleme Başarılı!";
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
        echo $alert_box;
        mysqli_close($baglanti);
        header("Refresh:1");

} else {
    $message = "Güncelleme Başarısız.";
        $alert_box = "<div class='alertt'><div class='alertt-box'><span class='closee-btn' onclick='closeAlertt()'>×</span>$message</div></div>";
        echo $alert_box;
        mysqli_close($baglanti);
        header("Refresh:1");
}
        
      
       
        
        
    






}
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                        }
                                    }
                                    else{
                                        echo "hiç bir veri bulunamadı";
                                    }
                                
                                ?>
                                        
                                    </tbody>
                                </table>
                                <div id="popup" style="display:none;">
    <h2>Firma Düzenle</h2>
    <form action="kabuledilensektor.php" method="POST">
        <label for="firma_ismi">Firma İsmi:</label>
        <input type="text" id="firma_ismi" name="firma_ismi"><br><br>
        <label for="firma_sahip">firma sahip:</label>
        <input type="text" id="firma_sahip" name="firma_sahip"><br><br>
        <label for="firma_tel">firma tel:</label>
        <input type="text" id="firma_tel" name="firma_tel"><br><br>
        <label for="firma_adres">firma adres:</label>
        <input type="text" id="firma_adres" name="firma_adres"><br><br>
        <label for="firma_eposta">firma eposta:</label>
        <input type="text" id="firma_eposta" name="firma_eposta"><br><br>
        <label for="firma_turu">firma turu:</label>
        <input type="text" id="firma_turu" name="firma_turu"><br><br>
        <label for="kullanici">Kullanıcı:</label>
        <input type="text" id="kullanici" name="kullanici"><br><br>
        
        
        
        <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
        <button type="button" class="btn btn-secondary" onclick="closePopup()">Kapat</button>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Çıkış</a>
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
    <script src="js/kabuledilensektor.js"></script>
    <script src="../js/infobox.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>
<script>
    function editUser(firma_ismi, firma_sahip,firma_tel,firma_adres,firma_eposta,firma_turu,kullanici) {
        // Popup aç
        document.getElementById("popup").style.display = "block";
        
        // Form verilerini doldur
        document.getElementById("firma_ismi").value = firma_ismi;
        document.getElementById("firma_sahip").value = firma_sahip;
        document.getElementById("firma_tel").value = firma_tel;
        document.getElementById("firma_adres").value = firma_adres;
        document.getElementById("firma_eposta").value = firma_eposta;
        document.getElementById("firma_turu").value = firma_turu;
        document.getElementById("kullanici").value = kullanici;
    }
    
    function closePopup() {
        // Popup kapat
        document.getElementById("popup").style.display = "none";
    }
</script>
</html>