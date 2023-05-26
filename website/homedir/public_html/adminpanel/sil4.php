<?php
include("../assets/baglanti.php");
// Silme sorgusu
$id = $_GET['id'];
$sql = "DELETE FROM guncellekullanici WHERE id = '$id'";

if($baglanti->query($sql)===true){
    echo "silme işlemi tamamlandı";
}
else{
    echo "silme işlemi başarısız";
}
header("location:../adminpanel/kullaniciguncelleme.php");

?>