<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	//tambahkan fungsi construct
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->library('form_validation');
    }
	public function index($idToko)
	{   $data['idToko']=$idToko;
        $dataWhere = array('idToko'=>$idToko);
        $data['produk'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->result();
		$this->load->view('home/layout/header');
		$this->load->view('home/produk/index', $data);
		$this->load->view('home/layout/footer');
	}
    public function add($idToko)
    {   $data['idToko']=$idToko;
        $data['kategori']=$this->Madmin->get_all_data('tbl_kategori')->result();
        $this->load->view('home/layout/header');
        $this->load->view('home/produk/form_tambah', $data);
        $this->load->view('home/layout/footer');
    }
}