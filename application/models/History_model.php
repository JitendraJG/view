<?php

class History_model extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		//load database library
        $this->load->database();
    }
	/*
     * Fetch Admin_login data
     */
    function getindustry(){
		
//	     $this->db->like('refgrp','INDSTY'); 
        $query = $this->db->get_where('vh_master_data', array('refgrp' => 'INDSTY'));
        return $query->result_array();
    }
    function getlocation(){
        $query = $this->db->get_where('vh_country');
        return $query->result_array();
    }
	

    


}
?>