<?php

class UserModel extends CI_Model{

    public function get_hewan()
    {
        $query = $this->db->get('hewan');
        return $query;
    }

    public function id_hewan($id)
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

    
}?>