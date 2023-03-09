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

// Notification CRUD File BHT
const flashDataBht = $('.flash-data').data('notifregisbht');
if ( flashDataBht ) {
    Swal.fire({
        title: 'File BHT',
        text: 'Telah Berhasil ' + flashDataBht,
        icon: 'success',
    })
}
$('.tblHapusBht').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "Data file BHT akan dihapus",
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

// Notification CRUD File Eksekusi
const flashDataEksekusi = $('.flash-data').data('notifregiseksekusi');
if ( flashDataEksekusi ) {
    Swal.fire({
        title: 'File Surat Permohonan Informasi Eksekusi',
        text: 'Telah Berhasil ' + flashDataEksekusi,
        icon: 'success',
    })
}
$('.tblHapusEksekusi').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "Data Surat Permohonan Informasi Eksekusi akan dihapus",
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

// Notification CRUD Survei IKM dan IPK
const notifSurveiIkm = $('.flash-data').data('notifsurveiikm');
if ( notifSurveiIkm ) {
    Swal.fire({
        title: 'Data Survei IKM',
        text: 'Telah Berhasil ' + notifSurveiIkm,
        icon: 'success',
    })
}
const notifSurveiIpk = $('.flash-data').data('notifsurveiipk');
if ( notifSurveiIpk ) {
    Swal.fire({
        title: 'Data Survei IPK',
        text: 'Telah Berhasil ' + notifSurveiIpk,
        icon: 'success',
    })
}
const notifAdminSurvei = $('.flash-data').data('notifadminsurvei');
if ( notifAdminSurvei ) {
    Swal.fire({
        title: 'Data Survei',
        text: 'Telah Berhasil ' + notifAdminSurvei,
        icon: 'success',
    })
}
const newPertanyaan = $('.flash-data').data('notifpertanyaan');
if ( newPertanyaan ) {
    Swal.fire({
        title: 'Data Pertanyaan',
        text: 'Telah Berhasil ' + newPertanyaan,
        icon: 'success',
    })
}
$('.tblHapusSurveiIkm').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "Data Survei akan dihapus",
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
$('.tblHapusSurveiIpk').on('click', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah anda yakin ingin menghapus?',
        text: "Data Survei IPK akan dihapus",
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