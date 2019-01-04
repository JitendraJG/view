<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Learn extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index()
    {
        $this->load->view('knowmore-learn');
    }
    function Profile(){
		
		 $this->load->view('earn-my-profile');
	}
    function Myhobby(){
		
		 $this->load->view('earn-my-hobby-profile');
	}
	function Mediator(){
		if(!empty($_POST)){
		echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'IDEA_TITLE' => strip_tags($this->input->post('title')),
                'INDUSTRY' => strip_tags($this->input->post('industry')),
                'DESCRIPTION' => strip_tags($this->input->post('description')),
                'CURRENCY' => strip_tags($this->input->post('currency')),
                'MIN_INVESTMENT' => strip_tags($this->input->post('min_invest')),
                'MAX_INVESTMENT' => strip_tags($this->input->post('max_invest')),
                'RETURNS_TYPE' => strip_tags($this->input->post('returns_type')),
                'MIN_RETURNS' => strip_tags($this->input->post('min_return')),
                'MAX_RETURNS' => strip_tags($this->input->post('max_return')),
                'BREAKEVEN_TYPE' => strip_tags($this->input->post('breakeven_type')),
                'MIN_BREAKEVEN' => strip_tags($this->input->post('breakeven_min')),
                'MAX_BREAKEVEN' => strip_tags($this->input->post('breakeven_max')),
                'POSTED_BY' => 1,
                
            );
		$Insert = $this->User_model->InsertIdea($userData);
		if($Insert){
			//echo $Insert; exit;
			$this->session->set_flashdata('msg','Succussfully Posted Yours Idea');
			redirect('Ideazone/Postidea');
		}else{
			echo "failed Create"; exit;
		}		
		}
		$this->load->view('earn-mediator');
	}



}