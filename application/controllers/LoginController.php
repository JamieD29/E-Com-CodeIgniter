<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
  * @property LoginModel $LoginModel
  * @property form_validation $form_validation
  * @property input $input
    * @property session $session
  */
class LoginController extends CI_Controller {


	public function __construct(){
		parent::__construct();
		if($this->session->userdata('LoggedIn')){
            redirect(base_url('/dashboard'));
        }
		$this->load->library(['form_validation']); // already library

	}
	public function index()
	{
		 $this->load->view('template/header');
		 $this->load->view('login/index');
		$this->load->view('template/footer');
	}

	public function login(){
		$this->form_validation->set_rules('email','Email','trim|required', ['required' =>'You must provide a %s']);
		$this->form_validation->set_rules('password','Password','trim|required', ['required' =>'You must provide a %s']);

		if( $this->form_validation->run()){
			$this->load->model('LoginModel');

			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$result = $this->LoginModel->checkLogin($email, $password);

			if(count($result)>0){
				$session_array = [
					'id' => $result[0]->id,
					'username' => $result[0]->username,
					'email' => $result[0]->email	
				];
				$this->session->set_userdata('LoggedIn',$session_array);
				$this->session->set_flashdata('success', 'Login Successfully');
				redirect(base_url('dashboard'));
			}else{
				$this->session->set_flashdata('error', 'Wrong Email or Password. Plz try again!!');
				redirect(base_url('login'));
			}

		}else{
			$this->index();
		}
	}
}
