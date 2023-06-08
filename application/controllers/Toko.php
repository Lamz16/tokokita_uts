<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['toko'] = $this->Madmin->get_data_toko('tbl_toko',$this->session->member_id)->result();
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/index', $data);
        $this->load->view('home/layout/footer');
        
    }
    public function add()
    {
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/form_tambah');
        $this->load->view('home/layout/footer');
    }
    public function save()
    {
        //tambahkan form validasi disini codeigniter 3
        $this->form_validation->set_rules('namaToko', 'Nama Toko', 'required',array('required'=>'%s tidak boleh kosong'));
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required',array('required'=>'%s kan tokomu jangan sampai kosong'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('home/layout/header');
            $this->load->view('home/toko/form_tambah');
            $this->load->view('home/layout/footer');
        }else{
            $id = $this->session->member_id;
            $nama_toko = $this->input->post('namaToko');
            $deskripsi = $this->input->post('deskripsi');
            $config['upload_path'] = './assets/logo_toko/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('logo')) {
                $data_file = $this->upload->data();
                $data_insert = array('idKonsumen' => $id,
                                    'namaToko' => $nama_toko,
                                    'logo' => $data_file['file_name'],
                                    'deskripsi' => $deskripsi,
                                    'statusAktif' => 'Y' );
                $this->Madmin->insert('tbl_toko', $data_insert);
                redirect('toko');
            }
       }
    }
    public function edit($idToko)
    {
        $data['toko'] = $this->Madmin->get_by_id('tbl_toko', array('idToko' => $idToko))->row();
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/form_edit', $data);
        $this->load->view('home/layout/footer');
    }

    public function update()
{
    //tambahkan form validasi disini codeigniter 3
    $this->form_validation->set_rules('namaToko', 'Nama Toko', 'required',array('required'=>'%s tidak boleh kosong'));
    $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required',array('required'=>'Berikan %s toko mu'));
    if ($this->form_validation->run() == FALSE) {
        $idToko= $this->input->post('idToko');
        $data['toko'] = $this->Madmin->get_by_id('tbl_toko', array('idToko' => $idToko))->row();
        $this->load->view('home/layout/header');
        $this->load->view('home/toko/form_edit', $data);
        $this->load->view('home/layout/footer');
        
    }else {
          $idToko = $this->input->post('idToko');
    $nama_toko = $this->input->post('namaToko');
    $deskripsi = $this->input->post('deskripsi');

    $config['upload_path'] = './assets/logo_toko/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('logo')) {
        $data_file = $this->upload->data();
        $data_update = array(
            'namaToko' => $nama_toko,
            'logo' => $data_file['file_name'],
            'deskripsi' => $deskripsi,
            'statusAktif' => 'Y'
        );
        $this->Madmin->update('tbl_toko', $data_update, 'idToko', $idToko);
        redirect('toko');
    }
    //end form validasi

  
    } 

   
}

public function delete($idToko)
{
    $this->Madmin->delete('tbl_toko', 'idToko', $idToko);
    redirect('toko');
}


}


?>