<?php
/**
* 
*/
class List_model extends CI_Model
{
	
	public function get_lists(){
		$query = $this->db->get('lists');
		return $query->result(); 	// WE USE RESULT TO RETURN ALL THE RECORDS
	}
	public function get_list($id){
		$query = $this->db->get('lists', array('id' => $id));
		return $query->row();	// WE USE ROW TO RETURN ONLY ONE RECORD
	}
	public function get_list_tasks($id, $completed){

	}
	public function create_list($data){
		$query = $this->db->insert('lists', $data);
		return $insert;
	}

	public function get_list_data($list_id){
		$query = $this->db->get('lists', array('id' => $list_id));
		return $query->row();
	}

}