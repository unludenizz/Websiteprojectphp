function confirmAad(id, firma_resim) {
    var result = confirm("Bu resim isteğini silmek istediğinizden emin misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "sil5.php?id=" + id + "&firma_resim=" + firma_resim;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
function confirmAdd(id) {
    var result = confirm("Bu resimi eklemek istediğinizden emin misiniz?");
    if (result) {
        window.location.href = "ekleresim.php?id=" + id;
    }
}