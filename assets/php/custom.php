<?php

// parameter fasilitas_informasi
$var__fasilitas_info_sangat_tidak_puas = 0;
$var__fasilitas_info_tidak_puas = 0;
$var__fasilitas_info_puas = 0;
$var__fasilitas_info_sangat_puas = 0;

if ($i['fasilitas_informasi'] == 'Kurang Puas') {
    $var__fasilitas_info_sangat_tidak_puas = 1;
} elseif ($i['fasilitas_informasi'] == 'Cukup Puas') {
    $var__fasilitas_info_tidak_puas = 1;
} elseif ($i['fasilitas_informasi'] == 'Puas') {
    $var__fasilitas_info_puas = 1;
} elseif ($i['fasilitas_informasi'] == 'Sangat Puas') {
    $var__fasilitas_info_sangat_puas = 1;
}

// parameter fasilitas_toilet
$var__fasilitas_toilet_sangat_tidak_puas = 0;
$var__fasilitas_toilet_tidak_puas = 0;
$var__fasilitas_toilet_puas = 0;
$var__fasilitas_toilet_sangat_puas = 0;

if ($i['fasilitas_toilet'] == 'Kurang Puas') {
    $var__fasilitas_toilet_sangat_tidak_puas = 1;
} elseif ($i['fasilitas_toilet'] == 'Cukup Puas') {
    $var__fasilitas_toilet_tidak_puas = 1;
} elseif ($i['fasilitas_toilet'] == 'Puas') {
    $var__fasilitas_toilet_puas = 1;
} elseif ($i['fasilitas_toilet'] == 'Sangat Puas') {
    $var__fasilitas_toilet_sangat_puas = 1;
}

// parameter fasilitas_parkir
$var__fasilitas_parkir_sangat_tidak_puas = 0;
$var__fasilitas_parkir_tidak_puas = 0;
$var__fasilitas_parkir_puas = 0;
$var__fasilitas_parkir_sangat_puas = 0;

if ($i['parkir_kendaraan'] == 'Kurang Puas') {
    $var__fasilitas_parkir_sangat_tidak_puas = 1;
} elseif ($i['parkir_kendaraan'] == 'Cukup Puas') {
    $var__fasilitas_parkir_tidak_puas = 1;
} elseif ($i['parkir_kendaraan'] == 'Puas') {
    $var__fasilitas_parkir_puas = 1;
} elseif ($i['parkir_kendaraan'] == 'Sangat Puas') {
    $var__fasilitas_parkir_sangat_puas = 1;
}

// parameter fasilitas_kebersihan
$var__fasilitas_kebersihan_sangat_tidak_puas = 0;
$var__fasilitas_kebersihan_tidak_puas = 0;
$var__fasilitas_kebersihan_puas = 0;
$var__fasilitas_kebersihan_sangat_puas = 0;

if ($i['kebersihan'] == 'Kurang Puas') {
    $var__fasilitas_kebersihan_sangat_tidak_puas = 1;
} elseif ($i['kebersihan'] == 'Cukup Puas') {
    $var__fasilitas_kebersihan_tidak_puas = 1;
} elseif ($i['kebersihan'] == 'Puas') {
    $var__fasilitas_kebersihan_puas = 1;
} elseif ($i['kebersihan'] == 'Sangat Puas') {
    $var__fasilitas_kebersihan_sangat_puas = 1;
}

// parameter fasilitas_taman
$var__fasilitas_taman_sangat_tidak_puas = 0;
$var__fasilitas_taman_tidak_puas = 0;
$var__fasilitas_taman_puas = 0;
$var__fasilitas_taman_sangat_puas = 0;

if ($i['taman'] == 'Kurang Puas') {
    $var__fasilitas_taman_sangat_tidak_puas = 1;
} elseif ($i['taman'] == 'Cukup Puas') {
    $var__fasilitas_taman_tidak_puas = 1;
} elseif ($i['taman'] == 'Puas') {
    $var__fasilitas_taman_puas = 1;
} elseif ($i['taman'] == 'Sangat Puas') {
    $var__fasilitas_taman_sangat_puas = 1;
}

