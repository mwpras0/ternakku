<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel');

    }

	public function index()
	{
        $kategori['hewan'] = $this->UserModel->get_hewan ()->result();
        $data['hewan'] = $this->UserModel->get_hewan ()->result();
        $this->load->view('User/Template/Header',$kategori);
        $this->load->view('User/Index',$data);
        $this->load->view('User/Template/Footer');
    }

    public function tentang()
    {
        $this->load->view('User/Template/Header');
        $this->load->view('User/Tentang');
        $this->load->view('User/Template/Footer');
    }

    public function kontak()
    {
        $this->load->view('User/Template/Header');
        $this->load->view('User/Kontak_Kami');
        $this->load->view('User/Template/Footer');
    }

    public function detail_hewan($id)
    {
        $data['hewan'] = $this->UserModel->id_hewan ($id);
        $this->load->view('User/Template/Header');
        $this->load->view('User/DetailHewan',$data);
        $this->load->view('User/Template/Footer');
    }
}
