<?php
$host = ""; //sunucu adresi
$kullanici = ""; //veritabanı kullanıcı adı
$parola = ""; //veritabanı şifresi
$vt = ""; //veritabanı adı


$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);


if (!$baglanti) {
    die("Veritabanı bağlantısı başarısız oldu: " . mysqli_connect_error());
}


echo "";
mysqli_set_charset($baglanti, "utf8");
?>