// parameter fasilitas_sarana_ibadah
$var__fasilitas_sarana_ibadah_sangat_tidak_puas = 0;
$var__fasilitas_sarana_ibadah_tidak_puas = 0;
$var__fasilitas_sarana_ibadah_puas = 0;
$var__fasilitas_sarana_ibadah_sangat_puas = 0;

if ($i['sarana_ibadah'] == 'Kurang Puas') {
    $var__fasilitas_sarana_ibadah_sangat_tidak_puas = 1;
} elseif ($i['sarana_ibadah'] == 'Cukup Puas') {
    $var__fasilitas_sarana_ibadah_tidak_puas = 1;
} elseif ($i['sarana_ibadah'] == 'Puas') {
    $var__fasilitas_sarana_ibadah_puas = 1;
} elseif ($i['sarana_ibadah'] == 'Sangat Puas') {
    $var__fasilitas_sarana_ibadah_sangat_puas = 1;
}

// parameter fasilitas_ruang_tunggu
$var__fasilitas_ruang_tunggu_sangat_tidak_puas = 0;
$var__fasilitas_ruang_tunggu_tidak_puas = 0;
$var__fasilitas_ruang_tunggu_puas = 0;
$var__fasilitas_ruang_tunggu_sangat_puas = 0;

if ($i['ruang_tunggu'] == 'Kurang Puas') {
    $var__fasilitas_ruang_tunggu_sangat_tidak_puas = 1;
} elseif ($i['ruang_tunggu'] == 'Cukup Puas') {
    $var__fasilitas_ruang_tunggu_tidak_puas = 1;
} elseif ($i['ruang_tunggu'] == 'Puas') {
    $var__fasilitas_ruang_tunggu_puas = 1;
} elseif ($i['ruang_tunggu'] == 'Sangat Puas') {
    $var__fasilitas_ruang_tunggu_sangat_puas = 1;
}

// parameter fasilitas_sistem_pembayaran
$var__fasilitas_sistem_pembayaran_sangat_tidak_puas = 0;
$var__fasilitas_sistem_pembayaran_tidak_puas = 0;
$var__fasilitas_sistem_pembayaran_puas = 0;
$var__fasilitas_sistem_pembayaran_sangat_puas = 0;

if ($i['sistem_pembayaran'] == 'Kurang Puas') {
    $var__fasilitas_sistem_pembayaran_sangat_tidak_puas = 1;
} elseif ($i['sistem_pembayaran'] == 'Cukup Puas') {
    $var__fasilitas_sistem_pembayaran_tidak_puas = 1;
} elseif ($i['sistem_pembayaran'] == 'Puas') {
    $var__fasilitas_sistem_pembayaran_puas = 1;
} elseif ($i['sistem_pembayaran'] == 'Sangat Puas') {
    $var__fasilitas_sistem_pembayaran_sangat_puas = 1;
}

// parameter fasilitas_pelayanan_pendaftaran
$var__fasilitas_pelayanan_pendaftaran_sangat_tidak_puas = 0;
$var__fasilitas_pelayanan_pendaftaran_tidak_puas = 0;
$var__fasilitas_pelayanan_pendaftaran_puas = 0;
$var__fasilitas_pelayanan_pendaftaran_sangat_puas = 0;

if ($i['pelayanan_pendaftaran'] == 'Kurang Puas') {
    $var__fasilitas_pelayanan_pendaftaran_sangat_tidak_puas = 1;
} elseif ($i['pelayanan_pendaftaran'] == 'Cukup Puas') {
    $var__fasilitas_pelayanan_pendaftaran_tidak_puas = 1;
} elseif ($i['pelayanan_pendaftaran'] == 'Puas') {
    $var__fasilitas_pelayanan_pendaftaran_puas = 1;
} elseif ($i['pelayanan_pendaftaran'] == 'Sangat Puas') {
    $var__fasilitas_pelayanan_pendaftaran_sangat_puas = 1;
}

// parameter fasilitas_persiapan_persidangan
$var__fasilitas_persiapan_persidangan_sangat_tidak_puas = 0;
$var__fasilitas_persiapan_persidangan_tidak_puas = 0;
$var__fasilitas_persiapan_persidangan_puas = 0;
$var__fasilitas_persiapan_persidangan_sangat_puas = 0;

