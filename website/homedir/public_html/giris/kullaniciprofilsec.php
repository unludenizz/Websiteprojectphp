<?php
include("../assets/baglanti2.php");


$id = $_GET['id'];


$sql = "SELECT * FROM kabuledilenfotolar WHERE id = $id";
$result = mysqli_query($baglanti2, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $firma_id = $row["firma_id"];
  $firma_resim = $row["firma_resim"];
  $varmi_resim = "../".$row["firma_resim"];
  


$sql1 = "SELECT * FROM kabuledilen_sektor WHERE id = $firma_id";
$resul1 = mysqli_query($baglanti2, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$suankifirmaresim = $row1["firma_resim"];


echo $firma_resim;

if(file_exists($varmi_resim) && $firma_resim != $suankifirmaresim) {
    
    $sql2 = "UPDATE kabuledilen_sektor SET firma_resim = '$firma_resim' WHERE id = '$firma_id'";
  if (mysqli_query($baglanti2, $sql2)) {
    echo "Veriler başarıyla güncellendi.";
  } else {
    echo "Hata: " . mysqli_error($baglanti2);
  }
    
    
    
    
} 
if($firma_resim == $suankifirmaresim){
    echo "Seçilen resim zaten firmanın profil resmi olarak tanımlanmıştır.";
}



  
}

mysqli_close($baglanti2);

header("location:../giris/profilim.php");
?>