<?php
include("../../assets/baglanti2.php");


$id = $_GET['id'];


$sql = "SELECT * FROM kabuledilen_sektor WHERE id = $id";
$result = mysqli_query($baglanti2, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  
$resim = "img/resimsiz.png";
$resimyolu = "../../img/resimsiz.png";


if(file_exists($resimyolu)) {
    
    $sql2 = "UPDATE kabuledilen_sektor SET firma_resim = '$resim' WHERE id = '$id'";
  if (mysqli_query($baglanti2, $sql2)) {
    echo "Data has been successfully updated.";
  } else {
    echo "Hata: " . mysqli_error($baglanti2);
  }
    
    
    
    
} 
  
}

mysqli_close($baglanti2);

header("location:../giris/profilim.php");
?>