if ($i['persiapan_persidangan'] == 'Kurang Puas') {
    $var__fasilitas_persiapan_persidangan_sangat_tidak_puas = 1;
} elseif ($i['persiapan_persidangan'] == 'Cukup Puas') {
    $var__fasilitas_persiapan_persidangan_tidak_puas = 1;
} elseif ($i['persiapan_persidangan'] == 'Puas') {
    $var__fasilitas_persiapan_persidangan_puas = 1;
} elseif ($i['persiapan_persidangan'] == 'Sangat Puas') {
    $var__fasilitas_persiapan_persidangan_sangat_puas = 1;
}

// parameter fasilitas_ruang_sidang
$var__fasilitas_ruang_sidang_sangat_tidak_puas = 0;
$var__fasilitas_ruang_sidang_tidak_puas = 0;
$var__fasilitas_ruang_sidang_puas = 0;
$var__fasilitas_ruang_sidang_sangat_puas = 0;

if ($i['fasilitas_ruang_sidang'] == 'Kurang Puas') {
    $var__fasilitas_ruang_sidang_sangat_tidak_puas = 1;
} elseif ($i['fasilitas_ruang_sidang'] == 'Cukup Puas') {
    $var__fasilitas_ruang_sidang_tidak_puas = 1;
} elseif ($i['fasilitas_ruang_sidang'] == 'Puas') {
    $var__fasilitas_ruang_sidang_puas = 1;
} elseif ($i['fasilitas_ruang_sidang'] == 'Sangat Puas') {
    $var__fasilitas_ruang_sidang_sangat_puas = 1;
}

// parameter fasilitas_proses_persidangan
$var__fasilitas_proses_persidangan_sangat_tidak_puas = 0;
$var__fasilitas_proses_persidangan_tidak_puas = 0;
$var__fasilitas_proses_persidangan_puas = 0;
$var__fasilitas_proses_persidangan_sangat_puas = 0;

if ($i['proses_persidangan'] == 'Kurang Puas') {
    $var__fasilitas_proses_persidangan_sangat_tidak_puas = 1;
} elseif ($i['proses_persidangan'] == 'Cukup Puas') {
    $var__fasilitas_proses_persidangan_tidak_puas = 1;
} elseif ($i['proses_persidangan'] == 'Puas') {
    $var__fasilitas_proses_persidangan_puas = 1;
} elseif ($i['proses_persidangan'] == 'Sangat Puas') {
    $var__fasilitas_proses_persidangan_sangat_puas = 1;
}

// parameter fasilitas_waktu_pemeriksaan
$var__fasilitas_waktu_pemeriksaan_sangat_tidak_puas = 0;
$var__fasilitas_waktu_pemeriksaan_tidak_puas = 0;
$var__fasilitas_waktu_pemeriksaan_puas = 0;
$var__fasilitas_waktu_pemeriksaan_sangat_puas = 0;

if ($i['waktu_pemeriksaan'] == 'Kurang Puas') {
    $var__fasilitas_waktu_pemeriksaan_sangat_tidak_puas = 1;
} elseif ($i['waktu_pemeriksaan'] == 'Cukup Puas') {
    $var__fasilitas_waktu_pemeriksaan_tidak_puas = 1;
} elseif ($i['waktu_pemeriksaan'] == 'Puas') {
    $var__fasilitas_waktu_pemeriksaan_puas = 1;
} elseif ($i['waktu_pemeriksaan'] == 'Sangat Puas') {
    $var__fasilitas_waktu_pemeriksaan_sangat_puas = 1;
}

// parameter fasilitas_pemeriksaan_setempat
$var__fasilitas_pemeriksaan_setempat_sangat_tidak_puas = 0;
$var__fasilitas_pemeriksaan_setempat_tidak_puas = 0;
$var__fasilitas_pemeriksaan_setempat_puas = 0;
$var__fasilitas_pemeriksaan_setempat_sangat_puas = 0;

if ($i['pemeriksaan_setempat'] == 'Kurang Puas') {
    $var__fasilitas_pemeriksaan_setempat_sangat_tidak_puas = 1;
} elseif ($i['pemeriksaan_setempat'] == 'Cukup Puas') {
    $var__fasilitas_pemeriksaan_setempat_tidak_puas = 1;
} elseif ($i['pemeriksaan_setempat'] == 'Puas') {
    $var__fasilitas_pemeriksaan_setempat_puas = 1;
} elseif ($i['pemeriksaan_setempat'] == 'Sangat Puas') {
    $var__fasilitas_pemeriksaan_setempat_sangat_puas = 1;
}

