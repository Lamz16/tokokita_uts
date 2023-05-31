<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Member extends CI_Controller
{
     function __construct() {
        parent::__construct();
        $this->load->model('Madmin');
    }
    public function index()
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $data['member'] = $this->Madmin->get_all_data('tbl_member')->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/menu');
        $this->load->view('admin/member/tampil', $data);
        $this->load->view('admin/layout/footer');
    }
    public function ubah_status($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $dataWhere = array('idKonsumen' => $id );
        $result = $this->Madmin->get_by_id('tbl_member', $dataWhere)->row_object();
        $status = $result->statusAktif;
        if ($status=="Y") {
           $dataUpdate = array('statusAktif' => "N"); 
        }
        else {
           $dataUpdate = array('statusAktif' => "Y");
        }
        $this->Madmin->update('tbl_member', $dataUpdate, 'idKonsumen', $id);
        redirect('member');
    }
    public function delete($id)
    {
        if (empty($this->session->userdata('userName'))) {
            redirect('adminpanel');
        }
        $this->Madmin->delete('tbl_member', 'idKonsumen', $id);
        redirect('member');
    }
}





?>