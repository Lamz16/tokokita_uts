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
    public function save()
    {
            $idToko = $this->input->post('idToko');
            $idKategori = $this->input->post('kategori');
            $namaProduk = $this->input->post('namaProduk');
            $hargaProduk = $this->input->post('hargaProduk');
            $jumlahProduk = $this->input->post('jumlahProduk');
            $beratProduk = $this->input->post('beratProduk');
            $deskripsi = $this->input->post('deskripsi');
            $config['upload_path'] = './assets/foto_produk/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $data_file = $this->upload->data();
                $data_insert = array('idKat' => $idKategori,
                                    'namaProduk' => $namaProduk,
                                    'idToko' => $idToko,
                                    'harga' => $hargaProduk,
                                    'stok' => $jumlahProduk,
                                    'berat' => $beratProduk,
                                    'foto' => $data_file['file_name'],
                                    'deskripsiProduk' => $deskripsi);
                $this->Madmin->insert('tbl_produk', $data_insert);
                redirect('produk/index/'.$idToko);
            }else{
                redirect('produk/add/'.$idToko);
            }
    }
    public function delete($idProduk)
{   
    $sql = "SELECT t.idToko FROM tbl_toko t JOIN tbl_produk p WHERE p.idProduk = ?";
    $data = $this->db->query($sql, [$idProduk])->row();

    if (empty($data)) {
        return redirect('toko');
    }
    // var_dump($data); die();
    $this->Madmin->delete('tbl_produk', 'idProduk', $idProduk);

    return redirect('produk/index/' . $data->idToko);



    
    // $data['idProduk']=$idProduk;
    // $dataWhere = array('idProduk'=>$idProduk);
    // $data['idToko'] = $this->Madmin->get_by_id('tbl_produk', $dataWhere)->result();
    //     $this->Madmin->delete('tbl_produk', 'idProduk', $idProduk);
    //     redirect('produk/index/'.$dataWhere['idToko']);
    
    
}
}