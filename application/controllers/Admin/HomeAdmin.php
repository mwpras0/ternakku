<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');         
        $this->load->library('session');
        if ($this->session->userdata('posisi') != "admin") {
            redirect('Login');
        }
    }

	public function index()
	{
        $sess['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('Admin/Template/Header',$sess);
        $this->load->view('Admin/Home');
        $this->load->view('Admin/Template/Footer');
    }

    public function logout() {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('posisi');
        session_destroy();
        redirect('Login');
    }
}