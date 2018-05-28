<div class="container content">
	<?php $this->load->view('menu');?> <!--Include menu--> 
	<h2>Form TA</h2>
<!-- 
	<p>Maaf Anda belum mengambil matakuliah Tugas Akhir (TA)</p> -->
<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Kelas</th>
				<th>Jurusan</th>
				<th>Catatan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$i = 1;
				foreach ($mhs as $key => $value) {
			?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $value['npm']; ?></td>
					<td><?php echo $value['nama']; ?></td>
					<td><?php echo $value['kelas']; ?></td>
					<td><?php echo "Catatan dari pembimbing";?></td>
				</tr>
				<?php 
				$i++;
				}
				 ?>
		</tbody>
	</table>
</div>