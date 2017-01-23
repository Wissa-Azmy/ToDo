<?php
class Users extends CI_Controller{
	public function register(){
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[50]|min_length[2]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[50]|min_length[2]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[100]|min_length[10]|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[50]|min_length[2]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[50]|min_length[6]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'trim|required|max_length[50]|min_length[6]|matches[password]');

		if($this->form_validation->run() == FALSE){
			$data['main_content'] = 'users/register_view';
			$this->load->view('layouts/main', $data);
		} else {
			if($this->User->create_member()){
				$this->session->set_flashdata('registered', 'You have registered successfully');
				redirect('http://localhost/ToDo/index.php/home/index');
			}

		}
	}

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[50]|min_length[2]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[50]|min_length[6]');
		
		if($this->form_validation->run() == FALSE){

		}	else{
			// $username = $this->input->post('username');
			// $password = $this->input->post('password');
			$username = 'wissa';
			$password = 'password';

			$user_id = $this->User->login_user($username, $password);

			if($user_id){
				$user_data = [
					'user_id'	=> $user_id,
					'username'	=> $username,
					'logged_in'	=> true
				];

				$this->session->set_userdata($user_data);

				$this->session->set_flashdata('login_success', 'You have Logged in successfully');
				redirect('http://localhost/ToDo/index.php/home/index');
			} else{
				// SET ERROR 
				$this->session->set_flashdata('login_failed', 'Login Failed check your username and password');
				redirect('http://localhost/ToDo/index.php/home/index');
			}
		}	
	}
}