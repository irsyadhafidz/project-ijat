<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data User</h1>
        </div>

        <a href="<?php echo base_url('admin/data_user/tambah_user')?>" class="btn btn-primary mb-3">Tambah User</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-striped table-bordered">
        	<tr>
        		<th>No</th>
        		<th>Nama</th>
        		<th>Username</th>
        		<th>Password</th>
        		<th>Aksi</th>
        	</tr>

            <?php 
            $no = 1;
            foreach ($user as $usr) :
            ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $usr->nama_admin ?></td>
                <td><?php echo $usr->username ?></td>
                <td><?php echo $usr->password ?></td>
                <td>

                    <div class="row">
                        <a href="<?php echo base_url('admin/data_user/delete_user/') . $usr->id_admin?>" class="btn btn-sm btn-danger mr-1"><i class="fas fa-trash"></i></a>
                        <a href="<?php echo base_url('admin/data_user/update_user/') . $usr->id_admin?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    </div>
                </td>
            </tr>

        <?php endforeach; ?>
        </table>


    </section>
</div>