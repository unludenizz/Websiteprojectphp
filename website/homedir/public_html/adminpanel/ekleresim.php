<?php
include("../assets/baglanti2.php");
// Silme sorgusu
$id = $_GET['id'];

$sql = "SELECT * FROM fotolar WHERE id = $id";
$result = mysqli_query($baglanti2, $sql);


while ($row = mysqli_fetch_assoc($result)) {
  $firma_id = $row["firma_id"];
  $firma_ismi = $row["firma_ismi"];
  $firma_resim = $row["firma_resim"];
  $ekleme_tarihi = $row["ekleme_tarihi"];
  $firma_resim_sayisi = $row["firma_resim_sayisi"];
  $kullanici = $row["kullanici"];
}




$sql = "INSERT INTO kabuledilenfotolar (firma_id, firma_ismi, firma_resim,  firma_resim_sayisi, kullanici, ekleme_tarihi) VALUES ('$firma_id', '$firma_ismi', '$firma_resim', '$firma_resim_sayisi', '$kullanici', NOW())";
  mysqli_query($baglanti2, $sql);
  


$sql1 = "DELETE FROM fotolar WHERE id = '$id'";


if($baglanti2->query($sql1)===true){
    echo "silme işlemi tamamlandı";
}

else{
    echo "silme işlemi başarısız";
}




header("location:../adminpanel/resimdegerlendirme.php");

?>