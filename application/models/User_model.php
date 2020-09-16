<?php
class User_model extends CI_Model {
	public function __construct() {
		parent::__construct();
	}
	public function index()
	{

	}

	public function getData($guestId)
	{
		$this->db->where('user_id', $guestId);
		$query = $this->db->get('user');
		return $query->result();
	}

	public function create() 
	{
		$insert_data =
		 array(
			'usr_firstName'  => $this->input->post('usr_fname'),
			'usr_lastName'   => $this->input->post('usr_lname'),
			'usr_email'      => $this->input->post('usr_email'),
			'usr_zipCode'    => $this->input->post('usr_zip_code'),
			'usr_noOfGuest'  => $this->input->post('usr_no_guest'),
			'usr_sub_seasonTicketWaitlist'  => $this->input->post('seasonTicketWaitlist')|0,
			'usr_sub_womensClub'            => $this->input->post('womensClub')|0,
			'usr_sub_offers'                => $this->input->post('offers')|0,
			'usr_sub_saluteMilitaryAppreciationClub' => $this->input->post('saluteMilitaryAppreciationClub')|0,
			'usr_status' => '1',
		     );
        /**
		 * Insert customer information 
		 */
		$status = $this->db->insert('user', $insert_data);

		if ($status == true) 
		{
			$guestId = $this->db->insert_id();
			/**
			 * customer add all his/her guest information 
			 */
			if (!empty($this->input->post('registration[guests]'))) 
			{
				foreach ($this->input->post('registration[guests]') as $key => $value) 
				{
					if (($value['firstName'] != '')|| ($value['lastName'] != '') || ($value['email'] ))
					{
						$data['frnd_user_id']  = $guestId;
						$data['frnd_fname']    = $value['firstName'];
						$data['frnd_lname']    = $value['lastName'];
						$data['frnd_email']    = $value['email'];

						$this->db->insert('friend', $data);
						/**
						 * The email each guest receives when the
                         * customer entered friend guest information in the Add Friends form. 
						 */
						$result = $this->sendEmail($data['frnd_email'], $data, 2);
					}
				}
			}

			$toEmail = $this->input->post('usr_email');
			/**
			 * The email customer receives according to no of Guests
			 */
			$result = $this->sendEmail($toEmail, $insert_data, 1);
			return $guestId;
		}
	}


	public function sendEmail($email, $data, $tempType)
	 {

		$this->load->config('email');
		$this->load->library('email');
		$this->email->set_mailtype("html");
		$this->email->from('sang.kri.cs155@gmail.com', 'Sangita');
		$this->email->to($email);
		$this->email->subject("Redskins Training Camp Pass");
		if ($tempType == 1) 
		{
			$body = $this->load->view('emails/user_email', $data, true);
		}
		else
		{
			$body = $this->load->view('emails/user_guest', $data, true);
		}

		$this->email->message($body);
		$this->email->set_newline("\r\n");

		if ($this->email->send()) 
		{
		//	echo '<script>alert("Email has been sent successfully")</script>';  
		} 
		else 
		{
			show_error($this->email->print_debugger());
			
		}
	}
	public function get_count() 
	{
        return $this->db->count_all("user");
    }


	public function get_user($limit, $start) 
	{
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('user');
		$query = $this->db->get();
	   
		$data['count'] = $query->num_rows();
		if($data>0)
		{
			$data['results'] = $query->result();
			return $data;

		}else
		{
			return false;
		}
    }
}
