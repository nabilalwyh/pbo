<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Tokobuku_model extends CI_Model
{
    public function get_all_pegawai()
    {
        return $this->db->get('tb_pegawai');
    }
    public function simpan_data_pegawai($table, $data) 
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function get_all_pembeli()
    {
        return $this->db->get('tb_pembeli');
    }
    public function simpan_data_pembeli($table, $data) 
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function get_all_buku()
    {
        return $this->db->get('tb_buku');
    }
    public function simpan_data_buku($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    public function pgDelete($id_pegawai)
    {
        $this->db->where('id_pegawai',$id_pegawai);
        $this->db->delete('tb_pegawai');
    }
    public function pbDelete($id_pembeli)
    {
        $this->db->where('id_pembeli',$id_pembeli);
        $this->db->delete('tb_pembeli');
    }
    public function bkDelete($id_buku)
    {
        $this->db->where('id_buku',$id_buku);
        $this->db->delete('tb_buku');
    }
    public function get_data_pegawai($id_pegawai)
    {
        return $this->db->get_where('tb_pegawai', array('id_pegawai' => $id_pegawai))->row();
    }
    public function update_pegawai($id_pegawai, $data)
    {
        $this->db->where('id_pegawai', $id_pegawai);
        return $this->db->update('tb_pegawai', $data);
    }
    
    public function get_data_pembeli($id_pembeli)
    {
        return $this->db->get_where('tb_pembeli', array('id_pembeli' => $id_pembeli))->row();
    }
    public function update_pembeli($id_pembeli, $data)
    {
        $this->db->where('id_pembeli', $id_pembeli);
        return $this->db->update('tb_pembeli', $data);
    }
    public function get_data_buku($id_buku)
    {
        return $this->db->get_where('tb_buku', array('id_buku' => $id_buku))->row();
    }
    public function update_buku($id_buku, $data)
    {
        $this->db->where('id_buku', $id_buku);
        return $this->db->update('tb_buku', $data);
    }

    
    public function get_all_penjualan()
    {
        return $this->db->get('tb_penjualan');
    }
    public function simpan_data_penjualan($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }
    public function get_nama_pembeli_by_id($id_pembeli)
    {
        $this->db->select('nama_pembeli');
        $this->db->where('id_pembeli', $id_pembeli);
        $query = $this->db->get('tb_pembeli');
        return $query->row(); 
    }

    public function get_nama_pegawai_by_id($id_pegawai)
    {
        $this->db->select('nama_pegawai');
        $this->db->where('id_pegawai', $id_pegawai);
        $query = $this->db->get('tb_pegawai');
        return $query->row(); 
    }

    public function get_judul_buku_by_id($id_buku)
    {
        $this->db->select('judul_buku');
        $this->db->where('id_buku', $id_buku);
        $query = $this->db->get('tb_buku');
        return $query->row();
    }
    public function pjDelete($id_penjualan)
    {
        $this->db->where('id_penjualan',$id_penjualan);
        $this->db->delete('tb_penjualan');
    }
    public function get_data_penjualan($id_penjualan)
    {
        return $this->db->get_where('tb_penjualan', array('id_penjualan' => $id_penjualan))->row();
    }
    
    public function update_penjualan($id_penjualan, $data)
    {
        $this->db->where('id_penjualan', $id_penjualan);
        return $this->db->update('tb_penjualan', $data);
    }

}
?>