<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="artikel">
	<h3>DAFTAR REKAM CETAK SURAT</h3>
	<table class="table table-striped table-bordred">
		<thead>
			<tr>
				<th style="text-align: center;vertical-align: middle;">No</th>
				<th style="text-align: center;vertical-align: middle;">Nomor Surat</th>
				<th style="text-align: center;vertical-align: middle;">Jenis Surat</th>
				<th style="text-align: center;vertical-align: middle;">Nama Staf</th>
				<th style="text-align: center;vertical-align: middle;">Tanggal</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($surat_keluar as $data): ?>
				<tr>
					<td align="center" width="2"><?php echo $data['no']?></td>
					<td><?php echo $data['no_surat']?></td>
					<td><?php echo $data['format']?></td>
					<td><?php echo $data['pamong']?></td>
					<td><?php echo tgl_indo2($data['tanggal'])?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<div class="teks">
		<?php //$this->load->view('surat/signature.php');?>
	</div>
</div>