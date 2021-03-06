<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Earn extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Post_model');
    }
	function UploadImage(){
				$config['upload_path'] = 'uploads/images';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = time().$_FILES['avatar']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('avatar')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                   echo $picture = 'not upload'; exit; 
                }
				return $picture;

	}
    function index()
    {
        $this->load->view('knowmore-earn');
    } 
	function myprofiles($id='')
    {
		$profileskil = $this->uri->segment(3); 
		$session_user = $this->session->userdata('user'); 
		$data['user'] = $this->User_model->user_details($session_user);
		$data['usertimngs'] = $this->User_model->user_timngs($session_user);
		$data['skills_profiles'] = $this->Post_model->skills_profiles($session_user);
		$data['skill_byid'] = $this->Post_model->skill_byid($session_user,$profileskil);
        $this->load->view('user/earn-user',$data);
    }
    function Profile(){
		
		$data['industry'] = $this->Post_model->getindustry();	
		$data['locations'] = $this->Post_model->getlocation();	
		$data['skils'] = $this->Post_model->getskils();	
		if(!empty($_POST)){
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
			$userid = $this->session->userdata('user');
			$keyskil = strip_tags($this->input->post('professional'));
			$check = $this->Post_model->checkskill_byuser($userid,$keyskil);
			if(count($check)>0){
				$this->session->set_flashdata('msg','<span style="color:red">Your Profile Skill Profile already existed.</span>');
			redirect($_SERVER['HTTP_REFERER']);
			}
		if(!empty($_FILES['avatar']['name'])){
		
		 $filesCount = count($_FILES['avatar']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = time().$_FILES['avatar']['name'][$i];
                $_FILES['file']['type']     = $_FILES['avatar']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['avatar']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['avatar']['error'][$i];
                $_FILES['file']['size']     = $_FILES['avatar']['size'][$i];
                
                // File upload configuration
                $uploadPath = 'uploads/images/';
                $config['upload_path'] = $uploadPath;
               $config['allowed_types'] = '*';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i] = $fileData['file_name'];
                    //$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
					$port = implode(",",$uploadData);
					
	}}}else{
		$port ='';		
						}
		$association = implode(",",$_POST['roles']);
		$userid = $this->session->userdata('user'); 
		$userData = array(
           
				'association' => strip_tags($association),
                'skill' => strip_tags($this->input->post('professional')),
                'investment_currency' => strip_tags($this->input->post('currency')),
                'location' => strip_tags($this->input->post('location')),
                'price_per' => strip_tags($this->input->post('price_per')),
                'experience' => strip_tags($this->input->post('experience')),
                'competitive' => strip_tags($this->input->post('competitive')),
                'currency' => strip_tags($this->input->post('price')),
                'l_term_work_option' => strip_tags($this->input->post('options')),
                'min_as_employee' => strip_tags($this->input->post('min_emplye')),
                'max_as_employee' => strip_tags($this->input->post('max_emplye')),
                'min_as_partner' => strip_tags($this->input->post('min_partner')),
                'max_as_partner' => strip_tags($this->input->post('max_partner')),
           		'posted_by' => $userid,
           		'portfolio' => $port,
				'post_type' => 'Profile',
                
            );
			//echo '<pre>'; print_r($userData); echo '</pre>';	 exit;
		$Insert = $this->Post_model->Insertgain($userData);
		if($Insert){
			$this->session->set_flashdata('msg','Your Profile has been saved successfully. We appreciate your enthusiasm.');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('msg','Failed Yours Profile');
			redirect($_SERVER['HTTP_REFERER']);
		}	
		}
		$this->load->view('earn-my-profile', $data);
	}
    function Myhobby(){
		$data['industry'] = $this->Post_model->getindustry();	
		$data['locations'] = $this->Post_model->getlocation();	
		$data['skils'] = $this->Post_model->getskils();	
		if(!empty($_POST)){
		//echo '<pre>'; print_r($_POST); echo '</pre>';	 exit;
			$userid = $this->session->userdata('user');
			$keyskil = strip_tags($this->input->post('hobbyskill'));
			$check = $this->Post_model->checkskill_byuser($userid,$keyskil);
			if(count($check)>0){
				$this->session->set_flashdata('msg','<span style="color:red">Your Hobby Skill Profile already existed.</span>');
			redirect($_SERVER['HTTP_REFERER']);
			}		
			if(!empty($_FILES['avatar']['name'])){
		
		 $filesCount = count($_FILES['avatar']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = time().$_FILES['avatar']['name'][$i];
                $_FILES['file']['type']     = $_FILES['avatar']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['avatar']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['avatar']['error'][$i];
                $_FILES['file']['size']     = $_FILES['avatar']['size'][$i];
                
                // File upload configuration
                $uploadPath = 'uploads/images/';
                $config['upload_path'] = $uploadPath;
               $config['allowed_types'] = '*';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i] = $fileData['file_name'];
                    //$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
					$port = implode(",",$uploadData);
					
	}}}else{
		$port ='';	
		}
		$association = implode(",",$_POST['roles']);
		$userid = $this->session->userdata('user'); 
		$userData = array(
				'association' => strip_tags($association),
                'skill' => strip_tags($this->input->post('hobbyskill')),
                'investment_currency' => strip_tags($this->input->post('currency')),
                'location' => strip_tags($this->input->post('location')),
                'price_per' => strip_tags($this->input->post('price_per')),
                'experience' => strip_tags($this->input->post('experience')),
                'competitive' => strip_tags($this->input->post('competitive')),
                'currency' => strip_tags($this->input->post('price')),
                'l_term_work_option' => strip_tags($this->input->post('options')),
                'min_as_employee' => strip_tags($this->input->post('min_emplye')),
                'max_as_employee' => strip_tags($this->input->post('max_emplye')),
                'min_as_partner' => strip_tags($this->input->post('min_partner')),
                'max_as_partner' => strip_tags($this->input->post('max_partner')),
           		'posted_by' => $userid,
           		'portfolio' => $port,
				'post_type' => 'Hobby',
				);
		$Insert = $this->Post_model->Insertgain($userData);
		if($Insert){
			$this->session->set_flashdata('msg','Your Hobby Skill Profile has been saved successfully. We appreciate your enthusiasm. ');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('msg','Failed Yours Hobby Skill Profile');
			redirect($_SERVER['HTTP_REFERER']);
		}	
		}
		 $this->load->view('earn-my-hobby-profile',$data);
	}
	function Getusertimings(){
		$id =$this->session->userdata('user');
		$jsonData = $this->Post_model->usertimings($id);		
		echo json_encode($jsonData);
	}
	function Usertimedelete($day){
		$id =$this->session->userdata('user');
		$efected = $this->Post_model->DeleteUserday($id,$day);
		redirect($_SERVER['HTTP_REFERER']);

	}
	function Updateusertimings(){
		
		$id = strip_tags($this->input->post('idd'));
		$userData = array(
                'day' => strip_tags($this->input->post('day')),
                'to_time' => strip_tags($this->input->post('totime')),
                'from_time' => strip_tags($this->input->post('fromtime'))

            );
		$efected = $this->Post_model->Updateusertiming($id,$userData);
		echo $efected;
		

	}
	function Createusertimings(){
		
				//echo '<pre>'; print_r($_POST); echo '</pre>'; exit;
				$userData = array(
                'day' => strip_tags($this->input->post('day')),
                'to_time' => strip_tags($this->input->post('totime')),
                'from_time' => strip_tags($this->input->post('fromtime')),
                'u_id' => $this->session->userdata('user'),
                'from_from' => 'Profile'
                
            );
		$Insert = $this->Post_model->Insertearnprofile($userData);
		if($Insert){
			$id =$this->session->userdata('user');
		$jsonData = $this->Post_model->usertimings($id);		
		echo json_encode($jsonData);
		}else{
			echo "failed Create"; exit;
		}
	}
	function Mediator(){
		$data['industry'] = $this->Post_model->getindustry();	
		$data['locations'] = $this->Post_model->getlocation();	
		$data['skils'] = $this->Post_model->getskils();	
		if(!empty($_POST)){
			$userid = $this->session->userdata('user');
			$keyskil = strip_tags($this->input->post('occupation'));
			$check = $this->Post_model->checkskill_byuser($userid,$keyskil);
			if(count($check)>0){
				$this->session->set_flashdata('msg','<span style="color:red">Your Mediator Skill Profile already existed.</span>');
			redirect($_SERVER['HTTP_REFERER']);
			}
	//echo '<pre>'; print_r($_POST); echo '</pre>'; exit;
	if(!empty($_FILES['avatar']['name'])){
		
		 $filesCount = count($_FILES['avatar']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = time().$_FILES['avatar']['name'][$i];
                $_FILES['file']['type']     = $_FILES['avatar']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['avatar']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['avatar']['error'][$i];
                $_FILES['file']['size']     = $_FILES['avatar']['size'][$i];
                
                // File upload configuration
                $uploadPath = 'uploads/images/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = '*';
                
                // Load and initialize upload library
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                
                // Upload file to server
                if($this->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $this->upload->data();
                    $uploadData[$i] = $fileData['file_name'];
                    //$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
					$port = implode(",",$uploadData);
					
	}}}else{
		$port ='';	
		}
		$association = implode(",",$_POST['roles']);
		 
		$userData = array(
				'association' => strip_tags($association),
                'skill' => strip_tags($this->input->post('occupation')),
                'investment_currency' => strip_tags($this->input->post('currency')),
                'location' => strip_tags($this->input->post('location')),
                'location' => strip_tags($this->input->post('language')),
                'price_per' => strip_tags($this->input->post('price_per')),
                'experience' => strip_tags($this->input->post('experience')),
                'competitive' => strip_tags($this->input->post('competitive')),
                'currency' => strip_tags($this->input->post('price')),
                'l_term_work_option' => strip_tags($this->input->post('options')),
                'min_as_employee' => strip_tags($this->input->post('min_emplye')),
                'max_as_employee' => strip_tags($this->input->post('max_emplye')),
                'min_as_partner' => strip_tags($this->input->post('min_partner')),
                'max_as_partner' => strip_tags($this->input->post('max_partner')),
                'candidate' => strip_tags($this->input->post('candidate')),
                'mobile' => strip_tags($this->input->post('mobile')),
                'mediate_type' => strip_tags($this->input->post('Mediate_type')),
           		'posted_by' => $userid,
           		'portfolio' => $port,
				'post_type' => 'Mediator',
				);
		$Insert = $this->Post_model->Insertgain($userData);
		if($Insert){
			$this->session->set_flashdata('msg','Your Hobby Skill Profile has been saved successfully. We appreciate your enthusiasm. We will come back to you with full version very soon.');
			redirect($_SERVER['HTTP_REFERER']);
		}else{
			$this->session->set_flashdata('msg','Failed Yours Mediator Skill Profile');
			redirect($_SERVER['HTTP_REFERER']);
		}	
		}
		$this->load->view('earn-mediator',$data);
	}
	function Skill($id){
	 return $skill = $this->Post_model->getskilsbyid($id);
	}
	function Location($id){
	 return $locat = $this->Post_model->getlocationbyid($id);	
	}



}
