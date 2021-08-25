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
    <table style="margin-top: 3%;font-size:14px;padding:5px;">
        <tr>
            <th>No</th>
            <th> Nomor Register Kuasa</th>
            <th> Tanggal Register Kuasa</th>
            <th> Nomor Surat Kuasa</th>
            <th> Tanggal Surat Kuasa</th>
            <th> Nama Pemberi Kuasa</th>
            <th> Nama Penerima Kuasa</th>
            <th> Nomor Perkara</th>
            <th> Keterangan</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($regiskuasa as $r) : ?>
        <tr>
            <th scope="row"><?= $no++; ?></th>
            <td><?= $r['nomor_regiskuasa']; ?></td>
            <td><?= date('d-m-Y', strtotime($r['tgl_regiskuasa'])); ?></td>
            <td><?= $r['nomor_suratkuasa']; ?></td>
            <td><?= date('d-m-Y', strtotime($r['tgl_suratkuasa'])); ?></td>
            <td><?= $r['nama_pemberikuasa']; ?></td>
            <td><?= $r['nama_penerimakuasa']; ?></td>
            <td><?= $r['nomor_perkara']; ?></td>
            <td><?= $r['keterangan']; ?></td>
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