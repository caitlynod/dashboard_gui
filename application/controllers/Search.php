<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}

	public function index(){
		$data['title'] = 'Search';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('searchCenter/searchHeader');
		$this->load->view('searchCenter/voiceOn');
		$this->load->view('searchCenter/searchOff');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/searchFooter');

	}

	public function manual(){
		$data['title'] = 'Search';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('searchCenter/searchHeader');
		$this->load->view('searchCenter/voiceOff');
		$this->load->view('searchCenter/searchOn');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/searchFooter');

	}
	
	public function placeSearch($q = null){
		$placeList = $this->Dash_model->searchPlaces($q);
		$places = json_encode($placeList);
		echo $places;
	}
}