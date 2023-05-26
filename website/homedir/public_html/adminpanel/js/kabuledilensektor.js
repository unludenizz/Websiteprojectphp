function confirmDel(id) {
    var result = confirm("Bu kaydı silmek istediğinizden emin misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "sil3.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
function confirmAd(id) {
    var result = confirm("Bu resmi firmanın profilinden kaldırmak istediğinize emin misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "firmaprofilkaldir.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}