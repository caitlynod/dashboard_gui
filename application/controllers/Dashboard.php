<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}
	
	public function index(){
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$data['image'] = $this->session->userdata('image');
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigation');
		$this->load->view('navigation/chooseUser');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
		
	}

	public function login($id){
		$data['user'] = $this->Dash_model->getUser($id);
		$userArray = array(
			'name' => $data['user']['contacts_fname'], 
			'lname' => $data['user']['contacts_lname'],
			'image' => $data['user']['contacts_img']
			);
		$this->session->set_userdata($userArray);
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigation');
		$this->load->view('navigation/loginUser');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
		
	}

	public function volt(){
		$url = "http://api.openweathermap.org/data/2.5/weather?q=London,CA&appid=1879d157061bd7bc174974e0ace8ef69";
		$json=file_get_contents($url);
		$tempData=json_decode($json, true);
		$temp = $tempData['main']['temp'];
		$tempMin = $tempData['main']['temp_min'];
		$tempMax = $tempData['main']['temp_max'];
		$c = round($temp-273.15);
		$cMin = round($tempMin-273.15);
		$cMax = round($tempMax-273.15);
		$data['temp'] = $c;
		$data['min'] = $cMin;
		$data['max'] = $cMax;
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationOpen');
		$this->load->view('navigation/mainNav');
		$this->load->view('default');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
		
	}

}