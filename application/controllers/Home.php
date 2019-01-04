<?php

class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
          $this->load->model('User_model');
          $this->load->model('Post_model');
		$this->load->library('session');
    }

 
		public function index($pagename="index")
	{
		switch ($pagename)
		{
			case 'index':
			$session_user = $this->session->userdata('user'); 
			if(!empty($session_user)){
				redirect('ideazone-all');
			}
				 $this->load->view('knowmore-ideazone');
				break;
			case "who-we-are":
				 $this->load->view('who-we-are');
				break;		
			case "how-it-works":
				$this->load->view('how-it-works');
				break;		
			case "what-we-do":
				$this->load->view('what-we-do');
				break;		
			case "ideazone":
				 $this->load->view('knowmore-ideazone');
				break;		
			case "learn":
				 $this->load->view('knowmore-learn');
				break;	
			case "earn":
				 $this->load->view('knowmore-earn');
				break;	
			case "gain":
				 $this->load->view('knowmore-gain');
				break;	
			case "add-coins":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
				 $this->load->view('user/add-coins-user',$data);
				break;		
			case "all-coins":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
				 $this->load->view('user/all-coins-user',$data);
				break;		
			case "business-ideas":
			$session_user = $this->session->userdata('user'); 
			if(!empty($session_user)){
				redirect('ideazoneall/');
			}
			header("HTTP/1.1 301 Moved Permanently"); 
			header("Location: /businessideas/"); 
//			redirect('businessideas/');
			$data['bussinessIdeasall'] = $this->User_model->bussinessIdeasall();
			$data['industry'] = $this->Post_model->getindustry();
			$data['bussinessIdeas'] = $this->User_model->getbussinessIdeas();
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/business-ideas-user',$data);
				break;		
			
			case "candidate-profile":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
				 $this->load->view('user/candidate-profile-user',$data);
				break;		
			case "earn-user":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
				 $this->load->view('user/earn-user',$data);
				break;		
			case "entreprenuer-profiles":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
				 $this->load->view('user/entreprenuer-profiles',$data);
				break;		
			case "establish-own-business":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/establish-own-business',$data);
			break;		
			case "establish-own-business-view":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/establish-own-business-view',$data);
			break;		
			case "franchize-offers":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/franchize-offers',$data);
			break;		
			case "gain-entrepreneur-user":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/gain-entrepreneur-user',$data);
			break;		
			case "gain-invester-user":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/gain-invester-user',$data);
			break;		
			
			case "ideazone-all":
			$session_user = $this->session->userdata('user'); 
			if(empty($session_user)){
				redirect('businessideas/');
			}
				redirect('ideazoneall/');
			$saved=1; 
			$data['savedideas'] = $this->Post_model->idea_check_savedcount($session_user,$saved);
			$data['industry'] = $this->Post_model->getindustry();
			$data['bussinessIdeas'] = $this->User_model->getbussinessIdeas();
			$data['bussinessIdeasall'] = $this->User_model->bussinessIdeasall();
			$data['SavedIdeasb'] = $this->User_model->getbussinessIdeassaved($session_user);
			$data['PostedIdeas'] = $this->Post_model->getIdeasPosted($session_user);
			$data['InitiatedIdeas'] = $this->Post_model->getIdeasInitia($session_user);
			$data['InvestIdeas'] = $this->Post_model->getIdeasInvest($session_user);
			$data['locations'] = $this->Post_model->getlocation();	
			$data['user'] = $this->User_model->user_details($session_user);
			$data['skills_profiles'] = $this->Post_model->skills_profiles($session_user);
			$this->load->view('user/ideazone-allnew',$data);
			break;
			case "ideazone-old":
			$session_user = $this->session->userdata('user'); 
			
			$saved=1; 
			$data['savedideas'] = $this->Post_model->idea_check_savedcount($session_user,$saved);
			$data['industry'] = $this->Post_model->getindustry();
			$data['bussinessIdeas'] = $this->User_model->getbussinessIdeas();
			$data['locations'] = $this->Post_model->getlocation();	
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/ideazone-user',$data);
			break;
			case "ideazone-saved":
			$session_user = $this->session->userdata('user'); 
			$saved=1; 
			$data['savedideas'] = $this->Post_model->idea_check_savedcount($session_user,$saved);
			$data['industry'] = $this->Post_model->getindustry();
			$data['bussinessIdeas'] = $this->User_model->getbussinessIdeassaved($session_user);
		//	print_r($data['bussinessIdeas']);
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/ideazone-saved',$data);
			break;
			case "ideazone-initiated":
			$session_user = $this->session->userdata('user'); 
			$data['industry'] = $this->Post_model->getindustry();
			$data['bussinessIdeas'] = $this->User_model->getbussinessIdeas();
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/ideazone-Initiated',$data);
			break;	
			case "ideazone-post":
			$session_user = $this->session->userdata('user'); 
			$data['industry'] = $this->Post_model->getindustry();
			$data['bussinessIdeas'] = $this->User_model->getbussinessIdeas();
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/idea-posted',$data);
			break;		
			case "ideazone-investable":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/ideazone-investable',$data);
			break;		
			case "ideazone-required-skills":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/ideazone-required-skills',$data);
			break;		
			case "investor-profiles":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/ideazone-required-skills',$data);
			break;		
			case "learn-user":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/learn-user',$data);
			break;		
			case "offer-a-franchize":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/offer-a-franchize',$data);
			break;		
			case "offer-a-franchize-view":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/offer-a-franchize-view',$data);
			break;		
			case "offer-a-work":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/offer-a-work',$data);
			break;		
			case "offer-a-work-view":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/offer-a-work-view',$data);
			break;		
			case "outsource-projects":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/outsource-projects',$data);
			break;
			case "outsource-work":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/outsource-work',$data);
			break;		
			case "outsource-work-view":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/outsource-work-view',$data);
			break;		
			case "part-time-jobs":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/part-time-jobs',$data);
			break;		
			case "proposals":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/proposals',$data);
			break;		
			case "recognition":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/recognition',$data);
			break;		
			case "request-for-funding":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/request-for-funding',$data);
			break;		
			case "request-for-funding-view":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/request-for-funding-view',$data);
			break;		
			case "request-for-work":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$data['skils'] = $this->Post_model->getskils();	
			$this->load->view('user/request-for-work',$data);
			break;		
			case "request-for-work-view":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/request-for-work-view',$data);
			break;		
			case "shortlists-contacts":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/shortlists-contacts',$data);
			break;		
			case "skill-profiles":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/skill-profiles',$data);
			break;		
			case "skill-details":
			$session_user = $this->session->userdata('user'); 
			$data['user'] = $this->User_model->user_details($session_user);
			$this->load->view('user/skill-details',$data);
			break;
			case "terms":
			$this->load->view('terms-and-conditions');
			break;
			case "contact-us":
			$this->load->view('contact-us');
			break;			
			
			default:
				$var = array('heading'=>'404 Page Not Found','message'=>'The page you requested was not found');
				$view = $this->load->view('error_404', $var, true);
			    echo $view;
			    exit();
				break;
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
    function savedidea(){
		$ideaid = $this->input->post('ideaid');
		$uid = $this->input->post('uid');
		$saved = $this->input->post('saved');
		$ideasave_check = $this->Post_model->idea_check_saved($ideaid,$uid,$saved);
		if(!empty($ideasave_check)){
			$ideasave_unsave = $this->Post_model->idea_check_unsave($ideaid,$uid,$saved);
			
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
    function Investor(){
		$this->load->view('gain-investor');
	}
		function SignUp()
    {
        $this->load->view('user-signup');
    }

}
