<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
		public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigationCenter/map');
		$this->load->view('Templates/footer');
	}
}