<?php
class Madmin extends CI_Model
{
    public function cek_login($u, $p)
    {
        $q = $this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
        return $q;
    }
    public function cek_loginMember($u, $p)
    {
        $q = $this->db->get_where('tbl_member', array('username'=>$u, 'password'=>$p));
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
}

?>