<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
        $this->load->model('KeranjangModel');

		if ($this->session->userdata('posisi') !="pembeli") {
			redirect('Login');
		}else {
            $this->load->model('UserModel');
            $this->load->helper('url');  
        }

	}

    public function index()
    {
        $data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->UserModel->get_kategori();

        $id_user = $this->session->userdata('id_user');
        $data['hewan'] = $this->KeranjangModel->get_cart($id_user)->result();

        $this->load->view('User/Template/Header',$data);
        $this->load->view('User/Keranjang');
        $this->load->view('User/Template/Footer');
    }

    public function add_to_cart($id_hewan){
        $id_user = $this->session->userdata('id_user');
        
        $data = array(
            'id_user' => $id_user,
            'id_hewan' => $id_hewan,
            'qty' => 1
        );

        $this->KeranjangModel->add_cart($data, 'keranjang');
        redirect('user/keranjang');
    }

    public function delete_cart($id_keranjang){
        $where = array('id_keranjang' => $id_keranjang);
        $this->KeranjangModel->delete_cart($where, 'keranjang');
        redirect('user/keranjang');
    }
}