// parameter fasilitas_profesionalitas_hakim
$var__fasilitas_profesionalitas_hakim_sangat_tidak_puas = 0;
$var__fasilitas_profesionalitas_hakim_tidak_puas = 0;
$var__fasilitas_profesionalitas_hakim_puas = 0;
$var__fasilitas_profesionalitas_hakim_sangat_puas = 0;

if ($i['profesionalitas_hakim'] == 'Kurang Puas') {
    $var__fasilitas_profesionalitas_hakim_sangat_tidak_puas = 1;
} elseif ($i['profesionalitas_hakim'] == 'Cukup Puas') {
    $var__fasilitas_profesionalitas_hakim_tidak_puas = 1;
} elseif ($i['profesionalitas_hakim'] == 'Puas') {
    $var__fasilitas_profesionalitas_hakim_puas = 1;
} elseif ($i['profesionalitas_hakim'] == 'Sangat Puas') {
    $var__fasilitas_profesionalitas_hakim_sangat_puas = 1;
}

// parameter fasilitas_pemberian_salinan_putusan
$var__fasilitas_pemberian_salinan_putusan_sangat_tidak_puas = 0;
$var__fasilitas_pemberian_salinan_putusan_tidak_puas = 0;
$var__fasilitas_pemberian_salinan_putusan_puas = 0;
$var__fasilitas_pemberian_salinan_putusan_sangat_puas = 0;

if ($i['pemberian_salinan_putusan'] == 'Kurang Puas') {
    $var__fasilitas_pemberian_salinan_putusan_sangat_tidak_puas = 1;
} elseif ($i['pemberian_salinan_putusan'] == 'Cukup Puas') {
    $var__fasilitas_pemberian_salinan_putusan_tidak_puas = 1;
} elseif ($i['pemberian_salinan_putusan'] == 'Puas') {
    $var__fasilitas_pemberian_salinan_putusan_puas = 1;
} elseif ($i['pemberian_salinan_putusan'] == 'Sangat Puas') {
    $var__fasilitas_pemberian_salinan_putusan_sangat_puas = 1;
}

// parameter fasilitas_pelayanan_informasi
$var__fasilitas_pelayanan_informasi_sangat_tidak_puas = 0;
$var__fasilitas_pelayanan_informasi_tidak_puas = 0;
$var__fasilitas_pelayanan_informasi_puas = 0;
$var__fasilitas_pelayanan_informasi_sangat_puas = 0;

if ($i['pelayanan_informasi'] == 'Kurang Puas') {
    $var__fasilitas_pelayanan_informasi_sangat_tidak_puas = 1;
} elseif ($i['pelayanan_informasi'] == 'Cukup Puas') {
    $var__fasilitas_pelayanan_informasi_tidak_puas = 1;
} elseif ($i['pelayanan_informasi'] == 'Puas') {
    $var__fasilitas_pelayanan_informasi_puas = 1;
} elseif ($i['pelayanan_informasi'] == 'Sangat Puas') {
    $var__fasilitas_pelayanan_informasi_sangat_puas = 1;
}

// parameter fasilitas_pelayanan_pengaduan
$var__fasilitas_pelayanan_pengaduan_sangat_tidak_puas = 0;
$var__fasilitas_pelayanan_pengaduan_tidak_puas = 0;
$var__fasilitas_pelayanan_pengaduan_puas = 0;
$var__fasilitas_pelayanan_pengaduan_sangat_puas = 0;

if ($i['pelayanan_pengaduan'] == 'Kurang Puas') {
    $var__fasilitas_pelayanan_pengaduan_sangat_tidak_puas = 1;
} elseif ($i['pelayanan_pengaduan'] == 'Cukup Puas') {
    $var__fasilitas_pelayanan_pengaduan_tidak_puas = 1;
} elseif ($i['pelayanan_pengaduan'] == 'Puas') {
    $var__fasilitas_pelayanan_pengaduan_puas = 1;
} elseif ($i['pelayanan_pengaduan'] == 'Sangat Puas') {
    $var__fasilitas_pelayanan_pengaduan_sangat_puas = 1;
}

