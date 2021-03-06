<?php
class Dash_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function searchContacts($q){

  	$this->db->select('*');
	$this->db->from('tbl_contacts');
	$this->db->order_by('contacts_fname');
	$this->db->like('contacts_fname', $q, 'after');
	$this->db->limit(6);
	$sql = $this->db->get();
	return $sql->result_array();
	}

	public function contacts($q,$limit, $offset){
		//$this->db->limit(4);
		$this->db->order_by('contacts_fname');
		$sql = $this->db->get('tbl_contacts', $limit, $offset);
		return $sql->result_array();
	}

	public function getTotalRows(){
		$total = $this->db->get('tbl_contacts')->num_rows();
		return $total;
	}

	public function getUser($id){
		$this->db->order_by('contacts_fname');
		$sql = $this->db->get_where('tbl_contacts', array('contacts_id'=>$id));
		return $sql->row_array();
	}

	public function searchPlaces($q){
		$this->db->select('*');
		$this->db->from('tbl_search');
		$this->db->order_by('search_place');
		$this->db->like('search_place', $q, 'after');
		$sql = $this->db->get();
		return $sql->result_array();
	}

}
	