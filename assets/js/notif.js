// Notification CRUD Register Surat Kuasa
const flashData = $('.flash-data').data('notifregiskuasa');
if ( flashData ) {
    Swal.fire({
        title: 'Surat Kuasa',
        text: 'Telah Berhasil ' + flashData,
        icon: 'success',
    })
}
$('.tblHapusRegisKuasa').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "Data surat kuasa akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Hapus'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
});

// Notification CRUD Buku Tamu Digital
const notifBukuTamu = $('.flash-data').data('notifbukutamu');
if ( notifBukuTamu ) {
    Swal.fire({
        title: 'Data Pengunjung',
        text: 'Telah Berhasil ' + notifBukuTamu,
        icon: 'success',
    })
}
const notifProfilPengunjung = $('.flash-data').data('notifprofilpengunjung');
if ( notifProfilPengunjung ) {
    Swal.fire({
        title: 'Data Pengunjung',
        text: 'Telah Berhasil ' + notifProfilPengunjung,
        icon: 'success',
    })
}
$('.tblHapusProfilpengunjung').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "Data profil pengunjung akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Hapus'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
});
const notifDaftarKunjungan = $('.flash-data').data('notifdaftarkunjungan');
if ( notifDaftarKunjungan ) {
    Swal.fire({
        title: 'Data Kunjungan',
        text: 'Telah Berhasil ' + notifDaftarKunjungan,
        icon: 'success',
    })
}
$('.tblHapusDaftarKunjungan').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "Data Kunjungan akan dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Hapus'
        }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
});