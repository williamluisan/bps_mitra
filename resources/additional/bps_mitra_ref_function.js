export var get_ref_pddk = (base_url) => {
    return $.ajax({
        url: base_url+'Referensi/get_pddk',
        method: 'POST',
        dataType: 'json'
    }).fail((j, t, e) => {
        alert('Terjadi kesalahan');
        console.log('Gagal mengambil data pendidikan');
    });
}

export var get_ref_keg_bps = (base_url) => {
    return $.ajax({
        url: base_url+'Referensi/get_keg_bps',
        method: 'POST',
        dataType: 'json'
    }).fail((j, t, e) => {
        alert('Terjadi kesalahan');
        console.log('Gagal mengambil data kegiatan BPS');
    });
}