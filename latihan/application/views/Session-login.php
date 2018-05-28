<div class="container content">
	
<h1>Welcome back <strong><?php echo $this->session->userdata('ses_nama');?></strong></h1>
	<a href="<?php echo base_url().'page/f_kp'?>" class="bg-success s1">
		
		<div class="container">
			<span class="fa fa-git"></span>
			<p>KP (Kerja Proyek)</p>
			</div>
	</a>

	<a href="<?php echo base_url().'page/f_ta'?>" class="bg-danger s1">
	<!-- <a href="http://localhost/latihan/Ta" class="bg-success s1"> -->
		<div class="container">
			<p>TA (Tugas Akhir)</p>
		</div>
	</a>

</div>