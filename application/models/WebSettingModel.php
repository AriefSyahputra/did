<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebSettingModel extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function GetCount(){
		$this->db->where('Status', 'Active');
		$this->db->where('Code', 'Home');
		$num_rows = $this->db->count_all_results('websetting');
		
		return $num_rows;
	}
}
