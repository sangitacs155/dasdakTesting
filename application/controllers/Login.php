
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Friend_model');
	}


public function index()
 {
   $uname=$this->input->post('uname');
   $pass=$this->input->post('pass');
   $this->load->model('loginmodel');
   $login_id=$this->loginmodel->isvalidate($uname,$pass);
   if($login_id)
   {
       $this->session->set_userdata('id',$login_id);
       return redirect('admin/welcome');
  }
   else
   {
      $this->session->set_flashdata('Login_failed','Invalid Username/Password');
      return redirect('login');
   }

 }
 }
 ?>