// parameter fasilitas_pelayanan_persuratan
$var__fasilitas_pelayanan_persuratan_sangat_tidak_puas = 0;
$var__fasilitas_pelayanan_persuratan_tidak_puas = 0;
$var__fasilitas_pelayanan_persuratan_puas = 0;
$var__fasilitas_pelayanan_persuratan_sangat_puas = 0;

if ($i['pelayanan_persuratan'] == 'Kurang Puas') {
    $var__fasilitas_pelayanan_persuratan_sangat_tidak_puas = 1;
} elseif ($i['pelayanan_persuratan'] == 'Cukup Puas') {
    $var__fasilitas_pelayanan_persuratan_tidak_puas = 1;
} elseif ($i['pelayanan_persuratan'] == 'Puas') {
    $var__fasilitas_pelayanan_persuratan_puas = 1;
} elseif ($i['pelayanan_persuratan'] == 'Sangat Puas') {
    $var__fasilitas_pelayanan_persuratan_sangat_puas = 1;
}

// parameter fasilitas_pengembalian_sisa_biaya_panjar
$var__fasilitas_pengembalian_sisa_biaya_panjar_sangat_tidak_puas = 0;
$var__fasilitas_pengembalian_sisa_biaya_panjar_tidak_puas = 0;
$var__fasilitas_pengembalian_sisa_biaya_panjar_puas = 0;
$var__fasilitas_pengembalian_sisa_biaya_panjar_sangat_puas = 0;

if ($i['pengembalian_sisa_biaya_panjar'] == 'Kurang Puas') {
    $var__fasilitas_pengembalian_sisa_biaya_panjar_sangat_tidak_puas = 1;
} elseif ($i['pengembalian_sisa_biaya_panjar'] == 'Cukup Puas') {
    $var__fasilitas_pengembalian_sisa_biaya_panjar_tidak_puas = 1;
} elseif ($i['pengembalian_sisa_biaya_panjar'] == 'Puas') {
    $var__fasilitas_pengembalian_sisa_biaya_panjar_puas = 1;
} elseif ($i['pengembalian_sisa_biaya_panjar'] == 'Sangat Puas') {
    $var__fasilitas_pengembalian_sisa_biaya_panjar_sangat_puas = 1;
}

// parameter fasilitas_permohonan_eksekusi
$var__fasilitas_permohonan_eksekusi_sangat_tidak_puas = 0;
$var__fasilitas_permohonan_eksekusi_tidak_puas = 0;
$var__fasilitas_permohonan_eksekusi_puas = 0;
$var__fasilitas_permohonan_eksekusi_sangat_puas = 0;

if ($i['permohonan_eksekusi'] == 'Kurang Puas') {
    $var__fasilitas_permohonan_eksekusi_sangat_tidak_puas = 1;
} elseif ($i['permohonan_eksekusi'] == 'Cukup Puas') {
    $var__fasilitas_permohonan_eksekusi_tidak_puas = 1;
} elseif ($i['permohonan_eksekusi'] == 'Puas') {
    $var__fasilitas_permohonan_eksekusi_puas = 1;
} elseif ($i['permohonan_eksekusi'] == 'Sangat Puas') {
    $var__fasilitas_permohonan_eksekusi_sangat_puas = 1;
}

// parameter fasilitas_sikap_petugas
$var__fasilitas_sikap_petugas_sangat_tidak_puas = 0;
$var__fasilitas_sikap_petugas_tidak_puas = 0;
$var__fasilitas_sikap_petugas_puas = 0;
$var__fasilitas_sikap_petugas_sangat_puas = 0;

if ($i['sikap_petugas'] == 'Kurang Puas') {
    $var__fasilitas_sikap_petugas_sangat_tidak_puas = 1;
} elseif ($i['sikap_petugas'] == 'Cukup Puas') {
    $var__fasilitas_sikap_petugas_tidak_puas = 1;
} elseif ($i['sikap_petugas'] == 'Puas') {
    $var__fasilitas_sikap_petugas_puas = 1;
} elseif ($i['sikap_petugas'] == 'Sangat Puas') {
    $var__fasilitas_sikap_petugas_sangat_puas = 1;
}

