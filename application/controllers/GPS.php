<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GPS extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}

	public function index(){
		$data['title'] = 'GPS';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('Templates/footer');

	}
}