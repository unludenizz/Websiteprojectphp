<?php
// veritabanı bilgileri
$servername = "";
$username = "";
$password = "";
$dbname = "";

// bağlantı oluşturma
$conn = mysqli_connect($servername, $username, $password, $dbname);

// bağlantı kontrolü
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

// banka-finans
$sql1 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'banka-ve-finans'";


$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$bankafinans = $row1['count'];
//---------------------------------------------------------------------

// hizmet-sektörü
$sql2 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'hizmet-sektoru'";


$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$hizmetsektor = $row2['count'];
//---------------------------------------------------------------------

// egitim
$sql3 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'egitim'";


$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);
$egitim = $row3['count'];
//---------------------------------------------------------------------


// ev-bahçe ve dekorasyon
$sql4 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'ev-bahce-ve-dekorasyon'";


$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($result4);
$evbahce = $row4['count'];
//---------------------------------------------------------------------


// otomotiv
$sql5 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'otomotiv'";


$result5 = mysqli_query($conn, $sql5);
$row5 = mysqli_fetch_assoc($result5);
$otomotiv = $row5['count'];
//---------------------------------------------------------------------


// sağlık
$sql6 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'saglik'";


$result6 = mysqli_query($conn, $sql6);
$row6 = mysqli_fetch_assoc($result6);
$saglik = $row6['count'];
//---------------------------------------------------------------------


// resmi kurumlar
$sql7 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'resmi-kurumlar'";


$result7 = mysqli_query($conn, $sql7);
$row7 = mysqli_fetch_assoc($result7);
$resmikurum = $row7['count'];
//---------------------------------------------------------------------


// yeme-içme
$sql8 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'yeme-icme'";


$result8 = mysqli_query($conn, $sql8);
$row8 = mysqli_fetch_assoc($result8);
$yemeicme = $row8['count'];
//---------------------------------------------------------------------


// giyim-moda
$sql9 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'giyim-moda'";


$result9 = mysqli_query($conn, $sql9);
$row9 = mysqli_fetch_assoc($result9);
$giyimmoda = $row9['count'];
//---------------------------------------------------------------------


// iletişim
$sql10 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'iletisim'";


$result10 = mysqli_query($conn, $sql10);
$row10 = mysqli_fetch_assoc($result10);
$iletisim = $row10['count'];
//---------------------------------------------------------------------


// inşaat
$sql11 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'insaat'";


$result11 = mysqli_query($conn, $sql11);
$row11 = mysqli_fetch_assoc($result11);
$insaat = $row11['count'];
//---------------------------------------------------------------------


// konaklama-turizm
$sql12 = "SELECT COUNT(*) as count FROM kabuledilen_sektor WHERE firma_turu = 'konaklama-turizm'";


$result12 = mysqli_query($conn, $sql12);
$row12 = mysqli_fetch_assoc($result12);
$konaklamaturizm = $row12['count'];
//---------------------------------------------------------------------







mysqli_close($conn);
?>









