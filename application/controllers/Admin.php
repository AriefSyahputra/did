<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->model(array('Dropdown'));
	}
	
	public function index()
	{
		$company = $this->Dropdown->GetCompany();
		$company_option="";
		foreach($company as $key => $item)
		{
			$company_option .= "<option value='".$item->ID."'>".$item->CompanyName."</option>";
		}
		$data['company'] = $company_option;
		
		$title_option="";
		$title = $this->Dropdown->GetTitle();
		foreach($title as $key => $item2)
		{
			$title_option .= "<option value='".$item2->ID."'>".$item2->Title."</option>";
		}
		
		$data['title'] = $title_option;
		
		$this->load->view('admin',$data);
	}
}
