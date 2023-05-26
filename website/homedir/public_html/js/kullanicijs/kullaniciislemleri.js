function confirmAdd(id) {
    var result = confirm("Firmanızın Resim İsteğini Silmek İstiyor Musunuz?");
    if (result) {
        
        window.location.href = "kullanicibeklenenresimsil.php?id=" + id;
    }
    
}
function confirmAad(id) {
    var result = confirm("Kabul Edilen Firma Resminizi Silmek İstiyor Musunuz ?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "kullanicikabuledilenresimsil.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
function confirmDel(id) {
    var result = confirm("Firmanızı Silmek İstediğinizden Emin Misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "kullanicifirmasil.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
function confirmA(id) {
    var result = confirm("Firmanızın Profilini Bu Resim Yapmak İstediğinize Emin Misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "kullaniciprofilsec.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
function confirmAd(id) {
    var result = confirm("Firmanızın Profilini Kaldırmak İstediğinizden Emin Misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "kullaniciprofilkaldir.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}
function hesabisil(id) {
    var result = confirm("Üyeliğinizi Silmek İstediğinize Emin misiniz?");
    if (result) {
        // Kullanıcının "Tamam" seçeneğini seçtiği durumda, silme işlemi gerçekleştirilir
        window.location.href = "kullanicisil.php?id=" + id;
    }
    // Kullanıcının "İptal" seçeneğini seçtiği durumda, silme işlemi iptal edilir
}

function Ad(firmaismi, kategori) {
    var result = confirm("Firmanıza Resim Eklemek İstiyor Musunuz ?");
    if (result) {
        window.location.href = "resimekle.php?firmaismi=" + encodeURIComponent(firmaismi) + "&kategori=" + encodeURIComponent(kategori);
    }
}

