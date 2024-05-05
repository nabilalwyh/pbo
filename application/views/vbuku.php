<div class="content">
        <div class="container">
            <div class="card mb-4 mx-1 mt-3">
                <div class="card-header">
                <h5>Data Buku</h5>
                    <a href="<?php echo site_url ('Beranda/tambah_buku') ?>" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Buku
                    </a>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Buku</th>
                                        <th>Judul Buku</th>
                                        <th>Penulis</th>
                                        <th>Harga</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; ?>
                                    <?php foreach ($tb_buku as $res) { ?> 
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $res->id_buku ?></td>
                                            <td><?php echo $res->judul_buku ?></td>
                                            <td><?php echo $res->penulis ?></td>
                                            <td>Rp. <?php echo number_format($res->harga_buku, 0, ',', '.') ?>,00</td>
                                            <td><img src="<?= base_url()?>assets/gambarbuku/<?=$res->gambar_buku; ?>" width="100" height="100" alt=""></td>
                                            <td>
                                            <a href="<?= site_url('beranda/edit_buku/'.$res->id_buku)?>" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>   
                                            <a href="<?php echo site_url('beranda/del_buku/'.$res->id_buku); ?>" class="btn btn-outline-danger btn-sm delete-btn" 
                                            onclick="return confirmDelete()"><i class="fas fa-trash"></i>Delete</a>
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
    