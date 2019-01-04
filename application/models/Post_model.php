<?php

class Post_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }
	function getTags(){
	        $query = $this->db->get_where('vh_tags');
	        return $query->result_array();
	}
	
	function sendEmailotp($email,$otpn){
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		$this->email->set_header('MIME-Version', '1.0; charset=utf-8'); 
		$this->email->set_header('Content-type', 'text/html'); 

		$this->email->from('ajayviewham@gmail.com', 'Viewham');
		$this->email->to($email);
		$this->email->reply_to($email);
		$this->email->subject('Viewham');
		$lnki = 'https://viewham.com/User/Verifyemail/'.$otpn;
                $this->email->message('Welcome To Viewham. <br><br>  veification link <a href="https://viewham.com/User/Verifyemail/'.$otpn.'">Verify Here</a> ');
               if($this->email->send()) {
				   return 'sent';
			   }else{
				  return 'not sent'; 
			   }	
	}
function sendsmsotp($phone,$otpn){

$textmessage = urlencode($otpn);
$service_url ='https://sms.office24by7.com/API/sms.php?username=9492973688&password=NiN0cPZl&from=VIEWHA&to='.$phone.'&msg='.$textmessage.'&type=1';
$ch = curl_init($service_url);
$timeout  =  30;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT, $timeout) ;
$content  = curl_exec($ch);
curl_close($ch);
return $service_url;	
	}
	/*
     * Fetch Admin_login data
     */
    function getindustry(){
        $query = $this->db->get_where('vh_master_data', array('refgrp' => 'INDSTY'));
        return $query->result_array();
    }

    function getindustryby($id){
        $query = $this->db->get_where('vh_master_data', array('ID' => $id));
        return $query->row_array();
    }
    function getlocation(){
        $query = $this->db->get_where('vh_country');
        return $query->result_array();
    }
    function getlocationbyid($id){
        $query = $this->db->get_where('vh_country', array('c_code' => $id));
        return $query->row_array();
    }
	function getskils(){
        $query = $this->db->get_where('vh_master_data', array('refgrp' => 'SKILL'));
        return $query->result_array();
    }
	function getskilsbyid($id=''){
        $query = $this->db->get_where('vh_master_data', array('refgrp' => 'SKILL','ID'=>$id));
        return $query->row_array();
    }
	/*
     * Insert POst  data
     */
	function Postfeedback_byId($id){
        $query = $this->db->get_where('vh_idea_impress', array('idea_id' =>$id));
        return $query->result_array();
    } 
	function checkFeedbackIdea($uid,$ideaid){
        $query = $this->db->get_where('vh_idea_impress', array('posted_by' => $uid,'idea_id' => $ideaid));
        return $query->row_array();
    }
	function checkLikeComment($uid,$ideaid){
        $query = $this->db->get_where('vh_comments_likes', array('posted_by' => $uid,'comment_id' => $ideaid));
        return $query->row_array();
    }
	function idea_check_saved($ideaid,$uid,$saved){
        $query = $this->db->get_where('vh_saved_ideas', array('uid' => $uid,'idea_id' => $ideaid,'saved' => $saved));
        return $query->row_array();
    }
	function idea_check_savedcount($uid,$saved){
        $query = $this->db->get_where('vh_saved_ideas', array('uid' => $uid,'saved' => $saved));
        return $query->result_array();
    } 
	function idea_check_savedbyuser($uid,$saved){
        $query = $this->db->get_where('vh_saved_ideas', array('uid' => $uid,'saved' => $saved));
        return $query->result_array();
    } 
		function getIdeasPostedPagenation($uid,$limit, $start){
		$this->db->limit($limit, $start);
		$this->db->order_by("ID","desc");
		if(!empty($_GET)){
		if(!empty($_GET['industrkey'])){
			
			$industrkey=$_GET['industrkey'];
			$length = count($industrkey);
			for ($i = 0; $i < $length; $i++) {
			if($i==0){
			$this->db->where('INDUSTRY', $industrkey[$i]);
			}else{
			$this->db->or_where('INDUSTRY', $industrkey[$i]	);
			}
			}
			
		}
		if(!empty($_GET['ret_min'])){
			$ret_min=$_GET['ret_min'];
			$this->db->where('MIN_RETURNS >=', $ret_min);
		}
		if(!empty($_GET['ret_max'])){
			$ret_max=$_GET['ret_max'];
			$this->db->where('MAX_RETURNS <=', $ret_max);
		}
		if(!empty($_GET['min_inv'])){
			$min_inv=$_GET['min_inv'];
			$this->db->where('MIN_INVESTMENT >=', $min_inv);
		}
		if(!empty($_GET['max_inv'])){
			$max_inv=$_GET['max_inv'];
			$this->db->where('MAX_INVESTMENT <=', $max_inv);
		}
		if(!empty($_GET['break_min'])){
			$break_min=$_GET['break_min'];
			$this->db->where('MIN_BREAKEVEN >=', $break_min);
		}
		if(!empty($_GET['break_max'])){
			$break_max=$_GET['break_max'];
			$this->db->where('MAX_BREAKEVEN <=', $break_max);
		}
			
		 
	 }
        $query = $this->db->get_where('vh_idea_hub', array('POSTED_BY' => $uid));
        return $query->result_array();
    }
	function getIdeasPosted($uid){
			 if(!empty($_GET)){
		if(!empty($_GET['industrkey'])){
			$industrkey=$_GET['industrkey'];
			$length = count($industrkey);
			for ($i = 0; $i < $length; $i++) {
			if($i==0){
			$this->db->where('INDUSTRY', $industrkey[$i]);
			}else{
			$this->db->or_where('INDUSTRY', $industrkey[$i]	);
			}
			}
			
		}
		if(!empty($_GET['ret_min'])){
			$ret_min=$_GET['ret_min'];
			$this->db->where('MIN_RETURNS >=', $ret_min);
		}
		if(!empty($_GET['ret_max'])){
			$ret_max=$_GET['ret_max'];
			$this->db->where('MAX_RETURNS <=', $ret_max);
		}
		if(!empty($_GET['min_inv'])){
			$min_inv=$_GET['min_inv'];
			$this->db->where('MIN_INVESTMENT >=', $min_inv);
		}
		if(!empty($_GET['max_inv'])){
			$max_inv=$_GET['max_inv'];
			$this->db->where('MAX_INVESTMENT <=', $max_inv);
		}
		if(!empty($_GET['break_min'])){
			$break_min=$_GET['break_min'];
			$this->db->where('MIN_BREAKEVEN >=', $break_min);
		}
		if(!empty($_GET['break_max'])){
			$break_max=$_GET['break_max'];
			$this->db->where('MAX_BREAKEVEN <=', $break_max);
		}
			
		 
	 }
		$this->db->order_by("ID","desc");
        $query = $this->db->get_where('vh_idea_hub', array('POSTED_BY' => $uid));
        return $query->result_array();
    }
	function idea_get_intiatedidea($ideaid,$uid){
        $query = $this->db->get_where('vh_initiate_idea', array('idea_id'=>$ideaid,'POSTED_BY' => $uid));
        return $query->row_array();
    }
	function idea_get_investedidea($ideaid,$uid){
        $query = $this->db->get_where('vh_invest_idea', array('idea_id'=>$ideaid,'POSTED_BY' => $uid));
        return $query->row_array();
    }
	function getIdeasInitia($uid){
				 if(!empty($_GET)){
		if(!empty($_GET['industrkey'])){
			$industrkey=$_GET['industrkey'];
			$length = count($industrkey);
			for ($i = 0; $i < $length; $i++) {
			if($i==0){
			$this->db->where('vh_idea_hub.INDUSTRY', $industrkey[$i]);
			}else{
			$this->db->or_where('vh_idea_hub.INDUSTRY', $industrkey[$i]	);
			}
			}
			
		}
		if(!empty($_GET['ret_min'])){
			$ret_min=$_GET['ret_min'];
			$this->db->where('vh_idea_hub.MIN_RETURNS >=', $ret_min);
		}
		if(!empty($_GET['ret_max'])){
			$ret_max=$_GET['ret_max'];
			$this->db->where('vh_idea_hub.MAX_RETURNS <=', $ret_max);
		}
		if(!empty($_GET['min_inv'])){
			$min_inv=$_GET['min_inv'];
			$this->db->where('vh_idea_hub.MIN_INVESTMENT >=', $min_inv);
		}
		if(!empty($_GET['max_inv'])){
			$max_inv=$_GET['max_inv'];
			$this->db->where('vh_idea_hub.MAX_INVESTMENT <=', $max_inv);
		}
		if(!empty($_GET['break_min'])){
			$break_min=$_GET['break_min'];
			$this->db->where('vh_idea_hub.MIN_BREAKEVEN >=', $break_min);
		}
		if(!empty($_GET['break_max'])){
			$break_max=$_GET['break_max'];
			$this->db->where('vh_idea_hub.MAX_BREAKEVEN <=', $break_max);
		}
			
		 
	 }
		
		$this->db->join('vh_idea_hub', 'vh_initiate_idea.idea_id = vh_idea_hub.ID');
		$this->db->where('vh_initiate_idea.posted_by', $uid);
        $query = $this->db->get('vh_initiate_idea');
        return $query->result_array();
    } 
	function getIdeasInvest($uid){
				 if(!empty($_GET)){
		if(!empty($_GET['industrkey'])){
			$industrkey=$_GET['industrkey'];
			$length = count($industrkey);
			for ($i = 0; $i < $length; $i++) {
			if($i==0){
			$this->db->where('vh_idea_hub.INDUSTRY', $industrkey[$i]);
			}else{
			$this->db->or_where('vh_idea_hub.INDUSTRY', $industrkey[$i]	);
			}
			}
			
		}
		if(!empty($_GET['ret_min'])){
			$ret_min=$_GET['ret_min'];
			$this->db->where('vh_idea_hub.MIN_RETURNS >=', $ret_min);
		}
		if(!empty($_GET['ret_max'])){
			$ret_max=$_GET['ret_max'];
			$this->db->where('vh_idea_hub.MAX_RETURNS <=', $ret_max);
		}
		if(!empty($_GET['min_inv'])){
			$min_inv=$_GET['min_inv'];
			$this->db->where('vh_idea_hub.MIN_INVESTMENT >=', $min_inv);
		}
		if(!empty($_GET['max_inv'])){
			$max_inv=$_GET['max_inv'];
			$this->db->where('vh_idea_hub.MAX_INVESTMENT <=', $max_inv);
		}
		if(!empty($_GET['break_min'])){
			$break_min=$_GET['break_min'];
			$this->db->where('vh_idea_hub.MIN_BREAKEVEN >=', $break_min);
		}
		if(!empty($_GET['break_max'])){
			$break_max=$_GET['break_max'];
			$this->db->where('vh_idea_hub.MAX_BREAKEVEN <=', $break_max);
		}
			
		 
	 }		
		$this->db->join('vh_idea_hub', 'vh_invest_idea.idea_id = vh_idea_hub.ID');
		$this->db->where('vh_invest_idea.posted_by', $uid);
        $query = $this->db->get('vh_invest_idea');
        return $query->result_array();
    } 
	function getComments($uid){
		$this->db->order_by("comment_id","desc");
		  $query = $this->db->get_where('vh_comments', array('post_id'=>$uid,'parent_id'=>'0'));
        return $query->result_array();
    } 
	function getSubComments($uid){
		$this->db->order_by("comment_id","desc");
		  $query = $this->db->get_where('vh_comments', array('parent_id'=>$uid));
        return $query->result_array();
    } 
	function getCommentbyid($uid){
		$this->db->order_by("comment_id","desc");
		  $query = $this->db->get_where('vh_comments', array('comment_id'=>$uid));
        return $query->row_array();
    } 
    public function InsertComment($data = array()) {
	//	echo "ds"; exit;

        $insert = $this->db->insert('vh_comments', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    public function Insertearnprofile($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('vh_utimings', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	public function InsertinvestIdea($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('vh_invest_idea', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	public function InsertInitiateIdea($data = array()) {
		
        $insert = $this->db->insert('vh_initiate_idea', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	public function idea_saved($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('vh_saved_ideas', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	public function InsertReportIdea($data = array()) {
		$insert = $this->db->insert('vh_report_idea', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	public function InsertFeedbackIdea($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('vh_idea_impress', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	public function InsertCommentLike($data = array()) {
		
        $insert = $this->db->insert('vh_comments_likes', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	public function idea_check_unsave($ideaid,$uid,$saved){
        $delete = $this->db->delete('vh_saved_ideas',array('uid' => $uid,'idea_id' => $ideaid,'saved' => $saved));
        return $delete?true:false;
    }
	public function deleteIdeaByuser($ideaid,$uid){
        $delete = $this->db->delete('vh_idea_hub',array('ID' => $ideaid,'POSTED_BY' => $uid));
        return $delete?true:false;
    }
	public function IgnoreReportIdea($ideaid,$uid){
        $delete = $this->db->delete('vh_initiate_idea',array('posted_by' => $uid,'idea_id' => $ideaid));
        return $delete?true:false;
    }
		/*
     * Fetch Timings data
     */
    function usertimings($id = ""){
 			$query = $this->db->get_where('vh_utimings', array('u_id' => $id));
            return $query->result_array();
    }
    function skills_profiles($id = ""){
 			$query = $this->db->get_where('vh_posts', array('posted_by' => $id));
            return $query->result_array();
    }
    function skill_byid($id,$profileskil){
 			$query = $this->db->get_where('vh_posts', array('posted_by' => $id,'p_id'=>$profileskil));
            return $query->row_array();
    }
    function checkskill_byuser($userid,$profileskil){
 			$query = $this->db->get_where('vh_posts', array('posted_by' => $userid,'skill'=>$profileskil));
            return $query->row_array();
    }
	/*
     * Insert POst  data
     */
    public function Insertgain($data = array()) {
		if(!array_key_exists('created', $data)){
			$data['create_date'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists('modified_date', $data)){
			$data['modified_date'] = date("Y-m-d H:i:s");
		}
        $insert = $this->db->insert('vh_posts', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
	
	public function Updateusertiming($id,$userData){
		 if(!empty($userData) && !empty($id)){
            $update = $this->db->update('vh_utimings', $userData, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
	}
	public function updateInitiateIdea($userData,$ideaid,$postinid){
		 if(!empty($userData) && !empty($ideaid)&& !empty($postinid)){
            $update = $this->db->update('vh_initiate_idea', $userData, array('id'=>$postinid,'idea_id'=>$ideaid));
            return $update?true:false;
        }else{
            return false;
        }
	}
	public function updateInvesteIdea($userData,$ideaid,$postinid){
		 if(!empty($userData) && !empty($ideaid)&& !empty($postinid)){
			 
            $update = $this->db->update('vh_invest_idea', $userData, array('id'=>$postinid,'idea_id'=>$ideaid));
            return $update?true:false;
        }else{
            return false;
        }
	}
	public function UpdateFeedbackIdea($userData,$session_user,$ideaid){
		 if(!empty($userData) && !empty($session_user)){
         $update = $this->db->update('vh_idea_impress', $userData, array('posted_by'=>$session_user,'idea_id'=>$ideaid));
            return $update?true:false;
        }else{
            return false;
        }
	}
	public function UpdateCommentLike($userData,$session_user,$ideaid){
		 if(!empty($userData) && !empty($session_user)){
         $update = $this->db->update('vh_comments_likes', $userData, array('posted_by'=>$session_user,'comment_id'=>$ideaid));
            return $update?true:false;
        }else{
            return false;
        }
	}
	public function DeleteUserday($id,$day){
        $delete = $this->db->delete('vh_utimings',array('id'=>$day,'u_id'=>$id));
        return $delete?true:false;
    }

    


}
?>