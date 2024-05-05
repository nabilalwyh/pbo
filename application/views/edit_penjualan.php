<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Edit Data Penjualan</h3>
            </div>
            <div class="card-header">
                <a href="<?= site_url('beranda/data_penjualan') ?>" class="btn btn-primary"><i class="fas fa-chevron-left mr-1"></i> Back</a>
            </div>
            <div class="card-body">
                <form action="<?= site_url('beranda/update_penjualan/' . $tb_penjualan->id_penjualan); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="NamaPembeli">Nama Pembeli</label>
                        <select class="form-control" id="NamaPembeli" name="Nama_Pembeli" required>
                            <?php foreach ($tb_pembeli as $pembeli) : ?>
                                <option value="<?= $pembeli->nama_pembeli ?>" <?= ($pembeli->nama_pembeli == $tb_penjualan->pembeli) ? 'selected="selected"' : '' ?>>
                                    <?= $pembeli->nama_pembeli ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaPegawai">Nama Pegawai</label>
                        <select class="form-control" id="NamaPegawai" name="Nama_Pegawai" required>
                            <?php foreach ($tb_pegawai as $pegawai) : ?>
                                <option value="<?=$pegawai->nama_pegawai ?>" <?= ($pegawai->nama_pegawai == $tb_penjualan->pegawai) ? 'selected="selected"' : '' ?>>
                                    <?= $pegawai->nama_pegawai ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaBuku">Judul Buku</label>
                        <select class="form-control" id="NamaBuku" name="Nama_Buku" required>
                            <?php foreach ($tb_buku as $buku) : ?>
                                <option value="<?=$buku->judul_buku ?>" <?= ($buku->judul_buku == $tb_penjualan->judul) ? 'selected="selected"' : '' ?>>
                                    <?= $buku->judul_buku ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga Buku</label>
                        <select class="form-control" id="Harga" name="Harga_Buku" required>
                            <?php foreach ($tb_buku as $buku) : ?>
                                <option value="<?= $buku->harga_buku ?>" <?= ($buku->harga_buku == $tb_penjualan->harga) ? 'selected="selected"' : '' ?>>
                                    <?= $buku->harga_buku ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


