<?php
class DashModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function searchContacts($q){

  	$this->db->select('*');
	$this->db->from('tbl_contacts');
	$this->db->like('contacts_fname', $q, 'after');
	$this->db->limit(6);
	$sql = $this->db->get();
	return $sql->result_array();
	}

	public function contacts($limit, $offset){
		//$this->db->limit(6);
		$sql = $this->db->get('tbl_contacts', $limit, $offset);
		return $sql->result_array();
	}

	public function getTotalRows(){
		$total = $this->db->get('tbl_contacts')->num_rows();
		return $total;
	}

}
	