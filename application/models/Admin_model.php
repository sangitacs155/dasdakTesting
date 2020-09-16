<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
        parent::__construct();
        $this->load->library('session');
       
        }
        public function index()
        {

        } 

        public function valid_allowed()//check user is login or not
    {
        $session = $this->session->userdata('username'); //here you can take loginid, email whatever you store in session
        if(!$session)
        {
            redirect('login');
        }
    }
        public function loginCheck($username,$password)
        {
             
            $que=$this->db->query("select * from admin where username='".$username."' and password='$password'");
            $row = $que->num_rows();
            return $row;
			if($row)
			{
                 return true;
                 
			}
			else
			{
		         return false;
		}
				
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
    }
    

    public function displayrecords()
    {
        $this->db->select('*');
                $this->db->from('user');
                $query = $this->db->get();
               
                $data['count'] = $query->num_rows();
                if($data>0){
                    $data['results'] = $query->result();
                    return $data;

                }else{
                    return false;
                }
    }


    public function getUserData($guestId)
    {

        $this->db->where('user_id',$guestId);
        $query= $this->db->get('user');
        return $query->result();
    }

    public function getFriendData($guestId)
    {
         $this->db->where('frnd_user_id',$guestId);
        $query= $this->db->get('friend');
        return $query->result();
    }
}
?>



        

        



        

        

