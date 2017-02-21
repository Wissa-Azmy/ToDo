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

	public function get_user_lists($user_id){
		$this->db->order_by('create_date', 'asc');
		$query = $this->db->get_where('lists', ['list_user_id' => $user_id]);
		return $query->result();
	}

	public function get_list($id){
		// $this->db->where('id', $id);
		$query = $this->db->get_where('lists', ['id' => $id]);
		// echo $this->db->last_query();  //TO ECHO THE MYSQL QUERY 
				
		return $query->row();	// WE USE ROW TO RETURN ONLY ONE RECORD
	}

	public function get_list_tasks($id, $completed){

	}

	public function create_list($data){
		$query = $this->db->insert('lists', $data);
		return $insert;
	}

	public function get_list_data($list_id){
		$query = $this->db->get_where('lists', array('id' => $list_id));
		return $query->row();
	}

	public function edit_list($list_id, $data){
		echo "list ID: " + $list_id;
		$this->db->where('id', $list_id);
		$this->db->update('lists', $data);
		$query = $this->db->get_where('lists', ['id' => $list_id]);


		// $updated_list = get_list_data($list_id);
		return $query->row();
	}

	public function delete_list($list_id){
		$query = $this->db->delete('lists', array('id' => $list_id));
		return;
	}

}