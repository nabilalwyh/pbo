<div class="content">
    <div class="container">
        <div class="card mb-4 mx-1 mt-3">
            <div class="card-header">
                <h5>Data Pegawai</h5>
                <a href="<?php echo site_url('Beranda/tambah_data_pegawai') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Id Pegawai</th>
                                    <th>Nama Pegawai</th>
                                    <th>Foto Pegawai</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($tb_pegawai as $res) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $res->id_pegawai ?></td>
                                        <td><?php echo $res->nama_pegawai ?></td>
                                        <td><img src="<?= base_url() ?>assets/pegawai/<?= $res->gambar_pegawai; ?>" width="100" height="100" alt=""></td>
                                        <td>
                                            <a href="<?= site_url('beranda/edit_pegawai/' . $res->id_pegawai) ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>
                                            <a href="<?php echo site_url('beranda/del_pegawai/' . $res->id_pegawai); ?>" class="btn btn-outline-danger btn-sm delete-btn" onclick="return confirmDelete()"><i class="fas fa-trash"></i>Delete</a>
                                        </td>
                                    </tr>
                                    <?php $no++ ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
        }
    </script>