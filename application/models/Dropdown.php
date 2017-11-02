<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dropdown extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function GetCompany(){
		
		$query = $this->db->query('select * from company where id>0');
		
		return $query->result();
	}
	
	public function GetTitle(){
		$query = $this->db->query('select * from jobtitle where id>0');
		
		return $query->result();
	}
	
	
}
