<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ongkir extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mongkir');
    }
    public function index()
    {
        $data['ongkir'] = $this->Mongkir->get_all_data('tbl_ongkir')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/ongkir/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function add()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/ongkir/form_tambah');
        $this->load->view('admin/layout/footer');
    }
    public function save()
    {
        $kota_asal = $this->input->post('kotaAsal');
        $kota_tujuan = $this->input->post('kotaTujuan');
        $tarif = $this->input->post('tarif');
        $data_insert = array('kotaAsal' => $kota_asal,
                            'kotaTujuan' => $kota_tujuan,
                            'tarif' => $tarif );
        $this->Mongkir->insert('tbl_ongkir', $data_insert);
        redirect('ongkir');
    }
    public function edit($idOngkir)
    {
        $data['ongkir'] = $this->Mongkir->get_where('tbl_ongkir', array('idOngkir' => $idOngkir))->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/ongkir/form_edit', $data);
        $this->load->view('admin/layout/footer');
    }
    public function update()
    {
        $idOngkir = $this->input->post('idOngkir');
        $kota_asal = $this->input->post('kotaAsal');
        $kota_tujuan = $this->input->post('kotaTujuan');
        $tarif = $this->input->post('tarif');
        $data_update = array('kotaAsal' => $kota_asal,
                            'kotaTujuan' => $kota_tujuan,
                            'tarif' => $tarif );
        $this->Mongkir->update('tbl_ongkir', $data_update, array('idOngkir' => $idOngkir));
        redirect('ongkir');
    }
    function delete($idOngkir)
    {
        $this->Mongkir->delete('tbl_ongkir', array('idOngkir' => $idOngkir));
        redirect('ongkir');
    }
    function search()
    {
        $keyword = $this->input->post('keyword');
        $data['ongkir'] = $this->Mongkir->search($keyword)->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/ongkir/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    

}
?>