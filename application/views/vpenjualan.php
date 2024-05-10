<div class="content">
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h5>Data Penjualan</h5>
                <a href="<?php echo site_url('Beranda/tambah_penjualan') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data Penjualan
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover text-center" id="dataTable" width="100%" cellspacing="0" style="white-space: normal;">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama Pembeli</th>
                                <th>Nama Pegawai</th>
                                <th>Judul Buku</th>
                                <th>Jumlah Buku</th>
                                <th>Harga Buku</th>
                                <th>Total Harga Buku</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($tb_penjualan) && !empty($tb_penjualan)) {
                                $no = 1;
                                foreach ($tb_penjualan as $res) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td style="max-width: 200px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><?php echo $res->pembeli ?></td>
                                        <td style="max-width: 200px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><?php echo $res->pegawai ?></td>
                                        <td style="max-width: 200px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;"><?php echo $res->judul ?></td>
                                        <td><?php echo $res->jumlah ?></td>
                                        <td>Rp. <?php echo number_format($res->harga_satuan, 0, ',', '.') ?>,00</td>
                                        <td>Rp. <?php echo number_format($res->harga, 0, ',', '.') ?>,00</td>
                                        <td style="max-width: 200px; word-wrap: break-word; overflow-wrap: break-word; white-space: normal;">
                                            <a href="<?= site_url('beranda/edit_penjualan/' . $res->id_penjualan) ?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>
                                            <a href="<?php echo site_url('beranda/del_penjualan/' . $res->id_penjualan); ?>" class="btn btn-outline-danger btn-sm delete-btn" onclick="return confirmDelete()"><i class="fas fa-trash"></i>Delete</a>
                                            <a href="<?= site_url('beranda/penjualan_invoice/' . $res->id_penjualan) ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-file-alt"></i> Invoice</a>
                                        </td>
                                    </tr>
                                <?php $no++;
                                }
                            } else { ?>
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