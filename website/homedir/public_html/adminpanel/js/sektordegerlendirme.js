function confirmDelete(id) {
    var result = confirm("Bu kaydı silmek istediğinizden emin misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "sil2.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
function confirmAdd(id) {
    var result = confirm("Bu kaydı eklemek istediğinizden emin misiniz?");
    if (result) {
        window.location.href = "ekle.php?id=" + id;
    }
}