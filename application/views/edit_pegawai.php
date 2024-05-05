<div class="content">
        <div class="container">
            <div class="card mb-4 mx-1 mt-3">
                <div class="card-header">
                    <h3>Edit Data Pegawai</h3>
                </div>
                <div class="card-header">
                <a href="<?php echo site_url('beranda/data_pegawai') ?>" class="btn btn-primary"><i class="fas fa-chevron-left mr-1"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('beranda/update_pegawai/' . $tb_pegawai->id_pegawai); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="NamaPegawai">Nama Pegawai</label>
                            <input type="text" class="form-control" id="NamaPegawai" name="NamaPegawai" value="<?php echo $tb_pegawai->nama_pegawai; ?>">
                        </div>
                        <div class="form-group">
                        <label for="foto">Foto Pegawai</label>
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                        <img src="<?php echo base_url('assets/gambarbuku/' . $tb_pegawai->gambar_pegawai); ?>" width="100" height="100" 
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