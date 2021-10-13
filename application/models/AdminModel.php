<?php

class AdminModel extends CI_Model{

    public function get_user()
    {
        $query = $this->db->get('user');
        return $query;
    }

    public function insert_user($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function edit_user($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_id($id)
    {
        $this->db->select('user.id_user, user.nama, user.email, user.alamat, user.telepon, user.foto_user, user.posisi');
        $this->db->from('user');
        $hasil = $this->db->where('id_user', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }

    // Model Untuk Hewan
    
    public function get_hewan()
    {
        $query = $this->db->get('hewan');
        return $query;
    }

    public function insert_hewan($table, $data)
    {
        $this->db->insert($data, $table);
    }

    public function edit_hewan($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_hewan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_id_hewan($id)
    {
        $this->db->select('hewan.id_hewan, hewan.nama_hewan, hewan.jenis_hewan, hewan.harga_hewan, hewan.detail_hewan, hewan.foto_hewan');
        $this->db->from('hewan');
        $hasil = $this->db->where('id_hewan', $id)->get();

        if($hasil->num_rows() > 0){
            return $hasil->result();
        }else{
            return false;
        }
    }
}