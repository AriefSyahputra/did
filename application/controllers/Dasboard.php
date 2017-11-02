<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasboard extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		
		$this->load->model(array('UserModel'));
	}
	
	public function index()
	{
		$user = $this->UserModel->GetUser(1);
		$data['user'] = $user;
		$data['page'] = 1;
		$this->load->view('dasboard',$data);
	}
	
	public function GetCount()
	{
		$count = $this->UserModel->GetCount();
		$data['count'] = $count;
		
		echo json_encode($data);
	}
	
	public function GetCommitment()
	{
		$page = $this->input->post('page');
		$pageCount = $this->input->post('pageCount');
		if ($pageCount >= 6 || $pageCount==0)
		{
			$page=$page+1;
		}
		$user = $this->UserModel->GetUser($page);
		
		$div="";
		foreach($user as $key => $value)
		{
			$name = $value->UserName;
			if(empty($name))
			{
				$name = 'Guest';
			}
			$div .= "<div class='col-sm-4'><div class='panel panel-primary'><div class='panel-heading'>".$value->UserName."</div>";
			$div .= "<div class='panel-body'>".$value->Commitment."</div></div></div>";
		}
		
		$data['user'] = $div;
		$data['page'] = $page;
		
		echo json_encode($data);
	}
	
}
