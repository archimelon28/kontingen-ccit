<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function welcome_message()
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
      redirect('Utama/index', 'refresh');
    }
    else{
      $this->load->view('index');      
    }
  }
  public function index()
  {
    $data = array(
      'user' => $this->Model_utama->tampil_data()
      );
    $this-> load->view('index',$data);
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
}