<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Pegawai</h5>
            </div>
            <div class="card-header">
                <a href="<?php echo site_url('beranda/data_pegawai') ?>" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <!-- Form input -->
                <form action="<?php echo site_url('beranda/simpan_pegawai') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="NamaPegawai">Nama Pegawai</label>
                        <input type="text" id="NamaPegawai" name="Nama_Pegawai" class="form-control" placeholder="Nama Pegawai" required>
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
    </body>

    </html>