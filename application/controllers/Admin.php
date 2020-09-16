<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
 {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Admin_model');
			$this->load->helper(array('html' ,'url' ,'form'));
			$this->load->library('session');

    }
			
    public function index()
    {
        $this->load->view('admin/login');
    }
	public function dashboard()
	{
		  $this->load->view('admin/dashboard');
	}

	    
public function login()
	{
		
		$username = $this->input->post('username');
		
		$password = $this->input->post('password');
	
		$result = $this->Admin_model->loginCheck($username,$password);
		if($result == true)
		{  
            //declaring session  
			$this->session->set_userdata(array('username'=>$username)); 
			$this->load->view('admin/dashboard');
        }  
		else
		{  
			$this->session->set_flashdata('Login_failed','Invalid Username/Password');
			$this->load->view('admin/adminheader');
            $this->load->view('admin/login');
        }  

	}

	public function logout()  
    {  
        //removing session  
		$this->session->unset_userdata('username');  
		$this->session->sess_destroy();
        $this->load->view('admin/login','refresh');
    }  

	public function customerProfile()
	{
		$results = $this->Admin_model->displayrecords();
		$this->load->view('admin/customer',$results);
	}


	public function details()
	{
		$guestId = $this->input->get('id');
		if($guestId >0) 
		{
			$guestData = $this->Admin_model->getUserData($guestId);
			$frndData  = $this->Admin_model->getFriendData($guestId);

			if (!empty($guestData)) 
			{			
			$this->load->view('admin/customerDetails',['guestData'=>$guestData,'frndData'=>$frndData]);
			}
		}		
        
	}	
}  
	
?>
