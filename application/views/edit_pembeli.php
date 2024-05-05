<div class="content">
        <div class="container">
            <div class="card mb-4 mx-1 mt-3">
                <div class="card-header">
                    <h3>Edit Data Pembeli</h3>
                </div>
                <div class="card-header">
                <a href="<?php echo site_url('beranda/data_pembeli') ?>" class="btn btn-primary"><i class="fas fa-chevron-left mr-1"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('beranda/update_pembeli/' . $tb_pembeli->id_pembeli); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="NamaPembeli">Nama Pembeli</label>
                            <input type="text" class="form-control" id="NamaPembeli" name="NamaPembeli" value="<?php echo $tb_pembeli->nama_pembeli; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Alamat">Alamat</label>
                            <textarea class="form-control" id="Alamat" name="Alamat"><?php echo $tb_pembeli->alamat; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>