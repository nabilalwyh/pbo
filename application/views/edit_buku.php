<div class="content">
        <div class="container">
            <div class="card mb-4 mx-1 mt-3">
                <div class="card-header">
                    <h5>Edit Data Buku</h5>
                </div>
                <div class="card-header">
                <a href="<?php echo site_url('beranda/data_buku') ?>" class="btn btn-primary"><i class="fas fa-chevron-left mr-1"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('beranda/update_buku/' . $tb_buku->id_buku); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="idBuku">ID Buku</label>
                        <input type="text" id="idBuku" name="idBuku" class="form-control" value="<?php echo $tb_buku->id_buku; ?>">
                        </div>
                        <div class="form-group">
                            <label for="NamaBuku">Nama Buku</label>
                            <input type="text" class="form-control" id="NamaBuku" name="NamaBuku" value="<?php echo $tb_buku->judul_buku; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Penulis">Penulis</label>
                            <input type="text" class="form-control" id="Penulis" name="Penulis" value="<?php echo $tb_buku->penulis; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Harga">Harga Buku</label>
                            <input type="text" class="form-control" id="Harga" name="Harga" value="<?php echo $tb_buku->harga_buku; ?>">
                        </div>
                        <div class="form-group">
                        <label for="foto">Foto</label>
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                        <img src="<?php echo base_url('assets/gambarbuku/' . $tb_buku->gambar_buku); ?>" width="100" height="100" 
                        style="border-radius: 10px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="mt-2">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
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