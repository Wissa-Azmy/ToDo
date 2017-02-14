<?php
class Lists extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		if(!$this->session->userdata('logged_in')){
			$this->session->set_flashdata('no_access', 'Sorry, you are not logged in');
			redirect('home/index');
		}
	}


	public function index(){
		$user_id = $this->session->userdata('user_id');

		$data['lists'] = $this->List_model->get_lists();
		//LOAD VIEW AND LAYOUT
		$data['main_content'] = 'lists/index';
		$this->load->view('layouts/main', $data);
	}



	public function show($list_id){
		$data = [];
		$data['list'] = $this->List_model->get_list($list_id);
		$data['completed_tasks'] = $this->List_model->get_list_tasks($list_id, true); 
		$data['uncompleted_tasks'] = $this->List_model->get_list_tasks($list_id, false);  // TRUE & FALSE above are for the boolean completed field 

		$data['main_content'] = 'lists/show';


		$this->load->view('layouts/main', $data);

	}



	public function create(){
		$this->form_validation->set_rules('list_name','List Name','trim|required');
		$this->form_validation->set_rules('list_body','List Body', 'trim');

		if($this->form_validation->run() == false){
			//Load view and layout
			$data['main_content'] = 'lists/add_list';
			$this->load->view('layouts/main', $data);
		} else {
			//Post values to array
			$data = [
				'list_name' => $this->input->post('list_name'),
				'list_body' => $this->input->post('list_body'),
				'list_user_id' => $this->session->userdata('user_id')
			];

			if($this->List_model->create_list($data)){
				$this->session->set_flashdata('list_created', 'Your task list has been created');
				//Redirect to index page with the flashdata above
				redirect('lists/index'); // NOT WORKING BCOZ REDIRECTION IS HANDLED BY AJAX
			}
		}
	}



	public function edit($list_id){
		$this->form_validation->set_rules('list_name', 'List Name', 'trim|required');
		$this->form_validation->set_rules('list_body', 'List Body', 'trim');

		if($this->form_validation->run() == false){
			//Get the current list information
			// $data['this_list'] = $this->List_model->get_list_data($list_id);
			//Load view and layout
			$data['main_content'] = 'lists/show/'+ $list_id;
			$this->load->view('layouts/main', $data);
		} else {
			$data = [
				'list_name' => $this->input->post('list_name'),
				'list_body' => $this->input->post('list_body'),
				'list_user_id' => $this->session->userdata('user_id')
			];
		}
		if($this->List_model->edit_list($list_id, $data)){
				$this->session->set_flashdata('list_updated', 'Your task list has been updated successfully');
				//Redirect to index page with the flashdata above
				redirect('lists/show'+ $list_id); // NOT WORKING BCOZ REDIRECTION IS HANDLED BY AJAX
			}
	}



	public function delete($list_id){
		$this->List_model->delete_list($list_id);
		$this->session->set_flashdata('list_deleted', 'Your list has been deleted');
		redirect('lists/index');
	}
}