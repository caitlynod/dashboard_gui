<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Media extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}

	public function index(){
		$data['title'] = 'Media Center';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('mediaCenter/media');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
	}

	public function radio(){
		$data['title'] = 'Media Center';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('mediaCenter/radio');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
	}

	public function favourite(){
		$data['title'] = 'Media Center';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('mediaCenter/favourite');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
	}

	public function input(){
		$data['title'] = 'Media Center';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('mediaCenter/input');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
	}

	public function spotify(){
		$data['title'] = 'Media Center';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('mediaCenter/spotify');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
	}
	public function satellite(){
		$data['title'] = 'Media Center';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('mediaCenter/satellite');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
	}

	public function satellitestation(){
		$data['title'] = 'Media Center';
		$data['name'] = $this->session->userdata('name');
		$data['lname'] = $this->session->userdata('lname');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('mediaCenter/satelliteStation');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/dashFooter');
	}

}