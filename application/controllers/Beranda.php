<?php
class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
        $this->load->library('upload');
        $this->load->library('session');
        if (!$this->session->userdata('email')) {
            return redirect('/auth');
        }
    }
    public function index()
    {
        //$this->load->view("vberanda");
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Home',
        ]);
        $this->load->view('template/content');
        $this->load->view('template/footer');
    }
    public function data_pegawai()
    {
        $data['tb_pegawai'] = $this->Tokobuku_model->get_all_pegawai()->result();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Daftar Pegawai'
        ]);
        $this->load->view('vpegawai', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data_pegawai()
    {
        $data['page'] = "Tambah Data Pegawai";
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', $data);
        $this->load->view('tambah_data_pegawai');
        $this->load->view('template/footer');
    }
    public function simpan_pegawai()
    {
        $config['upload_path'] = './assets/gambarbuku/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 5120;

        $this->upload->initialize($config);

        $data = array(
            'nama_pegawai' => $this->input->post('Nama_Pegawai', true),
        );

        if ($this->upload->do_upload('foto')) {
            $data['gambar_pegawai'] = $this->upload->data('file_name');
        } else {
            $error = $this->upload->display_errors();
            echo $error;
            return;
        }


        $insert = $this->Tokobuku_model->simpan_data_pegawai('tb_pegawai', $data);
        if ($insert > 0) {
            redirect('beranda/data_pegawai');
        } else {
            echo 'Gagal Disimpan';
        }
    }



    public function data_pembeli()
    {
        $data['tb_pembeli'] = $this->Tokobuku_model->get_all_pembeli()->result();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Data Pembeli',
        ]);
        $this->load->view('vpembeli', $data);
        $this->load->view('template/footer');
    }
    public function tambah_data_pembeli()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Tambah Data Pembeli',
        ]);
        $this->load->view('tambah_data_pembeli');
        $this->load->view('template/footer');
    }


    public function simpan_pembeli()
    {
        $data = array(
            'nama_pembeli' => $this->input->post('Nama_Pembeli', true),
            'no_telp' => $this->input->post('No_Telp', true),
            'alamat' => $this->input->post('Alamat', true),
        );

        $insert = $this->Tokobuku_model->simpan_data_pembeli('tb_pembeli', $data);
        if ($insert > 0) {
            redirect('beranda/data_pembeli');
        } else {
            echo 'Gagal Disimpan';
        }
    }

    public function data_buku()
    {
        $data['tb_buku'] = $this->Tokobuku_model->get_all_buku()->result();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Daftar Buku',
        ]);
        $this->load->view('vbuku', $data);
        $this->load->view('template/footer');
    }
    public function tambah_buku()
    {
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Tambah Daftar Buku'
        ]);
        $this->load->view('tambah_buku');
        $this->load->view('template/footer');
        // $this->load->view('template/head');
        // $this->load->view('template/navbar');
        // $this->load->view('template/sidebar');
        // $this->load->view('tambah_buku');
        // $this->load->view('template/footer');
    }
    public function simpan_buku()
    {
        $config['upload_path'] = './assets/gambarbuku/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 5120;

        $this->upload->initialize($config);

        $id_buku = $this->input->post('Id_Buku', true);
        $judul_buku = $this->input->post('Nama_Buku', true);
        $penulis = $this->input->post('Nama_Penulis', true);
        $harga_buku = $this->input->post('Harga_Buku', true);

        // Validasi harga buku negatif
        if ($harga_buku < 0) {
            echo '<script>alert("Harga buku tidak boleh negatif!"); window.history.back();</script>';
            return;
        }

        $data = array(
            'id_buku' => $id_buku,
            'judul_buku' => $judul_buku,
            'penulis' => $penulis,
            'harga_buku' => $harga_buku,
        );

        if ($this->upload->do_upload('foto')) {
            $data['gambar_buku'] = $this->upload->data('file_name');
        } else {
            $error = $this->upload->display_errors();
            echo $error;
            return;
        }

        $insert = $this->Tokobuku_model->simpan_data_buku('tb_buku', $data);
        if ($insert > 0) {
            redirect('beranda/data_buku');
        } else {
            echo 'Gagal Disimpan';
        }
    }

    public function del_pegawai($id_pegawai)
    {
        $this->Tokobuku_model->pgDelete($id_pegawai);
        redirect('Beranda/data_pegawai');
    }

    public function del_pembeli($id_pembeli)
    {
        $this->Tokobuku_model->pbDelete($id_pembeli);
        redirect('Beranda/data_pembeli');
    }

    public function del_buku($id_buku)
    {
        $this->Tokobuku_model->bkDelete($id_buku);
        redirect('Beranda/data_buku');
    }

    public function edit_pegawai($id_pegawai)
    {
        // Ambil data produk berdasarkan id
        $data['tb_pegawai'] = $this->Tokobuku_model->get_data_pegawai($id_pegawai);

        $this->load->view("template/head");
        $this->load->view("template/sidebar");
        $this->load->view('template/navbar', [
            'page' => 'Edit Data Pegawai',
        ]);
        $this->load->view("edit_pegawai", $data);
        $this->load->view("template/footer");
    }

    public function update_pegawai($id_pegawai)
    {
        $config['upload_path'] = './assets/gambarbuku/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 5120;

        $this->upload->initialize($config);

        $data = array(
            'nama_pegawai' => $this->input->post('NamaPegawai', true),
        );

        // Cek apakah ada file yang diupload
        if (!empty($_FILES['foto']['name'])) {
            // Jika ada, lakukan proses upload
            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $data['gambar_pegawai'] = $upload_data['file_name'];
            } else {
                // Jika gagal upload, tampilkan pesan kesalahan
                echo $this->upload->display_errors();
                return;
            }
        }


        // Panggil fungsi update_produk dari model untuk melakukan pembaruan data
        $update = $this->Tokobuku_model->update_pegawai($id_pegawai, $data);

        if ($update) {
            // Jika berhasil, redirect ke halaman view_data
            redirect("beranda/data_pegawai");
        } else {
            // Jika gagal, tampilkan pesan kesalahan
            echo 'Gagal mengupdate produk';
        }
    }

    public function edit_pembeli($id_pembeli)
    {
        // Ambil data produk berdasarkan id
        $data['tb_pembeli'] = $this->Tokobuku_model->get_data_pembeli($id_pembeli);

        $this->load->view("template/head");
        $this->load->view("template/sidebar");
        $this->load->view('template/navbar', [
            'page' => 'Edit Data Pembeli',
        ]);
        $this->load->view("edit_pembeli", $data);
        $this->load->view("template/footer");
    }

    public function update_pembeli($id_pembeli)
    {
        $data = array(
            'nama_pembeli' => $this->input->post('NamaPembeli', true),
            'alamat' => $this->input->post('Alamat', true),
        );

        // Panggil fungsi update_produk dari model untuk melakukan pembaruan data
        $update = $this->Tokobuku_model->update_pembeli($id_pembeli, $data);

        if ($update) {
            // Jika berhasil, redirect ke halaman view_data
            redirect("beranda/data_pembeli");
        } else {
            // Jika gagal, tampilkan pesan kesalahan
            echo 'Gagal mengupdate produk';
        }
    }
    public function edit_buku($id_buku)
    {
        // Ambil data produk berdasarkan id
        $data['tb_buku'] = $this->Tokobuku_model->get_data_buku($id_buku);

        $this->load->view("template/head");
        $this->load->view("template/sidebar");
        $this->load->view('template/navbar', [
            'page' => 'Edit Data Buku',
        ]);
        $this->load->view("edit_buku", $data);
        $this->load->view("template/footer");
    }

    public function update_buku($id_buku)
    {
        $config['upload_path'] = './assets/gambarbuku/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 5120;

        $this->upload->initialize($config);

        $data = array(
            'id_buku' => $this->input->post('idBuku', true),
            'judul_buku' => $this->input->post('NamaBuku', true),
            'penulis' => $this->input->post('Penulis', true),
            'harga_buku' => $this->input->post('Harga', true),
        );

        // Validasi harga buku negatif
        if ($data['harga_buku'] < 0) {
            echo '<script>alert("Harga buku tidak boleh negatif!"); window.history.back();</script>';
            return;
        }

        // Cek apakah ada file yang diupload
        if (!empty($_FILES['foto']['name'])) {
            // Jika ada, lakukan proses upload
            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $data['gambar_buku'] = $upload_data['file_name'];
            } else {
                // Jika gagal upload, tampilkan pesan kesalahan
                echo $this->upload->display_errors();
                return;
            }
        }

        // Panggil fungsi update_produk dari model untuk melakukan pembaruan data
        $update = $this->Tokobuku_model->update_buku($id_buku, $data);

        if ($update) {
            // Jika berhasil, redirect ke halaman view_data
            redirect("beranda/data_buku");
        } else {
            // Jika gagal, tampilkan pesan kesalahan
            echo 'Gagal mengupdate produk';
        }
    }


    public function data_penjualan()
    {
        $data['tb_penjualan'] = $this->Tokobuku_model->get_all_penjualan()->result();
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Data Penjualan',
        ]);
        $this->load->view('vpenjualan', $data);
        $this->load->view('template/footer');

        // Ambil data pembeli dari model
        $data['tb_pembeli'] = $this->Tokobuku_model->get_all_pembeli()->result();

        // Ambil data pegawai dari model
        $data['tb_pegawai'] = $this->Tokobuku_model->get_all_pegawai()->result();

        // Ambil data buku dari model
        $data['tb_buku'] = $this->Tokobuku_model->get_all_buku()->result();
    }

    public function tambah_penjualan()
    {
        // Ambil data pembeli dari model
        $data['tb_pembeli'] = $this->Tokobuku_model->get_all_pembeli()->result();

        // Ambil data pegawai dari model
        $data['tb_pegawai'] = $this->Tokobuku_model->get_all_pegawai()->result();

        // Ambil data buku dari model
        $data['tb_buku'] = $this->Tokobuku_model->get_all_buku()->result();

        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Tambah Data Penjualan',
        ]);
        $this->load->view('tambah_penjualan3', $data);
        $this->load->view('template/footer');
    }
    public function simpan_penjualan()
    {
        $namaPembeliId = $this->input->post('Nama_Pembeli', true);
        $namaPegawaiId = $this->input->post('Nama_Pegawai', true);
        $judulBukuId = $this->input->post('Nama_Buku', true);
        // $hargaBuku = $this->input->post('Harga_Buku', true);


        foreach ($judulBukuId as $judul) {
            // Ambil data sesuai ID dari masing-masing tabel
            $pembeli = $this->Tokobuku_model->get_nama_pembeli_by_id($namaPembeliId);
            $pegawai = $this->Tokobuku_model->get_nama_pegawai_by_id($namaPegawaiId);
            $dataBuku = $this->Tokobuku_model->get_data_buku_by_id($judul);

            // Pastikan data yang diperoleh tidak kosong sebelum dimasukkan ke dalam $data
            if ($pembeli && $pegawai && $dataBuku) {
                $data = array(
                    'pembeli' => $pembeli->nama_pembeli,
                    'pegawai' => $pegawai->nama_pegawai,
                    'judul' => $dataBuku->judul_buku,
                    'harga' => $dataBuku->harga_buku,
                );
            } else {
                // Handle jika data kosong atau tidak ditemukan
                echo 'Data tidak ditemukan';
                return; // Berhenti proses penyimpanan jika data tidak ditemukan
            }


            $insert = $this->Tokobuku_model->simpan_data_penjualan('tb_penjualan', $data);
            if ($insert > 0) {
            } else {
                echo 'Gagal Disimpan';
            }
        }
        redirect('beranda/data_penjualan');
    }

    public function del_penjualan($id_penjualan)
    {
        $this->Tokobuku_model->pjDelete($id_penjualan);
        redirect('Beranda/data_penjualan');
    }

    public function edit_penjualan($id_penjualan)
    {
        // Ambil data produk berdasarkan id
        $data['tb_penjualan'] = $this->Tokobuku_model->get_data_penjualan($id_penjualan);

        // Ambil data pembeli dari model
        $data['tb_pembeli'] = $this->Tokobuku_model->get_all_pembeli()->result();

        // Ambil data pegawai dari model
        $data['tb_pegawai'] = $this->Tokobuku_model->get_all_pegawai()->result();

        // Ambil data buku dari model
        $data['tb_buku'] = $this->Tokobuku_model->get_all_buku()->result();


        $this->load->view("template/head");
        $this->load->view("template/sidebar");
        $this->load->view('template/navbar', [
            'page' => 'Edit Data Penjualan',
        ]);
        $this->load->view("edit_penjualan", $data);
        $this->load->view("template/footer");
    }

    public function update_penjualan($id_penjualan)
    {
        $namaPembeli = $this->input->post('Nama_Pembeli', true);
        $namaPegawai = $this->input->post('Nama_Pegawai', true);
        $judulBuku = $this->input->post('Nama_Buku', true);
        $hargaBuku = $this->input->post('Harga_Buku', true);

        // Jika data yang diterima valid
        if ($namaPembeli && $namaPegawai && $judulBuku && $hargaBuku) {
            // Panggil model untuk update data
            $update = $this->Tokobuku_model->update_penjualan($id_penjualan, [
                'pembeli' => $namaPembeli,
                'pegawai' => $namaPegawai,
                'judul' => $judulBuku,
                'harga' => $hargaBuku,
            ]);

            if ($update) {
                // Redirect ke halaman data_penjualan jika berhasil
                redirect("beranda/data_penjualan");
            } else {
                echo 'Gagal mengupdate data penjualan';
            }
        } else {
            echo 'Data yang diterima tidak valid';
        }
    }

    public function penjualan_invoice($id_penjualan)
    {
        // Load data penjualan berdasarkan ID
        $data['tb_penjualan'] = $this->Tokobuku_model->get_data_penjualan($id_penjualan);
        $this->load->view('template/head');
        $this->load->view('template/sidebar');
        $this->load->view('template/navbar', [
            'page' => 'Detail Invoice',
        ]);
        $this->load->view('penjualan_invoice', $data);
        $this->load->view('template/footer');


        if (!$data['tb_penjualan']) {
            echo 'Data penjualan tidak ditemukan.';
            return;
        }
    }

    public function cetak_invoice($id_penjualan)
    {
        // Lakukan query atau pengambilan data sesuai kebutuhan
        $tb_penjualan = $this->db->query("SELECT * FROM tb_penjualan WHERE id_penjualan = '$id_penjualan'")->row();

        // Load view cetak_invoice.php dan kirimkan data tb_penjualan ke view tersebut
        $this->load->view('cetak_invoice', ['tb_penjualan' => $tb_penjualan]);
    }
}
