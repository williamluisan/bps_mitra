/**
 * Untuk mengambil referensi pendidikan
 * 
 * @param {*} base_url 
 */
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


/**
 * Untuk mengambil referensi kegiatan BPS
 * 
 * @param {*} base_url 
 * @param {*} mitra_id, set null jika ingin mengambil semua kegiatan
 */
export var get_ref_keg_bps = (base_url, mitra_id) => {
    return $.ajax({
        url: base_url+'Referensi/get_keg_bps',
        method: 'POST',
        data: {mitra_id: mitra_id},
        dataType: 'json'
    }).fail((j, t, e) => {
        alert('Terjadi kesalahan');
        console.log('Gagal mengambil data kegiatan BPS');
    });
}