<?php
$host2 = ""; //sunucu adresi
$kullanici2 = ""; //veritabanı kullanıcı adı
$parola2 = ""; //veritabanı şifresi
$vt2 = ""; //veritabanı adı


$baglanti2 = mysqli_connect($host2, $kullanici2, $parola2, $vt2);


if (!$baglanti2) {
    die("Veritabanı bağlantısı başarısız oldu: " . mysqli_connect_error());
}


echo "";
mysqli_set_charset($baglanti2, "utf8");
?>
