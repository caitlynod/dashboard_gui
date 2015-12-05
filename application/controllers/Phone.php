<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phone extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Dash_model');
	}
	public function index(){
		$data['title'] = 'Phone';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('phoneCenter/phone');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/phoneFooter');

	}

	public function contacts($offset = null){
		$data['title'] = 'Phone';
		$data['name'] = $this->session->userdata('name');
		$data['total'] = $this->Dash_model->getTotalRows();
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/phone/contacts/';
		$config['total_rows'] = $this->Dash_model->getTotalRows();
		$config['per_page'] = 4;
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
		$this->load->view('Templates/phoneFooter');

	}

	public function keypad(){
		$data['title'] = 'Phone';
		$data['name'] = $this->session->userdata('name');
		$this->load->view('Templates/header', $data);
		$this->load->view('navigation/navigationClosed');
		$this->load->view('navigation/mainNav');
		$this->load->view('phoneCenter/numkeys');
		$this->load->view('Templates/footer');
		$this->load->view('Templates/phoneFooter');

	}

	public function contactView($offset = null){
		$data['title'] = 'Phone';
		$data['name'] = $this->session->userdata('name');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'index.php/phone/contactSearch/';
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
		$this->load->view('Templates/phoneFooter');
	}



	public function contactsSearch($q = null){
		$contactList = $this->Dash_model->searchContacts($q);
		$contacts = json_encode($contactList);
		echo $contacts;
	}

}