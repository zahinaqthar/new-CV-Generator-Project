<?php
class Term extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') == null) {
            $this->session->set_flashdata('failed_message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>you are not logged in! </strong>Please login first
              </div>');
            redirect('Auth/login');
        }
    }

    public function index()
    {
        $data = array(
            'title' => 'Termpage',
            'content' => 'Term',

        );
        $this->load->view('templates/wrapper', $data);
    }
}
