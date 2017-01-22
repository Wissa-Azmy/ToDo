<?php
/**
* 
*/
class User extends CI_Model
{
	
	public function create_member()
	{
		$enc_password = md5($this->input->post('password'));
		$data = [
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $enc_password
		];

		$insert = $this->db->insert('users', $data);
		// $return $insert;

	}
}