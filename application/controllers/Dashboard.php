<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigation');
		$this->load->view('navigation/chooseUser');
		$this->load->view('default');
		$this->load->view('Templates/footer');
		
	}

	public function login(){
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigation');
		$this->load->view('navigation/loginUser');
		$this->load->view('default');
		$this->load->view('Templates/footer');
		
	}

	public function volt(){
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigation');
		$this->load->view('navigation/mainNav');
		$this->load->view('default');
		$this->load->view('Templates/footer');
		
	}

	public function navigation(){
		$data['title'] = 'Dashboard Navigation';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigationCenter/map');
		$this->load->view('Templates/footer');
	}
}