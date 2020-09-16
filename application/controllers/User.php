 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Friend_model');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
	}
	
	/*
	   Add guest and his  friend guest 
	*/
	public function register()
	{	
		$guestId = $this->User_model->create();
		
	        if($guestId > 0) 
	        {
				$guestData = $this->User_model->getData($guestId);
				$frndData = $this->Friend_model->getData($guestId);

				if (!empty($guestData)) 
				{
				$this->load->view('header');
				$this->load->view('welcome_message',['guestData'=>$guestData,'frndData'=>$frndData]);
	            }
	        }
	 }	

	public function saveFriend()
	{
		$guestId         = $this->input->post('guestId');		
		$frindId 		 = $this->Friend_model->saveFriend($guestId);
		$guestData 		 = $this->User_model->getData($guestId);
	    $frndData        = $this->Friend_model->getData($guestId);
	    foreach ($frndData as  $val)
	    { 
	     	$email = $val->frnd_email ;
	     	  $data['frnd_fname']   = $val->frnd_fname;
              $data['frnd_lname']   = $val->frnd_lname;
              $this->User_model->sendEmail($email, $data, 2);
	    }
	    
		if (!empty($guestData)) 
			{			
			$this->load->view('header');
			$this->load->view('welcome_message',['guestData'=>$guestData,'frndData'=>$frndData]);
	        }
	}
	
}
?>
