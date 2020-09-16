<?php
class Friend_model extends CI_Model {

        public function __construct()
        {
        parent::__construct();
         $this->load->model('User_model');
        }
        public function index()
        {

        } 

   

    public function getData($guestId)
    {

        $this->db->where('frnd_user_id',$guestId);
        $query= $this->db->get('friend');
        return $query->result();
    }

        public function saveFriend($guestId)
        {
                if($guestId)
                {
                $updateData= array('usr_firstName' => $this->input->post('registration[primaryGuest][firstName]'));
                $this->db->where('user_id',$guestId);
                $status = $this->db->update('user',$updateData);
                foreach ($this->input->post('registration[guests]') as $key => $value)
                 {
                    if($value['firstName'] != '')
                    {
                    $data['frnd_user_id'] = $guestId ;
                    $data['frnd_fname']   = $value['firstName'];
                    $data['frnd_lname']   = $value['lastName'];
                    $data['frnd_email']   = $value['email'];
                    $status =  $this->db->insert('friend', $data);    
                    $guestFrndId = $this->db->insert_id();            
                    }
                 }
                }
        return $guestId;           
        }
}
?>