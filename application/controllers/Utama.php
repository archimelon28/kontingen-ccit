<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
  {
    $this->template->load('template','welcome_message');
  }
  public function login()
  {
    $data['konfirmasi'] = array('konfirmasi' => 1);
    $this->template->load('template','login',$data);
  }
  public function register()
  {
    $this->template->load('template','register');
  }
  public function indexx()
  {
    
    if(!$this->session->userdata('isLoginAdmin')){
      redirect('Utama', 'refresh');
    }
    else{
      $data = array(
      'user' => $this->Model_utama->tampil_data()
      );
      $this->load->view('tampil2',$data);      
    }
  }

  public function addAdmin(){
     $nama = $this->input->post("nama");
     $alamat = $this->input->post("alamat");
     $jenis_kelamin = $this->input->post("jenis_kelamin");
     $username = $this->input->post("username");
     $password = md5($this->input->post("password"));

     $q = $this->Model_utama->addAdmin($nama,$alamat,$jenis_kelamin,$username,$password);
     redirect('Utama/login');
 }
  public function masuk()
  {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
 
        $cek = $this->Model_utama->cek($username,$password);
        if($cek->num_rows() == 1)
        {
            foreach ($cek->result() as $data) 
            {
                if($data->username==$username AND $data->password==$password)
                {
                    $newdataadmin = array
                    (
                       'nama'  => $data->nama,
                       'id'         => $data->id_admin,
                       'isLoginAdmin' => TRUE
                    );
                    $this->session->set_userdata($newdataadmin);
                    redirect('Utama/indexx', 'refresh');
                }
            }
            
        }
        else
        {
            $data['konfirmasi'] = array('konfirmasi' => 2);
            $this->load->view('login',$data);
        }
      
 }
    public function logout() 
    {
      if(!$this->session->userdata('isLoginAdmin')){
        redirect('Utama/index', 'refresh');
    }
    else
    {
      session_destroy();
      redirect('Utama/index');
    }
}

  public function tambahdata()
  {
    $this->template->load('template','register');
  }

   public function ubahdata($id){
    $where = array('id_admin' => $id);
    $data['admin'] = $this->Model_utama->edit_data($where,'tb_admin');
    $this->template->load('template','edit',$data);
  }
  
  public function ubah_aksi(){
    $id = $this->input->post('id_admin');
    $nama = $this->input->post('nama');
    $alamat = $this->input->post('alamat');
    $jenis_kelamin = $this->input->post('jk');
   
    $data = array(
      'nama' => $nama,
      'alamat' => $alamat,
      'jenis_kelamin' => $jenis_kelamin
    );
   
    $where = array(
      'id_admin' => $id
    );
 
    $this->Model_utama->update_data($where,$data,'tb_admin');
    redirect('Utama/indexx');
  }
  public function hapusdata($id){
    $where = array('id_admin' => $id);
    $this->Model_utama->hapus_data($where, 'tb_admin');
    redirect('Utama/indexx');
  }
}
