<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');         
        $this->load->library('session');
        if ($this->session->userdata('posisi') != "pembeli") {
            redirect('Login');
        }else{
            $this->load->model('UserModel');
            $this->load->helper('url');         
        }

    }

	public function index()
	{
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $kategori['kategori'] = $this->UserModel->get_kategori();
        $data['hewan'] = $this->UserModel->get_data('hewan')->result();

        $this->load->view('User/Template/Header',$kategori,$sess);
        $this->load->view('User/Index',$data);
        $this->load->view('User/Template/Footer');
    }

    public function produk($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $kategori['kategori'] = $this->UserModel->get_kategori();
        $data['kategori'] = $this->UserModel->id_kategori($id);
        $data['select'] = $this->UserModel->get_kategori();

        // var_dump($data);
        $this->load->view('User/Template/Header',$kategori,$sess);
        $this->load->view('User/Shop',$data);
        $this->load->view('User/Template/Footer');
    }

    public function tentang()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $kategori['kategori'] = $this->UserModel->get_kategori();
        
        $this->load->view('User/Template/Header',$kategori,$sess);
        $this->load->view('User/Tentang');
        $this->load->view('User/Template/Footer');
    }

    public function kontak()
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $kategori['kategori'] = $this->UserModel->get_kategori();

        $this->load->view('User/Template/Header',$kategori,$sess);
        $this->load->view('User/Kontak_Kami');
        $this->load->view('User/Template/Footer');
    }

    public function shop_detail($id)
    {
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        $kategori['kategori'] = $this->UserModel->get_kategori();
        $data['hewan'] = $this->UserModel->id_hewan($id);

        // var_dump($data);
        $this->load->view('User/Template/Header',$kategori,$sess);
        $this->load->view('User/ShopDetail',$data);
        $this->load->view('User/Template/Footer');
    }
}