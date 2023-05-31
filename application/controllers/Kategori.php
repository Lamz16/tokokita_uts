<?php
defined('BASEPATH') OR exit('No direct script allowed');
class kategori extends CI_Controller
{
     function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');

    }

    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $data['kategori'] = $this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formAdd');
        $this->load->view('admin/layout/footer');
        
    }
    public function save()
    {
        $this->form_validation->set_rules('namaKat', 'Nama Kategori', 'required',array('required'=>'%s tidak boleh kosong'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/menu');
            $this->load->view('admin/kategori/formAdd');
            $this->load->view('admin/layout/footer');
        }
        else {
            $namaKat = $this->input->post('namaKat');
            $dataInput = array('namaKat' => $namaKat);
            $this->Madmin->insert('tbl_kategori', $dataInput);
            redirect('kategori');
        }
    }

    
    public function get_by_id($id)
    {

        $dataWhere = array('idkat' => $id);
        $data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', $dataWhere)->row_object();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/kategori/formEdit', $data);
        $this->load->view('admin/layout/footer');

    }
    public function edit()
    {
        $this->form_validation->set_rules('namaKat', 'Nama Kategori', 'required',array('required'=>'%s tidak boleh kosong'));
        if ($this->form_validation->run() == FALSE) {
            $id = $this->input->post('id');
            $data['kategori'] = $this->Madmin->get_by_id('tbl_kategori', array('idkat' => $id))->row_object();
            $this->load->view('admin/layout/header');
            $this->load->view('admin/layout/menu');
            $this->load->view('admin/kategori/formEdit', $data);
            $this->load->view('admin/layout/footer');
        } else {
            $id = $this->input->post('id');
            $namaKat = $this->input->post('namaKat');
            $dataUpdate = array('namaKat' => $namaKat);
            $this->Madmin->update('tbl_kategori', $dataUpdate, 'idkat', $id);
            redirect('kategori');
        }
    }


    public function delete($id)
    {
        $this->Madmin->delete('tbl_kategori', 'idkat', $id);
        redirect('kategori');
    }
}

?>