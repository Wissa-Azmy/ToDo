<?php

class Task_model extends CI_Model{
	public function get_user_tasks($user_id){
		$this->db->order_by('create_date', 'desc');
		$query = $this->db->get_where('tasks', ['user_id' => $user_id]);
		return $query->result();
	}

	public function add_task($data){
		$query = $this->db->insert('tasks', $data);
		return $query->row();
	}
}