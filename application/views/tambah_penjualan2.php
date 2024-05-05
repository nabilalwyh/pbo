<div class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Penjualan</h5>
            </div>
            <div class="card-header">
                <a href="<?= site_url('Beranda/data_penjualan') ?>" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
                <form method="post" action="<?= site_url('beranda/simpan_penjualan') ?>">
                    <div class="form-group">
                        <label for="NamaPembeli">Nama Pembeli</label>
                        <select class="form-control" id="NamaPembeli" name="Nama_Pembeli" required>
                            <option value="">-Pilih-</option>
                            <?php foreach ($tb_pembeli as $pembeli) : ?>
                                <option value="<?= $pembeli->id_pembeli ?>"><?= $pembeli->nama_pembeli ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaPegawai">Nama Pegawai</label>
                        <select class="form-control" id="NamaPegawai" name="Nama_Pegawai" required>
                            <option value="">-Pilih-</option>
                            <?php foreach ($tb_pegawai as $pegawai) : ?>
                                <option value="<?= $pegawai->id_pegawai ?>"><?= $pegawai->nama_pegawai ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NamaBuku">Judul Buku</label>
                        <select class="form-control" id="NamaBuku" name="Nama_Buku" required>
                            <option value="">-Pilih-</option>
                            <?php foreach ($tb_buku as $buku) : ?>
                                <option value="<?= $buku->id_buku ?>"><?= $buku->judul_buku ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga Buku</label>
                        <select class="form-control" id="Harga" name="Harga_Buku" required>
                            <option value="">-Pilih-</option>
                            <?php foreach ($tb_buku as $harga) : ?>
                                <option value="<?= $harga->harga_buku ?>"><?= $harga->harga_buku ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>