<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
	
	public function GetUserByID($userid){
		$this->db->select('user.ID, UserID, IsActivated, UserName, UserType, company.id as CompanyID, CompanyName, jobtitle.ID as TitleID, Title, Commitment, Cabang');
		$this->db->where('UserId', $userid);
		$this->db->join('company', 'company.id = user.companyid');
		$this->db->join('jobtitle', 'jobtitle.id = user.jobtitleid');
		$query = $this->db->get('user');
		
		return $query->result();
	}
	
	public function GetUser($page){
		$number = 6;
		$start = ($page>1) ? ($page * $number) - $number : 0;
		
		$query = $this->db->query("select * from user where IsActivated='Yes' ORDER BY SubmitedDate");
		
		return $query->result();
	}
	
	public function GetCount(){
		$this->db->where('IsActivated', 'Yes');
		$num_rows = $this->db->count_all_results('user');
		
		return $num_rows;
	}
	
	public function Update($data, $id)
	{
		$this->db->where('ID', $id);
		$this->db->update('user',$data);
	}
	
	public function UpdateSyncData($data, $userid)
	{
		$this->db->where('UserID', $userid);
		$this->db->update('user',$data);
	}
	
	function update_to_local($data,$id)
	{
		$otherdb = $this->load->database('apLocal', TRUE); 
		
		$otherdb->where('ID',$id);
		$otherdb->update('user',$data);
	}
	
	function GetAll()
	{
		$this->db->select('user.ID, UserID, NoTelp, Email, IsActivated, UserName, UserType, company.id as CompanyID, CompanyName, jobtitle.ID as TitleID, Title, Commitment, Cabang');
		$this->db->join('company', 'company.id = user.companyid');
		$this->db->join('jobtitle', 'jobtitle.id = user.jobtitleid');
		$query = $this->db->get('user');
		
		return $query->result();
	}
	
	function GetSyncData()
	{
		$this->db->select('UserID, Commitment');
		$this->db->where('IsActivated', 'Yes');
		$query = $this->db->get('user');
		
		return $query->result();
	}
}
