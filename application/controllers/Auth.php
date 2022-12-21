<?php
class Auth extends CI_Controller
{
    public function login()
    {
        $data = array(
            'title' => 'Login',
            'content' => 'Login'
        );
        $this->load->view('templates_login/wrapper.php', $data);
    }
    public function check_login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Login',
                'content' => 'Login'
            );
            $this->load->view('templates_login/wrapper.php', $data);
        } else {
            $auth = $this->Model_login->check_login();
            if ($auth == false) {
                $this->session->set_flashdata('failed_message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Incorrect Username or Password!</strong> Please check and try again.
              </div>');
                redirect('Auth/login');
            } else {
                $this->session->set_userdata('email', $auth->email);
                redirect('Home');
            }
        }
    }
    public function signup()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == false) {
            $data = array(
                'title' => 'Signup',
                'content' => 'Signup'
            );
            $this->load->view('templates_login/wrapper', $data);
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $this->db->insert('tb_users', $data);
            redirect('Auth/login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth/login');
    }
}
