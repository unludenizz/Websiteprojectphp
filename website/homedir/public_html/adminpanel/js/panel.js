function confirmDelete(id) {
    var result = confirm("Bu kaydı silmek istediğinizden emin misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "sil.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
