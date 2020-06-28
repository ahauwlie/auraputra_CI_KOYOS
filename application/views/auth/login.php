<form action="<?php echo site_url('login_validation'); ?>" method="post">
	<div class="form-group">  
		<label class="control-label"></label>  
		<input type="email" id="username" name="username" placeholder="Email kamu yaa..." required="">  
		<span class="text-danger"><?php echo form_error('username'); ?></span>  
	</div>  
	<div class="form-group">  
		<label class="control-label"></label>  
		<input type="password" id="password" name="password" placeholder="Password'nya..." required="">  
		<span class="text-danger"><?php echo form_error('password'); ?></span>  
	</div>  
	<div class="button-area">
		<button type="submit" class="btn btn-primary h3" name="login">Login</button>
		<button class="btn btn-primary h3"><a href="<?php echo site_url('register'); ?>">Daftar</a></button>
	</div>
	<?php 
		if($this->input->get('gagal')==1){
			?>
			<span>username atau password salah</span>
			<?php
		}
	?>
</form>