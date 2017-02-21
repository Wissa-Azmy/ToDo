<?php

class Task_model extends CI_Model{
	public function get_user_tasks($user_id){
		$query = $this->db->get_where('tasks', ['user_id' => $user_id]);
		return $query->result();
	}
}