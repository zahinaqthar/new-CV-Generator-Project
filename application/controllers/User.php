<?php
class User extends CI_Controller
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
    public function view_cv($id)
    {
        $data = array(
            'title' => 'CV Result',
            'basic' => $this->Model_cv->getDataCv($id),
            'works' => $this->Model_cv->getWe($id),
            'edus' => $this->Model_cv->getEdu($id)
        );
        $this->load->view('Resultcv', $data);
    }
}