// parameter fasilitas_kemampuan_pengetahuan_petugas
$var__fasilitas_kemampuan_pengetahuan_petugas_sangat_tidak_puas = 0;
$var__fasilitas_kemampuan_pengetahuan_petugas_tidak_puas = 0;
$var__fasilitas_kemampuan_pengetahuan_petugas_puas = 0;
$var__fasilitas_kemampuan_pengetahuan_petugas_sangat_puas = 0;

if ($i['kemampuan_pengetahuan_petugas'] == 'Kurang Puas') {
    $var__fasilitas_kemampuan_pengetahuan_petugas_sangat_tidak_puas = 1;
} elseif ($i['kemampuan_pengetahuan_petugas'] == 'Cukup Puas') {
    $var__fasilitas_kemampuan_pengetahuan_petugas_tidak_puas = 1;
} elseif ($i['kemampuan_pengetahuan_petugas'] == 'Puas') {
    $var__fasilitas_kemampuan_pengetahuan_petugas_puas = 1;
} elseif ($i['kemampuan_pengetahuan_petugas'] == 'Sangat Puas') {
    $var__fasilitas_kemampuan_pengetahuan_petugas_sangat_puas = 1;
}

// parameter fasilitas_penampilan_petugas
$var__fasilitas_penampilan_petugas_sangat_tidak_puas = 0;
$var__fasilitas_penampilan_petugas_tidak_puas = 0;
$var__fasilitas_penampilan_petugas_puas = 0;
$var__fasilitas_penampilan_petugas_sangat_puas = 0;

if ($i['penampilan_petugas'] == 'Kurang Puas') {
    $var__fasilitas_penampilan_petugas_sangat_tidak_puas = 1;
} elseif ($i['penampilan_petugas'] == 'Cukup Puas') {
    $var__fasilitas_penampilan_petugas_tidak_puas = 1;
} elseif ($i['penampilan_petugas'] == 'Puas') {
    $var__fasilitas_penampilan_petugas_puas = 1;
} elseif ($i['penampilan_petugas'] == 'Sangat Puas') {
    $var__fasilitas_penampilan_petugas_sangat_puas = 1;
}

$total__sangat_tidak_puas = $var__fasilitas_info_sangat_tidak_puas + $var__fasilitas_toilet_sangat_tidak_puas + $var__fasilitas_parkir_sangat_tidak_puas + $var__fasilitas_kebersihan_sangat_tidak_puas + $var__fasilitas_taman_sangat_tidak_puas + $var__fasilitas_sarana_ibadah_sangat_tidak_puas + $var__fasilitas_ruang_tunggu_sangat_tidak_puas + $var__fasilitas_sistem_pembayaran_sangat_tidak_puas + $var__fasilitas_pelayanan_pendaftaran_sangat_tidak_puas + $var__fasilitas_persiapan_persidangan_sangat_tidak_puas + $var__fasilitas_ruang_sidang_sangat_tidak_puas + $var__fasilitas_proses_persidangan_sangat_tidak_puas + $var__fasilitas_waktu_pemeriksaan_sangat_tidak_puas + $var__fasilitas_pemeriksaan_setempat_sangat_tidak_puas + $var__fasilitas_profesionalitas_hakim_sangat_tidak_puas + $var__fasilitas_pemberian_salinan_putusan_sangat_tidak_puas + $var__fasilitas_pelayanan_informasi_sangat_tidak_puas + $var__fasilitas_pelayanan_pengaduan_sangat_tidak_puas + $var__fasilitas_pelayanan_persuratan_sangat_tidak_puas + $var__fasilitas_pengembalian_sisa_biaya_panjar_sangat_tidak_puas + $var__fasilitas_permohonan_eksekusi_sangat_tidak_puas + $var__fasilitas_sikap_petugas_sangat_tidak_puas + $var__fasilitas_kemampuan_pengetahuan_petugas_sangat_tidak_puas + $var__fasilitas_penampilan_petugas_sangat_tidak_puas;

