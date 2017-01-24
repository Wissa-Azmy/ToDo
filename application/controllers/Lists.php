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

	public function show($id){
		$data['list'] = $this->List_model->get_list($id);
		$data['completed_tasks'] = $this->List_model->get_list_tasks($id, true);
		$data['uncompleted_tasks'] = $this->List_model->get_list_tasks($id, false);

		$data['main_content'] = 'lists/show';
		$this->load->view('layouts/main', $data);

	}
}