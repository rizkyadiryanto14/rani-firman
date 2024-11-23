<?php

/**
 * @property $load
 * @property $input
 * @property $Auth_model
 */

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function login()
	{
		 $username = $this->input->post('username');
		 $password = $this->input->post('password');

		 $get_users = $this->Auth_model->getUserByUsername($username);

		 if ($get_users){

		 }
	}
}
