<?php
include("../assets/baglanti2.php");


$id = $_GET['id'];

$sql = "SELECT * FROM guncellefirma WHERE id = $id";
$result = mysqli_query($baglanti2, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $firma_id = $row["firma_id"];
  $firma_ismi = $row["firma_ismi"];
  $firma_sahip = $row["firma_sahip"];
  $firma_tel = $row["firma_tel"];
  $firma_adres = $row["firma_adres"];
  $firma_eposta = $row["firma_eposta"];
  $firma_turu = $row["firma_turu"];
  $guncelismi = $row["guncelismi"];
  $guncelsahip = $row["guncelsahip"];
  $gunceltel = $row["gunceltel"];
  $gunceladres = $row["gunceladres"];
  $gunceleposta = $row["gunceleposta"];
  $guncelturu = $row["guncelturu"];
  $kullanici = $row["kullanici"];
  $firma_ekle_tarih = $row["firma_ekle_tarih"];

  if ($firma_ismi == "-") {
    $firma_ismi = $guncelismi;
  }
  if ($firma_sahip == "-") {
    $firma_sahip = $guncelsahip;
  }
  if ($firma_tel == "-") {
    $firma_tel = $gunceltel;
  }
  if ($firma_adres == "-") {
    $firma_adres = $gunceladres;
  }
  if ($firma_eposta == "-") {
    $firma_eposta = $gunceleposta;
  }
  if ($firma_turu == "-") {
    $firma_turu = $guncelturu;
  }




  $sql1 = "UPDATE kabuledilen_sektor SET firma_ismi = '$firma_ismi', firma_sahip = '$firma_sahip', firma_tel = '$firma_tel', firma_adres = '$firma_adres', firma_eposta = '$firma_eposta', firma_turu = '$firma_turu' WHERE id = '$firma_id'";
  if (mysqli_query($baglanti2, $sql1)) {
    echo "Veriler başarıyla güncellendi.";
  } else {
    echo "Hata: " . mysqli_error($baglanti);
  }
}




$sql2 = "DELETE FROM guncellefirma WHERE id = '$id'";

if($baglanti2->query($sql2)===true){
    echo "silme işlemi tamamlandı";
}
else{
    echo "silme işlemi başarısız";
}



mysqli_close($baglanti);
mysqli_close($baglanti2);

header("location:../adminpanel/firmaguncelle.php");
?>