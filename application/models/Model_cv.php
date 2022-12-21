<?php
class Model_cv extends CI_Model
{
    public function getId($email)
    {
        return $this->db->where('email', $email)->get('tb_users')->result();
    }
    // model basic
    public function getBasicById($id)
    {
        return $this->db->query("select id_user from tb_cv where id_user = (select id from tb_users where id = {$id})")->row_array();
    }
    public function insert_cv($data)
    {
        $this->db->insert('tb_cv', $data);
    }
    public function getDataCv($id)
    {
        return $this->db->where('id_user', $id)->get('tb_cv')->result();
    }

    public function update_basic($id, $data)
    {
        return $this->db->where('id_user', $id)->update('tb_cv', $data);
    }
    // model work
    public function getWe($id)
    {
        return $this->db->where('id_user', $id)->get('tb_work')->result();
    }
    public function insert_we($data)
    {
        $this->db->insert('tb_work', $data);
    }
    public function update_we($id, $data)
    {
        $this->db->where('id_user', $id)->update('tb_work', $data);
    }
    public function getWeById($id)
    {
        return $this->db->query("select id_user from tb_work where id_user = (select id from tb_users where id = {$id})")->row_array();
    }
    //user
    public function getIdUserByEmail($email)
    {
        return $this->db->where('email', $email)->get('tb_users')->result();
    }
    // edu
    public function getEdu($id)
    {
        return $this->db->where('id_user', $id)->get('tb_edu')->result();
    }
    public function insert_edu($data)
    {
        $this->db->insert('tb_edu', $data);
    }
    public function update_edu($id, $data)
    {
        $this->db->where('id_user', $id)->update('tb_edu', $data);
    }
    public function getEduById($id)
    {
        return $this->db->query("select id_user from tb_edu where id_user = (select id from tb_users where id = {$id})")->row_array();
    }
}
