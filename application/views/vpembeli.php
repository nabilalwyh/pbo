<div class="content">
    <div class="container">
        <div class="card mb-4 mx-1 mt-3">
            <div class="card-header">
                <h5>Data Pembeli</h5>
                <a href="<?php echo site_url('Beranda/tambah_data_pembeli') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
                <div class="card-body text-center">
                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pembeli</th>
                                    <th>Nomor Telpon</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($tb_pembeli as $res) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $res->nama_pembeli ?></td>
                                        <td><?php echo $res->no_telp ?></td>
                                        <td><?php echo $res->alamat ?></td>
                                        <td>
                                            <a href="<?= site_url('beranda/edit_pembeli/' . $res->id_pembeli) ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>
                                            <a href="<?php echo site_url('beranda/del_pembeli/' . $res->id_pembeli); ?>" class="btn btn-outline-danger btn-sm delete-btn" onclick="return confirmDelete()"><i class="fas fa-trash"></i>Delete</a>
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