<?php
include("../assets/baglanti.php");


$id = $_GET['id'];

$sql = "SELECT * FROM guncellekullanici WHERE id = $id";
$result = mysqli_query($baglanti, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $kullanici_adi = $row["kullanici_adi"];
  $email = $row["email"];
  $kullanici = $row["kullanici"];
  $kul = $row["kullanici"];
  $guncelmail = $row["guncelmail"];
  $kayit_tarihi = $row["kayit_tarihi"];

  if ($kullanici_adi == "-") {
    $kullanici_adi = $kullanici;
  }
  if ($email == "-") {
    $email = $guncelmail;
  }

  $sql = "UPDATE kullanicilar SET kullanici_adi = '$kullanici_adi', email = '$email' WHERE kullanici_adi = '$kullanici'";
  if (mysqli_query($baglanti, $sql)) {
    echo "Veriler başarıyla güncellendi.";
  } else {
    echo "Hata: " . mysqli_error($baglanti);
  }
}

include("../assets/baglanti.php");

$sql1 = "DELETE FROM guncellekullanici WHERE kullanici = '$kul'";

if($baglanti->query($sql1) === true) {
    echo "Silme işlemi tamamlandı";
} else {
    echo "Hata: " . mysqli_error($baglanti);
}

// kabuledilen_sektor tablosunu güncelle
include("../assets/baglanti2.php");

$sql2 = "UPDATE kabuledilen_sektor SET kullanici = '$kullanici_adi' WHERE kullanici = '$kul'";

if (mysqli_query($baglanti2, $sql2)) {
    echo "Veriler başarıyla güncellendi.";
} else {
    echo "Hata: " . mysqli_error($baglanti2);
}

mysqli_close($baglanti);
mysqli_close($baglanti2);

header("location:../adminpanel/kullaniciguncelleme.php");
?>