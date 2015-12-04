<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}
	
	public function index(){
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigation');
		$this->load->view('navigation/chooseUser');
		$this->load->view('Templates/footer');
		
	}

	public function login($id){
		$data['user'] = $this->Dash_model->getUser($id);
		date_default_timezone_set('America/Toronto');
		$data['title'] = 'Dashboard';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigation');
		$this->load->view('navigation/loginUser');
		$this->load->view('Templates/footer');
		
	}

	public function volt($id = null){
		$id = $this->session->userdata('contacts_id');
		$data['id'] = $id;
		$data['user'] = $this->Dash_model->getUser($id);
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
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationOpen');
		$this->load->view('navigation/mainNav');
		$this->load->view('default');
		$this->load->view('Templates/footer');
		
	}

	public function phone(){
		$data['title'] = 'Phone';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('phone');
		$this->load->view('Templates/footer');

	}

	public function contacts($offset = null){
		$data['title'] = 'Contact Search';
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost:8888/dashboard_gui/index.php/dashboard/contacts/';
		$config['total_rows'] = $this->Dash_model->getTotalRows();
		$config['per_page'] = 6;
		$config['num_links']  = 0;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['display_pages'] = FALSE;
		$config['prev_link'] = '<i class="fa fa-arrow-left rightArrow"></i>';
		$config['next_link'] = '<i class="fa fa-arrow-right leftArrow"></i>';
		$this->pagination->initialize($config);

		$data['contacts'] = $this->Dash_model->contacts(NULL,$config['per_page'],$offset);
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('phoneCenter/contacts');
		$this->load->view('Templates/footer');

	}

	public function keypad(){
		$data['title'] = 'Contact Search';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('phoneCenter/numkeys');
		$this->load->view('Templates/footer');

	}

	public function contactSearch($offset = null){
		$data['title'] = 'Contact Search';
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost:8888/dashboard_gui/index.php/dashboard/contactSearch/';
		$config['total_rows'] = $this->Dash_model->getTotalRows();
		$config['per_page'] = 6;
		$config['num_links']  = 0;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['display_pages'] = FALSE;
		$config['prev_link'] = '<i class="fa fa-arrow-left rightArrow"></i>';
		$config['next_link'] = '<i class="fa fa-arrow-right leftArrow"></i>';
		$this->pagination->initialize($config);

		$data['contacts'] = $this->Dash_model->contacts(NULL,$config['per_page'],$offset);
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('phoneCenter/search');
		$this->load->view('Templates/footer');

	}

	public function navigation(){
		$data['title'] = 'Dashboard Navigation';
		$this->load->view('Templates/header', $data);
		$this->load->view('navigationCenter/map');
		$this->load->view('Templates/footer');
	}

	public function contactsSearch($q = null){
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost:8888/dashboard_gui/index.php/dashboard/contactSearch/';
		$config['total_rows'] = $this->Dash_model->getTotalRows();
		$config['per_page'] = 6;
		$config['num_links']  = 0;
		$config['first_link'] = FALSE;
		$config['last_link'] = FALSE;
		$config['display_pages'] = FALSE;
		$config['prev_link'] = '<i class="fa fa-arrow-left rightArrow"></i>';
		$config['next_link'] = '<i class="fa fa-arrow-right leftArrow"></i>';
		$this->pagination->initialize($config);
		$contactList = $this->Dash_model->contacts($q,$config['per_page'],$offset);
		$contacts = json_encode($contactList);
		echo $contacts;
	}
}