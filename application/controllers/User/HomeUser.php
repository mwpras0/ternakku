<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeUser extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

	public function index()
	{
        $this->load->view('User/Template/Header');
        $this->load->view('User/Index');
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
}
