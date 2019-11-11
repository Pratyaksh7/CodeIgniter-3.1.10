<?php

Class Login extends MY_Controller 
{
	public function index()
	{	
		if( $this->session->userdata('admin_id') )
			return redirect('admin/admin_dashboard');

		$this->load->helper('form');

		$this->load->view('admin/admin_login');
	}
	public function index2()
	{
		$this->load->helper('form');
		$this->load->view('public/dashboard');
	}

	public function admin_login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

		if($this->form_validation->run('admin_login') ){

			$username= $this->input->post('username');
			$password= $this->input->post('password');
			
			$this->load->model('loginmodel');
			$login_id= $this->loginmodel->admin_login_valid( $username, $password) ;
			
			if( $login_id)
			{
				$this->session->set_userdata('admin_id', $login_id );  //to set the user on session-> set_userdata()

				return redirect('admin/admin_dashboard');
				
			}
			else{
					$this->session->set_flashdata('Login_Failed','Invalid Username/Password');
					return redirect('login');
				} 
			
		}
		else {
			//failed
			$this->load->view('admin/admin_login');


		}
	}

	public function admin_logout()
	{
		$this->session->unset_userdata('admin_id');
		return redirect('login');
	}

	public function user_login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email|trim');
		$this->form_validation->set_rules('password','Password','required');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if( $this->form_validation->run() )
		{
			$email= $this->input->post('email');
			$password= $this->input->post('password');
			
			$this->load->model('loginmodel');

			$user_login_id = $this->loginmodel->user_login_valid( $email, $password);	
			if( $user_login_id ) 
			{
				$this->session->set_userdata('user_id', $user_login_id);
				 return redirect('user');
			
			}
			else{
				echo "Password not Match";
			}

		}
		else{
			$this->load->view('public/userlogin');
		}
	}

	public function user_logout()
	{
		
	}
}