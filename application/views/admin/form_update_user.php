<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Pengguna</h1>
        </div>
    </section>

    <?php foreach ($user as $usr) : ?>
        <form method="POST" action="<?php echo base_url('admin/data_user/update_user_aksi') ?>">
    	
    	<div class="form-group">
    		<label>Nama Pengguna</label>
            <input type="hidden" name="id_admin" value="<?php echo $usr->id_admin ?>">
    		<input type="text" name="nama_admin" class="form-control" value="<?php echo $usr->nama_admin ?>">
    		<?php echo form_error('nama_admin','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>Username</label>
    		<input type="text" name="usrname" class="form-control" value="<?php echo $usr->username ?>">
    		<?php echo form_error('usrname','<span class="text-small text-danger">','</span>') ?>
    	</div>
        <div class="form-group">
    		<label>Password</label>
    		<input type="password" name="pass" class="form-control" value="">
    		<?php echo form_error('pass','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	

    	<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    	<button type="reset" class="btn btn-sm btn-danger">Reset</button>



    </form>
<?php endforeach; ?>
</div>