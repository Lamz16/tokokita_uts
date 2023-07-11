<?php
class Madmin extends CI_Model
{
    public function cek_login($u, $p)
    {
        $q = $this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
        return $q;
    }
   public function get_all_data($table)
   {
    $q = $this->db->get($table);
    return $q;
   }
   public function get_data_toko($table, $id)
   {
    return $this->db->get_where($table, ['idKonsumen' =>$id]);
   }
   public function insert($table, $data)
   {
    $this->db->insert($table, $data);
   }
   public function get_by_id($table, $id)
   {
    return $this->db->get_where($table, $id);
   }
   public function update($table, $data, $pk, $id)
   {
    $this->db->where($pk, $id);
    $this->db->update($table, $data);
   }
   public function delete($table, $id, $val)
   {
    $this->db->delete($table, array($id => $val));
   }
   public function get_produk(){
    $this->db->select('*');
    $this->db->from('tbl_produk');
    $this->db->join('tbl_toko','tbl_toko.idToko = tbl_produk.idToko');
    $this->db->join('tbl_member','tbl_member.idKonsumen = tbl_toko.idKonsumen');
    $q = $this->db->get();
    return $q;
   }	
   public function get_kota_penjual($idToko){
    $this->db->select('*');
    $this->db->from('tbl_toko');
    $this->db->join('tbl_member', 'tbl_member.idKonsumen = tbl_toko.idKonsumen');
    $this->db->where('tbl_toko.idToko', $idToko);
    $q = $this->db->get();
    return $q;
}
}

?>