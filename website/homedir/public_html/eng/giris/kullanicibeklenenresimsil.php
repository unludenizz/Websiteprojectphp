<?php
include("../../assets/baglanti2.php");

$id = $_GET['id'];
$sql = "SELECT firma_resim FROM fotolar WHERE id = '$id'";
$sonuc = $baglanti2->query($sql);
$cek = $sonuc->fetch_assoc();
$resim_adi = $cek['firma_resim'];
$dosyayolu = "../../".$resim_adi;

// Dosya varsa sil
if (file_exists($dosyayolu)) {
    unlink($dosyayolu);
}


$sql = "DELETE FROM fotolar WHERE id = '$id'";
if($baglanti2->query($sql)===true){
    echo "Deletion completed.";
}
else{
    echo "Deletion failed.";
}
header("location:../giris/profilim.php");
exit;
?>

