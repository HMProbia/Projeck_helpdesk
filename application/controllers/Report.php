<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//chk admin status
		if($this->session->userdata('admin_status') !=1){
				redirect('login/logout','refresh');
		}
		$this->load->model('data_model');
	}

	public function index()
	{
		$data['queryreport']=$this->data_model->countbycasetype();
		$data['querystatus']=$this->data_model->countbycasestatus();
		$data['querycaseuserit']=$this->data_model->countcase_UserIT();
		$this->load->view('template/header');
		$this->load->view('backend/report_view',$data);
		$this->load->view('template/footer');
	}

	public function listbystatus($status_id)
	{
		$data['query']=$this->data_model->by_status($status_id);
		$data['qstatus1']=$this->data_model->status1();
		$data['qstatus2']=$this->data_model->status2();
		$data['qstatus3']=$this->data_model->status3();
		$data['qstatus4']=$this->data_model->status4();
		$this->load->view('template/header');
		$this->load->view('backend/jobs_list',$data);
		$this->load->view('template/footer');
	}
	


}