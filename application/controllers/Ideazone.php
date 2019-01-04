<?php

 
class Ideazone extends CI_Controller{
    function __construct()
    {
	parent::__construct();
	$this->load->model('User_model');
	$this->load->model('Post_model');
	$this->load->library('session');
    }

    function index()
    {
	
        $this->load->view('knowmore-ideazone');
    }
    function ideaapi(){
	$data = $this->Post_model->getindustry();	
	echo json_encode($data);
	}
    function ideaapiedit($id){
	 $data = $this->Post_model->getindustryby($id);
	
		echo json_encode($data);
	}
    function idea($id='0') {
		$session_user = $this->session->userdata('user');
		$data['industry'] = $this->Post_model->getindustry();
		$data['bussinessIdeas'] = $this->User_model->getbussinessIdeas($id);
		$data['user'] = $this->User_model->user_details($session_user);

	
	$this->load->view('user/business-ideas-single',$data);
    }
    function Postidea(){
		 $session_user = $this->session->userdata('user');
		
		$data['user'] = $this->User_model->user_details($session_user);
		$data['industry'] = $this->Post_model->getindustry();	
		$data['locations'] = $this->Post_model->getlocation();	
		$data['skils'] = $this->Post_model->getskils();
		$data['tags'] = $this->Post_model->getTags();
		
		if(!empty($_POST)){
			//print_r($_POST); exit;
		$session_user = $this->session->userdata('user'); 
		if(empty($session_user)){
		echo 'nosess'; exit;
		};
		if(!empty($_POST['resourse'])){
			$resourse = $_POST['resourse'];
		}else{
			$resourse='';
		}
		if(count($resourse) !== count(array_unique($resourse))){
			echo "duplicate"; exit;
		}
		$post_array = array_values($_POST); 
		//echo '<pre>'; print_r($post_array); echo '</pre>';	
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'IDEA_TITLE' => strip_tags($this->input->post('title')),
                'INDUSTRY' => strip_tags($this->input->post('industry')),
                'DESCRIPTION' => $this->input->post('description'),
                'CURRENCY' => strip_tags($this->input->post('currency')),
                'MIN_INVESTMENT' => strip_tags($this->input->post('min_invest')),
                'MAX_INVESTMENT' => strip_tags($this->input->post('max_invest')),
                'RETURNS_TYPE' => strip_tags($this->input->post('returns_type')),
                'MIN_RETURNS' => strip_tags($this->input->post('min_return')),
                'MAX_RETURNS' => strip_tags($this->input->post('max_return')),
                'BREAKEVEN_TYPE' => strip_tags($this->input->post('breakeven_type')),
                'MIN_BREAKEVEN' => strip_tags($this->input->post('breakeven_min')),
                'MAX_BREAKEVEN' => strip_tags($this->input->post('breakeven_max')),
                'POSTED_BY' => $session_user ,
                'resources' => implode(",",$_POST['resourse']),
                'resources_qty' => implode(",",$_POST['rs_qnty']),
                'tags' => implode(",",$_POST['tags'])
                
            );
		$Insert = $this->User_model->InsertIdea($userData);
		if($Insert){
			echo $Insert; exit;
			$this->session->set_flashdata('msg','Your Idea has been saved successfully. We appreciate your enthusiasm. We will come back to you with full version very soon.');
			redirect('Gain/Success');
		}else{
			echo "failed Create"; exit;
		}		
		}
		$this->load->view('post-an-idea',$data);
	}   
	function Postideaold(){
		 
		$data['industry'] = $this->Post_model->getindustry();	
		$data['locations'] = $this->Post_model->getlocation();	
		$data['skils'] = $this->Post_model->getskils();
		if(!empty($_POST)){
		$session_user = $this->session->userdata('user'); 
	//	echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
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
                'POSTED_BY' => $session_user ,
                'resources' => implode(",",$_POST['resourse']),
                'resources_qty' => implode(",",$_POST['rs_qnty']),
                
            );
		$Insert = $this->User_model->InsertIdea($userData);
		if($Insert){
			//echo $Insert; exit;
			$this->session->set_flashdata('msg','Your Idea has been saved successfully. We appreciate your enthusiasm. We will come back to you with full version very soon.');
			redirect('Gain/Success');
		}else{
			echo "failed Create"; exit;
		}		
		}
		$this->load->view('post-an-idea',$data);
	}
    function InvestIdea(){
		 
		
		
		$session_user = $this->session->userdata('user'); 
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'role_expect' => strip_tags($this->input->post('Role')),
                'location_id' => strip_tags($this->input->post('Location')),
                'currency' => strip_tags($this->input->post('currency')),
                'currency_min' => strip_tags($this->input->post('currency_min')),
                'currency_max' => strip_tags($this->input->post('currency_max')),
                'approx_share_offered_max' => strip_tags($this->input->post('max_offer')),
                'approx_share_offered_min' => strip_tags($this->input->post('min_offer')),
                'status' => 1,
                'idea_id' => strip_tags($this->input->post('post_id')),
                'posted_by' => $session_user ,
                'create_date' => date("Y-m-d H:i:s"),
                
            );
		$Insert = $this->Post_model->InsertinvestIdea($userData);
		if($Insert){
			echo $Insert; exit;
			
		}else{
			echo "failed Create"; exit;
		}		
		
	}
    function UpdateinvesteIdea(){
		 
		
		
		$session_user = $this->session->userdata('user'); 
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'role_expect' => strip_tags($this->input->post('Role')),
                'location_id' => strip_tags($this->input->post('Location')),
                'currency' => strip_tags($this->input->post('currency')),
                'currency_min' => strip_tags($this->input->post('currency_min')),
                'currency_max' => strip_tags($this->input->post('currency_max')),
                'approx_share_offered_max' => strip_tags($this->input->post('max_offer')),
                'approx_share_offered_min' => strip_tags($this->input->post('min_offer')),
               // 'status' => 1,
               // 'idea_id' => strip_tags($this->input->post('post_id')),
                'posted_by' => $session_user ,
                'create_date' => date("Y-m-d H:i:s"),
                
            );
			
			$ideaid=strip_tags($this->input->post('ideapost_id'));
			$postinid=strip_tags($this->input->post('post_id'));
		$update = $this->Post_model->updateInvesteIdea($userData,$ideaid,$postinid);
		if($update){
			echo $update; exit;
			
		}else{
			echo "failed Create"; exit;
		}		
		
	}
	function initiateIdea(){
		 
		
		
		$session_user = $this->session->userdata('user'); 
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'is_employee' => strip_tags($this->input->post('Employee')),
                'is_partner' => strip_tags($this->input->post('Partner')),
                'role' => strip_tags($this->input->post('Role')),
                'location' => strip_tags($this->input->post('Location')),
                'currency' => strip_tags($this->input->post('currency')),
                'initiate_min' => strip_tags($this->input->post('initiate_min')),
                'initiate_max' => strip_tags($this->input->post('initiate_max')),
                'share_offered_min' => strip_tags($this->input->post('share_offered_min')),
                'share_offered_max' => strip_tags($this->input->post('share_offered_max')),
                'consultant' => strip_tags($this->input->post('consultant')),
                'mentorship' => strip_tags($this->input->post('mentorship')),
                'status' => 1,
                'idea_id' => strip_tags($this->input->post('post_id')),
                'posted_by' => $session_user ,
                'create_date' => date("Y-m-d H:i:s"),
                
            );
		$Insert = $this->Post_model->InsertInitiateIdea($userData);
		if($Insert){
			echo $Insert; exit;
			
		}else{
			echo "failed Create"; exit;
		}		
		
	}
	function UpdateinitiateIdea(){
		 
		
		
		$session_user = $this->session->userdata('user'); 
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'is_employee' => strip_tags($this->input->post('Employee')),
                'is_partner' => strip_tags($this->input->post('Partner')),
                'role' => strip_tags($this->input->post('Role')),
                'location' => strip_tags($this->input->post('Location')),
                'currency' => strip_tags($this->input->post('currency')),
                'initiate_min' => strip_tags($this->input->post('initiate_min')),
                'initiate_max' => strip_tags($this->input->post('initiate_max')),
                'share_offered_min' => strip_tags($this->input->post('share_offered_min')),
                'share_offered_max' => strip_tags($this->input->post('share_offered_max')),
                'consultant' => strip_tags($this->input->post('consultant')),
                'mentorship' => strip_tags($this->input->post('mentorship')),
               // 'status' => 1,
               // 'idea_id' => strip_tags($this->input->post('post_id')),
                'posted_by' => $session_user ,
                'create_date' => date("Y-m-d H:i:s"),
                
            );
			$ideaid=strip_tags($this->input->post('ideapost_id'));
			$postinid=strip_tags($this->input->post('post_id'));
		$update = $this->Post_model->updateInitiateIdea($userData,$ideaid,$postinid);
		if($update){
			echo $update; exit;
			
		}else{
			echo "failed update"; exit;
		}		
		
	}
	function reportIdeaignore(){
		$session_user = $this->session->userdata('user'); 
		$postinid = $this->input->post('postinid');
		
		$Insert = $this->Post_model->IgnoreReportIdea($postinid,$session_user);
		if($Insert){
			echo $Insert; exit;
			
		}else{
			echo "failed Create"; exit;
		}		
		
	}
	function deleteIdea(){
		$session_user = $this->session->userdata('user'); 
		$postinid = $this->input->post('postinid');
		
		$Insert = $this->Post_model->deleteIdeaByuser($postinid,$session_user);
		if($Insert){
			echo $Insert; exit;
			
		}else{
			echo "failed Create"; exit;
		}		
		
	}
	function savedidea(){
		$ideaid = $this->input->post('postinid');
		$uid = $this->session->userdata('user');
		$saved = 1;
		$Insert = $this->Post_model->IgnoreReportIdea($ideaid,$uid);
		$ideasave_check = $this->Post_model->idea_check_saved($ideaid,$uid,$saved);
		if(!empty($ideasave_check)){
		//	$ideasave_unsave = $this->Post_model->idea_check_unsave($ideaid,$uid,$saved);
			$data['msg'] = "Save";
		}else{
		$data = array('uid' =>$uid,
					'idea_id' => $ideaid,
					'saved' => $saved,
						);
		$ideasave = $this->Post_model->idea_saved($data);
		if(!empty($ideasave)){
		$data['msg'] = "Unsave";	
		}else{
		$data['msg'] = "failed to save idea";	
		}
		}
		$ideasave_checkcont = $this->Post_model->idea_check_savedcount($uid,$saved);
		$data['count'] = count($ideasave_checkcont);
		
		echo json_encode($data);
	}
	function reportIdea(){
		$session_user = $this->session->userdata('user'); 
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'report' => strip_tags($this->input->post('optionsreport')),
                'status' => 1,
                'idea_id' => strip_tags($this->input->post('postidreport')),
                'posted_by' => $session_user,
                'create_date' => date("Y-m-d H:i:s")
                
            );
		$Insert = $this->Post_model->InsertReportIdea($userData);
		if($Insert){
			echo $Insert; exit;
			
		}else{
			echo "failed Create"; exit;
		}		
		
	}
	function Commentsadd(){
		$session_user = $this->session->userdata('user'); 
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$userData = array(
                'comment_name' => strip_tags($this->input->post('postcomment')),
                'parent_id' => strip_tags($this->input->post('parent_id')),
                'post_id' => strip_tags($this->input->post('ideaid')),
                'comment_byuser' => $session_user,
                'comment_created' => date("Y-m-d H:i:s"),
                
            );
		$ideaid = $this->input->post('ideaid');	
		$Insert = $this->Post_model->InsertComment($userData);
		if($Insert){
		$dataa = $this->Post_model->getCommentbyid($Insert);
		$userid = $dataa['comment_byuser'];
		$data['user'] = $this->User_model->user_details($userid);
		$data['comment']=$dataa;
		echo json_encode($data);
		}else{
			echo "failed Create"; exit;
		}		
		
	}
	function commentLike(){
		$session_user = $this->session->userdata('user'); 
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
		$comment_id = $this->input->post('comment_id');
		$textstatus = $this->input->post('textstatus');
		if($textstatus=='Like'){
			$status=1;
		}else{
			$status=2;
		}
		$userData = array(
                'status' => $status,
                'comment_id' => strip_tags($this->input->post('comment_id')),
                'posted_by' => $session_user ,
                'created_date' => date("Y-m-d H:i:s")
            );
			
		$chechLike=$this->Post_model->checkLikeComment($session_user,$comment_id);	
		//print_r($chechLike); exit;
		if(!empty($chechLike)){
		$Insert = $this->Post_model->UpdateCommentLike($userData,$session_user,$comment_id);
		}else{		
		$Insert = $this->Post_model->InsertCommentLike($userData);
		}
		if($Insert){
			echo json_encode($status);
			
		}else{
			echo "failed Oops"; exit;
		}		
		
	}	function ImpressIdea(){
		$session_user = $this->session->userdata('user'); 
		$ideaid = $this->input->post('ideaid');
		$userData = array(
                'feedback' => strip_tags($this->input->post('impress')),
                'status' => 1,
                'idea_id' => strip_tags($this->input->post('ideaid')),
                'posted_by' => $session_user ,
                'create_date' => date("Y-m-d H:i:s"),
                
            );
			
		$chechfeedback=$this->Post_model->checkFeedbackIdea($session_user,$ideaid);	

		if(!empty($chechfeedback)){
			$Insert = $this->Post_model->UpdateFeedbackIdea($userData,$session_user,$ideaid);
		}else{		
		$Insert = $this->Post_model->InsertFeedbackIdea($userData);
		}
		if($Insert){
			 $feed = $this->Post_model->Postfeedback_byId($ideaid);
			 $count= count($feed); 
					if(!empty($count)){
					$sum=0;
					foreach($feed as $f){
					if (is_numeric($f['feedback'])) {
						$sum+=$f['feedback'];
						}else{
							$sum=0;
						}
						}
						echo $fdb = $sum/$count; exit;
					}else{
						echo $fdb=0; exit;
					}
			
		}else{
			echo "failed Create"; exit;
		}		
		
	}
    function Search(){
			$data['bussinessIdeasall'] = $this->User_model->bussinessIdeasall();	
		$config = array();
			$config["base_url"] = base_url() . "/ideazone/search";
			echo $total_row = count($data['bussinessIdeasall']); 
			$config["total_rows"] = $total_row;
			$config["per_page"] = 10;
			$config['use_page_numbers'] = TRUE;
			$config['num_links'] = $total_row;
			$config['cur_tag_open'] = '&nbsp;<a class="btn btn-info">';
			$config['cur_tag_close'] = '</a>';
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Previous';

			$this->pagination->initialize($config);
			if($this->uri->segment(3)){
			$page = ($this->uri->segment(3))*$config["per_page"] ;
			}
			else{
			$page =0;
			}
			$data["bussinessIdeas"] = $this->User_model->getbussinessIdeasPage($config["per_page"], $page);
			$str_links = $this->pagination->create_links();
			$data["links"] = explode('&nbsp;',$str_links );
			$session_user = $this->session->userdata('user'); 
			
			$saved=1; 
			$data['savedideas'] = $this->Post_model->idea_check_savedcount($session_user,$saved);
			$data['industry'] = $this->Post_model->getindustry();
			//$data['bussinessIdeas'] = $this->User_model->getbussinessIdeas();
			$data['bussinessIdeasall'] = $this->User_model->bussinessIdeasall();
			$data['SavedIdeasb'] = $this->User_model->getbussinessIdeassaved($session_user);
			$data['PostedIdeas'] = $this->Post_model->getIdeasPosted($session_user);
			$data['InitiatedIdeas'] = $this->Post_model->getIdeasInitia($session_user);
			$data['InvestIdeas'] = $this->Post_model->getIdeasInvest($session_user);
			$data['locations'] = $this->Post_model->getlocation();	
			$data['user'] = $this->User_model->user_details($session_user);
			if(!empty($session_user)){
			$this->load->view('user/ideazone-allnew',$data);
			}else{
			$this->load->view('user/business-ideas-user',$data);
			}
	}
	function Industry($id){
	return $industry = $this->Post_model->getindustryby($id);
	}
    function Comments($id){
	return $comments = $this->Post_model->getComments($id);
	}
	function SubComments($id){
	return $comments = $this->Post_model->getSubComments($id);
	} 
	function Skill($id){
	 return $skill = $this->Post_model->getskilsbyid($id);
	}
	function userdata($id){
	 return $userdata = $this->User_model->user_details($id);
	}
	function comment_ById($id){
		$session_user = $this->session->userdata('user'); 	
	 return $chechLike=$this->Post_model->checkLikeComment($session_user,$id);	
	}
    function usersby($id){
	return $user = $this->User_model->user_details($id);
	}
	function FeedbackPost($id){
	return $feedback = $this->Post_model->Postfeedback_byId($id);
	//print_r($feedback);
	}
    function savedideacheck($ideaid,$uid){
	$saved=1; 
	
	return $savedideas = $this->Post_model->idea_check_saved($ideaid,$uid,$saved);
	}
    function investbyId($ideaid){
	$uid = $this->session->userdata('user'); 
	
	return $savedideas = $this->Post_model->idea_get_investedidea($ideaid,$uid);
	}
	function intiatedbyId($ideaid){
	$uid = $this->session->userdata('user'); 
	
	return $savedideas = $this->Post_model->idea_get_intiatedidea($ideaid,$uid);
	}
    function Gain(){
		$this->load->view('gain');
	}


}
