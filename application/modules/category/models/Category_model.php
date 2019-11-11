<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function get($arr=null, $limit=null, $offset=null){
		return $this->db->get_where('category', $arr, $limit, $offset);
	}

	public function insert($data){
		$this->db->insert('category', $data);
		$id = $this->db->insert_id();
		$status = $this->db->affected_rows();
		return ($status == 0) ? FALSE : $id; 
	}

	public function update($data, $condition){
		return $this->db->update('category', $data, $condition);
	}

	

}

/* End of file Category_model.php */
/* Location: ./application/modules/category/models/Category_model.php */