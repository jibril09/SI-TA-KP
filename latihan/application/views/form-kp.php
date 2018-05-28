<div class="container content">
	<h2 class="ion ion-university">Form KP</h2>
	<hr/>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>NPM</th>
				<th>Nama</th>
				<th>Kelas</th>
				<!-- <th>Jurusan</th> -->
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
					<!-- <td><?php echo $value['jurusan']; ?></td> -->
					<td><?php echo "Catatan dari pembimbing";?></td>
				</tr>
				<?php 
				$i++;
				}
				 ?>
		</tbody>
	</table>
</div>