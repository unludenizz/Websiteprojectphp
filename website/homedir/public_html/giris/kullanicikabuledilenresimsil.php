<?php
include("../assets/baglanti2.php");

// Silme sorgusu
$id = $_GET['id'];
$sql = "SELECT firma_resim, firma_id FROM kabuledilenfotolar WHERE id = '$id'";
$sonuc = $baglanti2->query($sql);
$cek = $sonuc->fetch_assoc();
$resim_adi = $cek["firma_resim"];
$dosyayolu = "../".$cek["firma_resim"];
$firma_id = $cek["firma_id"];


echo $firma_id;
if (file_exists($dosyayolu)) {

    $sql2 = "SELECT firma_resim FROM kabuledilen_sektor WHERE id = '$firma_id'";
    $sonuc1 = $baglanti2->query($sql2);
    $cek1 = $sonuc1->fetch_assoc();
    $suankiresimadi = $cek1["firma_resim"];
    

    if($suankiresimadi == $resim_adi){
        $resim = "img/resimsiz.png";
        $sql3 = "UPDATE kabuledilen_sektor SET firma_resim = '$resim' WHERE id = '$firma_id'";
        if (mysqli_query($baglanti2, $sql3)) {
         echo "Veriler başarıyla güncellendi.";
        } else {
            echo "Hata: " . mysqli_error($baglanti2);
        }
    }
    
    else{
       
        echo "aynı değil";
    }
    
    unlink($dosyayolu);
    
    
    
    
    
    
    $sql1 = "DELETE FROM kabuledilenfotolar WHERE id = '$id'";
    if($baglanti2->query($sql1)===true){
        echo "Silme işlemi tamamlandı";
    }
    else{
        echo "Silme işlemi başarısız";
    }
}


header("location:../giris/profilim.php");
exit;
?>
