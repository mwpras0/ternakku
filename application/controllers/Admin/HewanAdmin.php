<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HewanAdmin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AdminModel');
        $this->load->helper('url');         

    }

	public function index()
	{
        $data['hewan'] = $this->AdminModel->get_hewan ()->result();
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/Hewan',$data);
        $this->load->view('Admin/Template/Footer');
    }

    public function tambah_hewan()
    {
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/HewanTambah');
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_hewan()
    {
        $nama_hewan = $this->input->post('nama_hewan');
        $harga_hewan = $this->input->post('harga_hewan');
        $jenis_hewan = $this->input->post('jenis_hewan');
        $detail_hewan = $this->input->post('detail_hewan');
        $foto_hewan = $_FILES['foto_hewan']['name'];

        if ($foto_hewan = '') {} else {
            $config['upload_path'] = './upload/hewan';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_hewan')) {
                echo "foto Diri Gagal Di-Upload\n";
            } else {
                $foto_hewan = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_hewan' => $nama_hewan,
            'harga_hewan' => $harga_hewan,  
            'jenis_hewan' => $jenis_hewan,
            'detail_hewan' => $detail_hewan,
            'foto_hewan' => $foto_hewan,
        );
        // var_dump($data);

        $this->AdminModel->insert_hewan($data, 'hewan');
        redirect('Admin/HewanAdmin');
    }

    public function edit_hewan($id)
    {
        $data['hewan'] = $this->AdminModel->get_id_hewan($id);
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/HewanEdit', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function simpan_edit()
    {
        $id_hewan = $this->input->post('id_hewan');
        $nama_hewan = $this->input->post('nama_hewan');
        $harga_hewan = $this->input->post('harga_hewan');
        $jenis_hewan = $this->input->post('jenis_hewan');
        $detail_hewan = $this->input->post('detail_hewan');
        $foto_hewan = $_FILES['foto_hewan']['name'];

        if ($foto_hewan) {
            $config['upload_path'] = './upload/hewan';
            $config['allowed_types'] = 'jpg|jpeg|png';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto_hewan')) {
                $foto_hewan = $this->upload->data('file_name');
                $this->db->set('foto_hewan', $foto_hewan);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array();

        if ($foto_hewan != "") {
            $data += array(
                'foto_hewan' => $foto_hewan
            );
        }

        $data += array(
            'nama_hewan' => $nama_hewan,
            'harga_hewan' => $harga_hewan,  
            'jenis_hewan' => $jenis_hewan,
            'detail_hewan' => $detail_hewan,
        );

        $where = array(
            'id_hewan' => $id_hewan
        );

        //  var_dump($data, $where);
        $this->AdminModel->edit_hewan('hewan', $data, $where);
        redirect('Admin/HewanAdmin');
    }

    public function detail_hewan($id)
    {
        $data['hewan'] = $this->AdminModel->get_id_hewan($id);
        $this->load->view('Admin/Template/Header');
        $this->load->view('Admin/HewanDetail', $data);
        $this->load->view('Admin/Template/Footer');
    }

    public function hapus($id_hewan)
    {
        $where = array('id_hewan' => $id_hewan);
        $this->AdminModel->delete_hewan($where, 'hewan');
        redirect('Admin/hewanAdmin');
    }
}
