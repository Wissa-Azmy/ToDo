<?php
class Tasks extends CI_Controller{
	public function index(){
		if($this->session->userdata('logged_in')){
			$user_id = $this->session->userdata('user_id');
			$data['tasks'] = $this->Task_model->get_user_tasks($user_id);
		}

		$data['main_content'] = 'home';
		$this->load->view('layouts/main', $data);
	}
}