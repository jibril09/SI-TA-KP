<style type="text/css">
	.bg{
		background-color: #424651;
	}
</style>
<header class="navbar sticky-top flex-column flex-md-row  bg" id="he-ad">
	<div class="navbar">
		<ul class="nav nav-pils flex-row">
			<li class="nav-item" role="presentation">
				<a class="nav-link text-white" href="http://localhost/latihan/Page">Home </a>
			</li>
			<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">eBimbingan</a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          				<a class="dropdown-item" href="<?php echo base_url().'page/f_kp'?>">KP</a>
       					<a class="dropdown-item" href="<?php echo base_url().'page/f_ta'?>">TA</a>
        			</div>
      		</li>

		</ul>
	</div>

	<a href="<?php echo base_url().'Login/logout'?>" class="btn btn-primary">Logout</a>
</header>
<br>
