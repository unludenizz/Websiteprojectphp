<?php
include("../assets/baglanti2.php");
// Silme sorgusu
$id = $_GET['id'];

$sql = "SELECT * FROM sektorekle WHERE id = $id";
$result = mysqli_query($baglanti2, $sql);


while ($row = mysqli_fetch_assoc($result)) {
  $firma_ismi = $row["firma_ismi"];
  $firma_sahip = $row["firma_sahip"];
  $firma_tel = $row["firma_tel"];
  $firma_adres = $row["firma_adres"];
  $firma_eposta = $row["firma_eposta"];
  $firma_turu = $row["firma_turu"];
  $kullanici = $row["kullanici"];
  $firma_resim = "img/resimsiz.png";
}




$sql = "INSERT INTO kabuledilen_sektor (firma_ismi, firma_sahip, firma_tel, firma_adres, firma_eposta, firma_turu, firma_resim, kullanici, firma_ekle_tarih) VALUES ('$firma_ismi', '$firma_sahip', '$firma_tel', '$firma_adres', '$firma_eposta', '$firma_turu', '$firma_resim', '$kullanici', NOW())";
  mysqli_query($baglanti2, $sql);
  


$sql1 = "DELETE FROM sektorekle WHERE id = '$id'";


if($baglanti2->query($sql1)===true){
    echo "silme işlemi tamamlandı";
}

else{
    echo "silme işlemi başarısız";
}




header("location:../adminpanel/firmadegerlendirme.php");

?>