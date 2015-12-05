<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_media extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}
	

	public function index(){
		
		$data['title'] = 'Social Media';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('socialCenter/social');
		$this->load->view('Templates/footer');

	}
}