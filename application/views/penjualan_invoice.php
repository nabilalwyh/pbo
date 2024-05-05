<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Invoice Penjualan</h5>
            </div>
            <div class="card-header">
                <hr>
                <div class="card-header">
                    <a href="<?= site_url('Beranda/data_penjualan') ?>" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('beranda/cetak_invoice/' . $tb_penjualan->id_penjualan); ?>" method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th width="30%">Detail Penjualan:</th>
                                    <td>INVOICE-<?= $tb_penjualan->id_penjualan ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Pembeli:</th>
                                    <td><?= $tb_penjualan->pembeli ?></td>
                                </tr>
                                <tr>
                                    <th>Nama Pegawai:</th>
                                    <td><?= $tb_penjualan->pegawai ?></td>
                                </tr>
                                <tr>
                                    <th>Judul Buku:</th>
                                    <td><?= $tb_penjualan->judul ?></td>
                                </tr>
                                <tr>
                                    <th>Harga Buku:</th>
                                    <td>Rp. <?= number_format($tb_penjualan->harga, 0, ',', '.') ?>,00</td>
                                </tr>
                            </table>
                        </div>
                        <!-- Tombol Cetak -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-print"></i> CETAK</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>