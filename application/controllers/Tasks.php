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


	public function add(){
		$this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');

		if($this->form_validation == null){

		} else {
			$data =['user_id' => $this->session->userdata('user_id'),
					'list_id' => $this->input->post('list_id'),
					'task_name' => $this->input->post('task_name'),
					'task_body' => $this->input->post('task_body')];


			if($this->Task_model->add_task($data)){

			}
		}
	}
}
