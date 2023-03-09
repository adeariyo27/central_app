<!DOCTYPE html>
<html lang="en"><head>
    <title><?= $title ?></title>
    <style>
        *{
            font-family:Arial, Helvetica, sans-serif;
        }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        }
        #footer-tanggal {
			margin-left: 800px;
			padding-top: 30px;
		}

		#footer-jabatan {
			margin-left: 800px;
		}

		#footer-nama {
			margin-left: 800px;
			margin-top: 80px;
			font-weight: bold;
		}

		#footer-nip {
			margin-left: 800px;

		}
    </style>
</head><body>
    <table align="center" style="text-align: center;" border="0">
		<tr>
			<td>
				<p style="font-weight: bold"><?= $judul_laporan; ?></p>
			</td>
		</tr>
		<tr>
			<td>
                
            </td>
		</tr>
	</table>
    <table style="margin-top: 1%;font-size:14px;padding:5px; width:100%;">
        <tr>
            <th style="width:3%">No.</th>
            <th style="width:16%"> Nomor Perkara</th>
            <th style="width:12%"> Tgl. Pendaftaran</th>
            <th style="width:12%"> Tgl. Putusan Tk. Pertama</th>
            <th style="width:12%;"> Tgl. Putusan Tk. Banding</th>
            <th style="width:12%"> Tgl. Putusan Tk. Kasasi</th>
            <th style="width:12%"> Tgl. Putusan Tk. PK</th>
            <th style="width:12%"> Tgl. BHT</th>
            <th style="width:9%"> Keterangan</th>
        </tr>
            <?php $no = 1; ?>
                                    <?php foreach ($perkarabht as $r) : ?>
                                        <tr>
                                            <th scope="row" style="width:3%"><?= $no++; ?></th>
                                            <td style="width:16%"><?= $r['nomor_perkara']; ?></td>
                                            <td style="width:12%"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_pendaftaran']))); ?></td>
                                            <td style="width:12%"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_putusan']))); ?></td>

                                            <!-- Banding -->
                                            <?php if (isset($r['putusan_banding'])) : ?>
                                                <td style="width:12%;"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_banding']))); ?></td>
                                            <?php elseif (isset($r['tanggal_bht'])) : ?>
                                                <td style="width:12%;" class="text-muted"><i>Tidak Banding</i></td>
                                            <?php elseif (isset($r['permohonan_banding'])) : ?>
                                                <td style="width:12%" class="text-muted"><i>Proses Banding</i></td>
                                            <?php else : ?>
                                                <td style="width:12%;">-</td>
                                            <?php endif; ?>
                                            
                                            <!-- Kasasi -->
                                            <?php if (isset($r['putusan_kasasi'])) : ?>
                                                <td style="width:12%"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_kasasi']))); ?></td>
                                            <?php elseif (isset($r['tanggal_bht'])) : ?>
                                                <td style="width:12%" class="text-muted"><i>Tidak Kasasi</i></td>
                                            <?php elseif (isset($r['permohonan_kasasi'])) : ?>
                                                <td style="width:12%" class="text-muted"><i>Proses Kasasi</i></td>
                                            <?php else : ?>
                                                <td style="width:12%">-</td>
                                            <?php endif; ?>

                                            <!-- PK -->
                                            <?php if (isset($r['putusan_pk'])) : ?>
                                                <td style="width:12%"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['putusan_pk']))); ?></td>
                                            <?php elseif (isset($r['tanggal_bht'])) : ?>
                                                <td style="width:12%" class="text-muted"><i>Tidak PK</i></td>
                                            <?php elseif (isset($r['permohonan_pk'])) : ?>
                                                <td style="width:12%" class="text-muted"><i>Proses PK</i></td>
                                            <?php else : ?>
                                                <td style="width:12%">-</td>
                                            <?php endif; ?>

                                            <?php if (isset($r['tanggal_bht'])) : ?>
                                                <td style="width:12%"><?= tgl_eng_to_ind(date("d-m-Y", strtotime($r['tanggal_bht']))); ?></td>
                                            <?php else : ?>
                                                <td style="width:12%">-</td>
                                            <?php endif; ?>
                                            <?php if (isset($r['tanggal_bht'])) : ?>
                                                <td style="width:12%" class="text-success">Sudah BHT</td>
                                            <?php else : ?>
                                                <td style="width:12%" class="text-danger"><strong>Belum BHT</strong></td>
                                            <?php endif; ?>
                                            <!-- <td>
                                            <?php if (isset($r['tanggal_bht'])) : ?>
                                                <a href="<?= base_url('perkara/uploadBHT'); ?>" class="badge badge-success px-2"><i class=" icon-upload" title="Upload File"></i></a>
                                                <a href="" class="badge badge-danger px-2" target="_blank"><i class=" icon-print" title="Lihat File"></i></a>
                                            <?php else : ?>
                                                <a href="" class="badge badge-success px-2" target="_blank"><i class=" icon-upload" title="Upload File"></i></a>
                                            <?php endif; ?>
                                            </td> -->
                                        </tr>
                                    <?php endforeach; ?>
    </table>
    
        <div id="footer-tanggal">
			<?= $satker['kota_satker']; ?>,<?= tgl_eng_to_ind(date(" d-m-Y")); ?>
		</div>

		<div id="footer-jabatan">
            <?php foreach($penandatangan as $p) : ?>
			<?= $p['jabatan']; ?>
            <?php endforeach;  ?>
		</div>
		<div id="footer-nama">
        <?php foreach($penandatangan as $p) : ?>
			<?= $p['name']; ?>
            <?php endforeach;  ?>
		</div>
		<div id="footer-nip">
			<?= $p['nip'] ?>
		</div>
</body></html>