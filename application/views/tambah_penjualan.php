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
          <table class="table table-bordered mt-3" id="rundownTable">
            <thead>
              <td style="width: 70%">
                Judul Buku
              </td>
              <td>
                Action
              </td>

            </thead>
            <tbody>
              <tr>
                <td>
                  <select class="form-control" id="NamaBuku" name="Nama_Buku[]" required>
                    <option value="">-Pilih-</option>
                    <?php foreach ($tb_buku as $buku) : ?>
                      <option value="<?= $buku->id_buku ?>"><?= $buku->judul_buku ?></option>
                    <?php endforeach; ?>
                  </select>
                </td>



                <td>
                  <a href="" class="btn btn-danger container-fluid">Delete</a>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="d-flex flex-row-reverse">
            <div class="p-2">
              <a onclick="myFunc()" class="btn btn-primary rounded-pill">Tambah Pesanan Baru</a>
            </div>
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

<!-- <script>
  var count = 0;

  function myFunc() {
    console.log("Halo");
    count++;
    var table = document.getElementById("rundownTable");
    var row = table.insertRow();
    var buku = row.insertCell(0);
    var action = row.insertCell(1);
    buku.innerHTML = "<select class='form-control' id='NamaBuku' name='Nama_Buku[]' required> <option value=''>-Pilih-</option> <?php foreach ($tb_buku as $buku) : ?> <option value = '<?= $buku->id_buku ?>' > <?= $buku->judul_buku ?> </option>
  <?php endforeach; ?> < /select>";
  action.innerHTML = "<a onclick='myDeleteFunction(" + count +
    ")' class='btn btn-danger container-fluid'>Delete</a>";
  }

  function myDeleteFunction(row) {
    count--;
    console.log(row + " test");
    document.getElementById("rundownTable").deleteRow(row);
  }

  myFunc();
</script> -->