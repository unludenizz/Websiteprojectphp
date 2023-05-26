<?php
include("../assets/baglanti.php");
// Silme sorgusu
$kid = $_GET['id'];



$sql = "SELECT * FROM kullanicilar WHERE id = '{$kid}'";
$sonuc = $baglanti->query($sql);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
        $kullanici = $cek['kullanici_adi'];
    }
}


echo $kullanici;


include("../assets/baglanti2.php");

$sql = "SELECT * FROM kabuledilen_sektor WHERE kullanici = '{$kullanici}'";
$sonuc = $baglanti2->query($sql);
$firma_idleri = array();
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
        $firma_idleri[] = $cek['id'];
    }
    
    foreach($firma_idleri as $id) {
    // güncellenen firma isteği silme
    $sql = "DELETE FROM guncellefirma WHERE firma_id = '$id'";

    if($baglanti2->query($sql) === true){
        echo "Güncellenen firma isteği silindi. ";
    }

    // fotolar silme sorgusu
    $sql1 = "SELECT firma_resim, firma_id FROM fotolar WHERE firma_id = '$id'";
    $sonuc = $baglanti2->query($sql1);

    while ($cek = $sonuc->fetch_assoc()) {
        $resim_adi = $cek["firma_resim"];
        $dosyayolu = "../".$cek["firma_resim"];
        // Dosya varsa sil
        if (file_exists($dosyayolu)) {
            unlink($dosyayolu);
        }
    }

    // Kayıt silme sorgusu
    $sql2 = "DELETE FROM fotolar WHERE firma_id = '$id'";
    if($baglanti2->query($sql2) === true){
        echo "Fotolar silindi. ";
    }

    // kabuledilenfotolar silme sorgusu
    $sql3 = "SELECT firma_resim, firma_id FROM kabuledilenfotolar WHERE firma_id = '$id'";
    $sonuc1 = $baglanti2->query($sql3);

    while ($cek1 = $sonuc1->fetch_assoc()) {
        $resim_adi1 = $cek1["firma_resim"];
        $dosyayolu1 = "../".$cek1["firma_resim"];
        // Dosya varsa sil
        if (file_exists($dosyayolu1)) {
            unlink($dosyayolu1);
        }
    }

    $sql5 = "DELETE FROM kabuledilenfotolar WHERE firma_id = '$id'";
    if($baglanti2->query($sql5) === true){
        echo "Kabul edilen fotolar silindi. ";
    }

    // firma silme sorgusu
    $sql6 = "DELETE FROM kabuledilen_sektor WHERE id = '$id'";
    if($baglanti2->query($sql6) === true){
        echo "Firma silindi. ";
    }
}
    
    
}

$sql = "DELETE FROM sektorekle WHERE kullanici = '{$kullanici}'";
if($baglanti2->query($sql) === true){
        echo "Firma İsteği silindi. ";
    }


$sql = "DELETE FROM guncellekullanici WHERE kullanici = '{$kullanici}'";
if($baglanti->query($sql) === true){
        echo "Kullanıcı İsteği silindi. ";
    }




$sql = "DELETE FROM kullanicilar WHERE id = '{$kid}'";
if($baglanti->query($sql) === true){
        echo "Kullanıcı silindi. ";
    }





header("location:../adminpanel/kayittables.php");
exit();


?>