<?php
include("../assets/baglanti2.php");
// Silme sorgusu
$id = $_GET['id'];
$sql = "DELETE FROM guncellefirma WHERE id = '$id'";

if($baglanti2->query($sql)===true){
    echo "silme işlemi tamamlandı";
}
else{
    echo "silme işlemi başarısız";
}
header("location:../adminpanel/firmaguncelle.php");

?>