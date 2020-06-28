<form action="<?php echo site_url('register/submit'); ?>" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label class="control-label"></label>   
		<input type="text" id="nama" name="nama_adm" placeholder="Nama Lengkap yaa..." required="">  
		<span class="text-danger"><?php echo form_error('nama_adm'); ?></span>  
	</div>
	<div class="form-group">  
		<label class="control-label"></label> 
		<input type="text" id="moto" name="moto_adm" placeholder="Moto kamu ka..." required="">  
		<span class="text-danger"><?php echo form_error('moto_adm'); ?></span>
	</div>  
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
	<div class="form-group">  
		<label class="control-label"></label>  
		<input type="file" name="image" value="upload" required="">
	</div> 
	<br><h3>boleh kosong kok sosmednya</h3>
	<div class="form-group">
		<label class="control-label"></label>   
		<input type="text" id="whatsapp" name="whatsapp" placeholder="WA'nya dong kk...">  
		<span class="text-danger"><?php echo form_error('whatsapp'); ?></span>  
	</div>
	<div class="form-group">
		<label class="control-label"></label>   
		<input type="text" id="instagram" name="instagram" placeholder="IG kamu apa?">  
		<span class="text-danger"><?php echo form_error('instagram'); ?></span>  
	</div>
	<div class="form-group">
		<label class="control-label"></label>   
		<input type="text" id="facebook" name="facebook" placeholder="FB'nya apa?">  
		<span class="text-danger"><?php echo form_error('facebook'); ?></span>  
	</div>
	<div class="form-group">
		<label class="control-label"></label>   
		<input type="text" id="twitter" name="twitter" placeholder="Twitter'nya boleh kk...">  
		<span class="text-danger"><?php echo form_error('twitter'); ?></span>
	</div>
	<div class="form-group">
		<label class="control-label"></label>   
		<input type="text" id="youtube" name="youtube" placeholder="Youtube channelnya boleh....">  
		<span class="text-danger"><?php echo form_error('youtube'); ?></span>
	</div>
	<br>
	<div class="button-area">
		<button type="submit" class="btn btn-primary h3" name="daftar">Daftar</button>
	</div>
</form>