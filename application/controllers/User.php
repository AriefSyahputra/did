<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
		parent::__construct();
		
		$this->load->model(array('UserModel'));
	}

	public function index()
	{
		$this->load->view('user_detail');
	}
	
	public function GetUser()
	{
		$userid = $this->input->post('userid');
		$user = $this->UserModel->GetUserByID($userid);
		$data['user'] = $user;

		if(!empty($data["user"]))
		{
			if ($data["user"][0]->UserType == 'BoothRegistration')
			{
				$this->load->view('user_detail',$data);
			}
			else
			{
				$this->load->view('user_detail',$data);
			}
		}
		else
		{
			$this->load->view('user_detail',$data);
		}
	}
	
	public function GetUserAjax()
	{
		$userid = $this->input->post('userid');
		$user = $this->UserModel->GetUserByID($userid);
		
		$signatureExist = true;
		$imageprofile = true;
		//$path = base_url() . 'images/profile/'.$this->input->post('userid').".jpg";
		//echo $path;
		if (!file_exists("images/profile/".$userid.".jpg"))
		{
			$imageprofile = false;
		}
		if (!file_exists("images/signature/".$userid.".png"))
		{
			$signatureExist = false;
		}
		
		$data['user'] = $user;
		$data['signature'] = $signatureExist;
		$data['profile'] = $imageprofile;
		echo json_encode($data);
	}
	
	public function UpdateCommitment()
	{
		$response =array("status"=>true,"message"=>"");
		
		if (empty($this->input->post('Commitment')))
		{
			$response = array(
				'status' => false,
				'message' => 'Commitment harus diisi!'
			);
		}
		else
		{
			$id = $this->input->post('ID');
			$userid = $this->input->post('UserID');
			$data = array(
				'Commitment' => $this->input->post('Commitment'),
				'IsActivated' => 'Yes',
				'SubmitedDate' => date("y-m-d H:m:s")
			);
			
			$result = $this->UserModel->Update($data, $id);

			$img = $_POST['signature'];
			$img = str_replace('data:image/png;base64,', '', $img);
			$img = str_replace(' ', '+', $img);
			$data = base64_decode($img);
			$file = 'images/signature/'. $userid . '.png';
			$success = file_put_contents($file, $data);
		}
		
		echo json_encode($response);
	}
	
	public function Update()
	{
		$response =array("status"=>true,"message"=>"");
		
		$id = $this->input->post('ID');
		$userid = $this->input->post('UserID');
		
		// $config['upload_path']          = 'images/profile/';
		// $config['allowed_types']        = 'jpg';
		// $config['max_size']             = 10000;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
		// $config['file_name'] = $userid;		
		
		$data = array(
			'UserName' => $this->input->post('UserName'),
			'CompanyID' => $this->input->post('CompanyID'),
			'Cabang' => $this->input->post('Cabang'),
			'JobTitleID' => $this->input->post('Title')
		);
		
		$result = $this->UserModel->Update($data,$id);
		
		// $this->load->library('upload', $config);
		// if ( ! $this->upload->do_upload('userprofile'))
		// {
			// $error = array('error' => $this->upload->display_errors());
			// //$this->load->view('upload_form', $error);
		// }
		// else
		// {
			// $data = array('upload_data' => $this->upload->data());
			// //$this->load->view('upload_success', $data);
		// }
		
		//$this->load->view('success',$data);
		echo json_encode($response);
	}
	
	public function thankyou()
	{
		$this->load->view('thankyou');
	}
	
	public function success()
	{
		$this->load->view('success');
	}
	
	public function GetSyncData()
	{
		$user = $this->UserModel->GetSyncData();
		print_r(json_encode($user));
		
		return json_encode($user);
	}
	
	public function UpdateSyncData()
	{
		$userid = $this->input->post('UserID');
		$data = array(
			'Commitment' => $this->input->post('Commitment')
		);
		
		$result = $this->UserModel->UpdateSyncData($data, $userid);
		
		$url = $this->input->post('SignatureURL');
		$filename = substr($url, strrpos($url, '/') + 1);
		file_put_contents('images/signature/'.$filename, file_get_contents($url));
		
		echo json_encode(array("status"=>true,"message"=>"berhasil"));
	}
	
	public function Import()
	{
		$user = $this->UserModel->GetAll();
		
		$this->load->library("phpexcel/PHPExcel");
		$this->load->library("phpexcel/PHPExcel/IOFactory");
		$objPHPExcel = new PHPExcel();
		
		$row=2;
		$objPHPExcel->setActiveSheetIndex(0)
		
		->setCellValue('A1', 'UserID')
		->setCellValue('B1', 'UserName')
		->setCellValue('C1', 'NoTelp')
		->setCellValue('D1', 'Email')
		->setCellValue('E1', 'CompanyName')
		->setCellValue('F1', 'Cabang')
		->setCellValue('G1', 'Title')
		->setCellValue('H1', 'Commitment');
			
		foreach($user as $key => $item)	
		{
			$objPHPExcel->setActiveSheetIndex(0)
			->setCellValue('A'.$row, $item->UserID)
			->setCellValue('B'.$row, $item->UserName)
			->setCellValue('C'.$row, $item->NoTelp)
			->setCellValue('D'.$row, $item->Email)
			->setCellValue('E'.$row, $item->CompanyName)
			->setCellValue('F'.$row, $item->Cabang)
			->setCellValue('G'.$row, $item->Title)
			->setCellValue('H'.$row, $item->Commitment);
			
			$row++;
		}

		$objPHPExcel->getActiveSheet()->setTitle('Data User');
		$objWriter = IOFactory::createWriter($objPHPExcel, 'Excel2007');

		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="UserData.xlsx"');

		$objWriter->save("php://output");
		
	}
	
	public function Upload()
	{
		$token = $_GET['userid'];
		$nama_file = $token.'.jpg';
		$direktori = 'images/profile/';
		$target = $direktori.$nama_file;

		move_uploaded_file($_FILES['webcam']['tmp_name'], $target);
		
		return json_encode($user);
	}
}
