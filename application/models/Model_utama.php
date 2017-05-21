adaad<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_utama extends CI_Model {

    public function addAdmin($nama,$alamat,$jenis_kelamin,$username,$password)
  {
    $q = "insert into tb_admin (nama,alamat,jenis_kelamin,username,password) values('$nama','$alamat','$jenis_kelamin','$username','$password')";
    return $this->db->query($q);
  }
  public function cek($username, $password)
   {
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    return $this->db->get('tb_admin');
   }

		public function tampil_data(){
    return $this->db->get('tb_admin');
  }
  function input_data($data,$table){
    $this->db->insert($table,$data);
  }
  function edit_data($where,$table){    
    return $this->db->get_where($table,$where);
  }
  
  function update_data($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

	}
?>
