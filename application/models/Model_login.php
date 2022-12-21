<?php 
class Model_login extends CI_Model{

    public function check_login(){
        $email=set_value('email');
        $password=set_value('password');
        $result=$this->db->where('email', $email)
        ->where('password', $password)
        ->limit(1)->get('tb_users');
        if($result->num_rows()>0){
            return $result->row();
        }
        return array();
    }
}
