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