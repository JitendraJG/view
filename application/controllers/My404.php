<?php

 
class My404 extends CI_Controller{
    function __construct()
    {
        parent::__construct();
       $this->load->model('User_model');
          $this->load->model('Post_model');
		$this->load->library('session');
    }

    function index()
    {
	$this->output->set_status_header('404'); 
    $session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
	
	$this->load->view('error_404',$data);
    }

}
