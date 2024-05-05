<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="<?php echo site_url('beranda/data_buku') ?>" class="btn btn-primary"> Back</a>
            </div>
            <div class="card-body">
                <!-- Form input -->
                <form action="<?php echo site_url('beranda/simpan_buku') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="idBuku">ID Buku</label>
                        <input type="text" id="idBuku" name="Id_Buku" class="form-control" placeholder="ID Buku" required>
                    </div>
                    <div class="form-group">
                        <label for="NamaBuku">Nama Buku</label>
                        <input type="text" id="NamaBuku" name="Nama_Buku" class="form-control" placeholder="Nama Buku" required>
                    </div>
                    <div class="form-group">
                        <label for="NamaPenulis">Penulis</label>
                        <input type="text" id="NamaPenulis" name="Nama_Penulis" class="form-control" placeholder="Penulis" required>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga</label>
                        <input type="text" id="Harga" name="Harga_Buku" class="form-control" placeholder="Harga" required>
                    </div>
                    <div class="form-group">
                            <label for="foto">Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto" required>
                                <label class="custom-file-label" for="foto">Choose file</label>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script>
    document.getElementById('foto').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        document.querySelector('.custom-file-label').innerText = fileName;
    });
</script>
