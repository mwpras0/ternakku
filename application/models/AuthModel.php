<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AuthModel extends CI_Model {

	public function cek_user($data) {
		$query=$this->db->get_where('user', $data);
		return $query;
	}

	public function insert_user($table, $data)
    {
        $this->db->insert($data, $table);
    }
}
?>