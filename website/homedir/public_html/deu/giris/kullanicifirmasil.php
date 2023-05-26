<?php
include("../../assets/baglanti2.php");
// Silme sorgusu
$id = $_GET['id'];

// güncellenen firma isteği silme
$sql = "DELETE FROM guncellefirma WHERE firma_id = '$id'";

if($baglanti2->query($sql) === true){
    echo "Die aktualisierte Firmenanfrage wurde gelöscht. ";
}

// fotolar silme sorgusu
$sql1 = "SELECT firma_resim, firma_id FROM fotolar WHERE firma_id = '$id'";
$sonuc = $baglanti2->query($sql1);

while ($cek = $sonuc->fetch_assoc()) {
    $resim_adi = $cek["firma_resim"];
    $dosyayolu = "../../".$cek["firma_resim"];
    // Dosya varsa sil
    if (file_exists($dosyayolu)) {
        unlink($dosyayolu);
    }
}

// Kayıt silme sorgusu
$sql2 = "DELETE FROM fotolar WHERE firma_id = '$id'";
if($baglanti2->query($sql2) === true){
    echo "Die Fotos wurden gelöscht. ";
}

// kabuledilenfotolar silme sorgusu
$sql3 = "SELECT firma_resim, firma_id FROM kabuledilenfotolar WHERE firma_id = '$id'";
$sonuc1 = $baglanti2->query($sql3);

while ($cek1 = $sonuc1->fetch_assoc()) {
    $resim_adi1 = $cek1["firma_resim"];
    $dosyayolu1 = "../../".$cek1["firma_resim"];
    // Dosya varsa sil
    if (file_exists($dosyayolu1)) {
        unlink($dosyayolu1);
    }
}

$sql5 = "DELETE FROM kabuledilenfotolar WHERE firma_id = '$id'";
if($baglanti2->query($sql5) === true){
    echo "Akzeptierte Fotos wurden gelöscht. ";
}

// firma silme sorgusu
$sql6 = "DELETE FROM kabuledilen_sektor WHERE id = '$id'";
if($baglanti2->query($sql6) === true){
    echo "Das Unternehmen wurde gelöscht. ";
}

header("location:../giris/profilim.php");
exit();
?>
