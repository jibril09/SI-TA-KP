<br>
<!-- <div class="container col-md-4 mt-5 mb-4 form-control content">

	<center><img src="ft.jpg"></center>
	<center><h2>SIKTA Login</h2></center>

<form action="session/do_login" method="post">
	<div class="form-group">
		<label for="username">Username</label>
		<input class="form-control" type="text" name="uname" id="uname" placeholder="Username" minlength="3" required>
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input class="form-control" type="password" name="pass" id="password" placeholder="Password" required>
	</div>

	<button type="submit" class="btn btn-primary">Login</button>
</form>
</div> -->

<div class="container col-md-4 mt-5 mb-4 form-control content">
	<center><img src="ft.jpg"></center>
	<center><h2>SIKTA Login</h2></center>
<br>
          <form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
</div> <!-- /container -->