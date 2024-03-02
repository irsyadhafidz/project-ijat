<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Tambah Data User</h1>
        </div>
    </section>

    <form method="POST" action="<?php echo base_url('admin/data_user/tambah_user_aksi') ?>">
    	
    	<div class="form-group">
    		<label>Nama Pengguna</label>
    		<input type="text" name="nama_admin" class="form-control">
    		<?php echo form_error('nama_admin','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	<div class="form-group">
    		<label>Username</label>
    		<input type="text" name="usrname" class="form-control">
    		<?php echo form_error('usrname','<span class="text-small text-danger">','</span>') ?>
    	</div>
        <div class="form-group">
    		<label>Password</label>
    		<input type="password" name="pass" class="form-control">
    		<?php echo form_error('pass','<span class="text-small text-danger">','</span>') ?>
    	</div>
    	

    	<button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    	<button type="reset" class="btn btn-sm btn-danger">Reset</button>



    </form>
</div>