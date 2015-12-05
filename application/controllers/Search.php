<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}
	
	public function placeSearch($q = null){
		$placeList = $this->Dash_model->searchPlaces($q);
		$places = json_encode($placeList);
		echo $places;
	}
}