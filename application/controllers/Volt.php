<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volt extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}

	public function index(){
		$data['title'] = 'Volt Status';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('statusCenter/status');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');

	}
}