$total__tidak_puas = $var__fasilitas_info_tidak_puas + $var__fasilitas_toilet_tidak_puas + $var__fasilitas_parkir_tidak_puas + $var__fasilitas_kebersihan_tidak_puas + $var__fasilitas_taman_tidak_puas + $var__fasilitas_sarana_ibadah_tidak_puas + $var__fasilitas_ruang_tunggu_tidak_puas + $var__fasilitas_sistem_pembayaran_tidak_puas + $var__fasilitas_pelayanan_pendaftaran_tidak_puas + $var__fasilitas_persiapan_persidangan_tidak_puas + $var__fasilitas_ruang_sidang_tidak_puas + $var__fasilitas_proses_persidangan_tidak_puas + $var__fasilitas_waktu_pemeriksaan_tidak_puas + $var__fasilitas_pemeriksaan_setempat_tidak_puas + $var__fasilitas_profesionalitas_hakim_tidak_puas + $var__fasilitas_pemberian_salinan_putusan_tidak_puas + $var__fasilitas_pelayanan_informasi_tidak_puas + $var__fasilitas_pelayanan_pengaduan_tidak_puas + $var__fasilitas_pelayanan_persuratan_tidak_puas + $var__fasilitas_pengembalian_sisa_biaya_panjar_tidak_puas + $var__fasilitas_permohonan_eksekusi_tidak_puas + $var__fasilitas_sikap_petugas_tidak_puas + $var__fasilitas_kemampuan_pengetahuan_petugas_tidak_puas + $var__fasilitas_penampilan_petugas_tidak_puas;

$total__puas = $var__fasilitas_info_puas + $var__fasilitas_toilet_puas + $var__fasilitas_parkir_puas + $var__fasilitas_kebersihan_puas + $var__fasilitas_taman_puas + $var__fasilitas_sarana_ibadah_puas + $var__fasilitas_ruang_tunggu_puas + $var__fasilitas_sistem_pembayaran_puas + $var__fasilitas_pelayanan_pendaftaran_puas + $var__fasilitas_persiapan_persidangan_puas + $var__fasilitas_ruang_sidang_puas + $var__fasilitas_proses_persidangan_puas + $var__fasilitas_waktu_pemeriksaan_puas + $var__fasilitas_pemeriksaan_setempat_puas + $var__fasilitas_profesionalitas_hakim_puas + $var__fasilitas_pemberian_salinan_putusan_puas + $var__fasilitas_pelayanan_informasi_puas + $var__fasilitas_pelayanan_pengaduan_puas + $var__fasilitas_pelayanan_persuratan_puas + $var__fasilitas_pengembalian_sisa_biaya_panjar_puas + $var__fasilitas_permohonan_eksekusi_puas + $var__fasilitas_sikap_petugas_puas + $var__fasilitas_kemampuan_pengetahuan_petugas_puas + $var__fasilitas_penampilan_petugas_puas;

$total__sangat_puas = $var__fasilitas_info_sangat_puas + $var__fasilitas_toilet_sangat_puas + $var__fasilitas_parkir_sangat_puas + $var__fasilitas_kebersihan_sangat_puas + $var__fasilitas_taman_sangat_puas + $var__fasilitas_sarana_ibadah_sangat_puas + $var__fasilitas_ruang_tunggu_sangat_puas + $var__fasilitas_sistem_pembayaran_sangat_puas + $var__fasilitas_pelayanan_pendaftaran_sangat_puas + $var__fasilitas_persiapan_persidangan_sangat_puas + $var__fasilitas_ruang_sidang_sangat_puas + $var__fasilitas_proses_persidangan_sangat_puas + $var__fasilitas_waktu_pemeriksaan_sangat_puas + $var__fasilitas_pemeriksaan_setempat_sangat_puas + $var__fasilitas_profesionalitas_hakim_sangat_puas + $var__fasilitas_pemberian_salinan_putusan_sangat_puas + $var__fasilitas_pelayanan_informasi_sangat_puas + $var__fasilitas_pelayanan_pengaduan_sangat_puas + $var__fasilitas_pelayanan_persuratan_sangat_puas + $var__fasilitas_pengembalian_sisa_biaya_panjar_sangat_puas + $var__fasilitas_permohonan_eksekusi_sangat_puas + $var__fasilitas_sikap_petugas_sangat_puas + $var__fasilitas_kemampuan_pengetahuan_petugas_sangat_puas + $var__fasilitas_penampilan_petugas_sangat_puas;
