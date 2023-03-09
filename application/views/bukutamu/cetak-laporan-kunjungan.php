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
            height: 25px;
        }
        th{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            height: 25px;
            background-color: #CCCCCC;
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
    <table style="font-size:14px;width:100%;">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>NOMOR TELEPON</th>
            <th>ALAMAT</th>
            <th>PEKERJAAN</th>
            <th>TANGGAL BERKUNJUNG</th>
            <th>KEPERLUAN</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($daftarkunjungan as $dk) : ?>
        <tr>
            <td scope="row"><?= $no++; ?></td>
            <td><?= $dk['nama']; ?></td>
            <td><?= $dk['no_tlp']; ?></td>
            <td><?= $dk['alamat']; ?></td>
            <td><?= $dk['pekerjaan']; ?></td>
            <td><?= tgl_eng_to_ind(date('d-m-Y, h:i', strtotime($dk['tanggal']))); ?></td>
            <td><?= $dk['keperluan']; ?></td>
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