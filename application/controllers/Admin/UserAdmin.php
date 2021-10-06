<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->helper('url');         

    }

	public function index()
	{
        $data['user'] = $this->AdminModel->get_user ()->result();
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/User',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function tambah_user()
    {
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/userTambah');
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_user()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password= $this->input->post('password');
        $alamat= $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $posisi = $this->input->post('posisi');

        $data = array(
            'nama' => $nama,
            'email' => $email,  
            'password' => md5($password),
            'alamat' => $alamat,
            'telepon' => $telepon,
            'posisi' => $posisi,
        );

        $this->AdminModel->insert_user($data, 'user');
        redirect('Admin/UserAdmin');
    }

    public function edit_user($id)
    {
        $data['user'] = $this->AdminModel->get_id($id);
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/UserEdit', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_edit()
    {
        $id_user = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password= $this->input->post('password');
        $alamat= $this->input->post('alamat');
        $telepon = $this->input->post('telepon');
        $posisi = $this->input->post('posisi');

        $data = array();

        if ($password != "") {
            $data = array(
                'password' => MD5($password)
            );
        }

        $data += array(
            'nama' => $nama,
            'email' => $email,  
            'alamat' => $alamat,
            'telepon' => $telepon,
            'posisi' => $posisi,
        );

        $where = array(
            'id_user' => $id_user
        );

        $this->AdminModel->edit_user('user', $data, $where);
        redirect('Admin/UserAdmin');
    }

    public function detail_user($id)
    {
        $data['user'] = $this->AdminModel->get_id($id);
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/UserDetail', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function hapus($id_user)
    {
        $where = array('id_user' => $id_user);
        $this->AdminModel->delete_user($where, 'user');
        redirect('Admin/UserAdmin');
    }
}
