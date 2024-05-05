<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="panel">
    <div class="card">
            <div class="card-header">
                <h5>Invoice Penjualan</h5>
            </div>
            <div class="card-body">
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
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    window.print();
</script>
</body>
</html>