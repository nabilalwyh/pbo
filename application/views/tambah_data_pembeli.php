<div class="content">
    <div class="container">
        <div class="card">
        <div class="card-header">
                <h5>Tambah Data Pembeli</h5>
            </div>
            <div class="card-header">
                <a href="<?php echo site_url('beranda/data_pegawai') ?>" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <!-- Form input -->
                <form action="<?php echo site_url('beranda/simpan_pembeli') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="NamaPembeli">Nama Pembeli</label>
                        <input type="text" id="NamaPembeli" name="Nama_Pembeli" class="form-control" placeholder="Nama Pembeli" required>
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <textarea id="Alamat" name="Alamat" class="form-control" placeholder="Alamat" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>