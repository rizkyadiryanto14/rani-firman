<?php

/**
 * @property $load
 * @property $input
 * @property $Auth_model
 * @property $session
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

	/**
	 * @return void
	 */
	public function login():void
	{
		 $username = $this->input->post('username');
		 $password = $this->input->post('password');

		 $get_users = $this->Auth_model->getUserByUsername($username);

		 if ($get_users){
			if (password_verify($password, $get_users['password'])){
				$session_data = [
					'id_users' => $get_users['id_users'],
					'username'	=> $get_users['username'],
					'role'		=> $get_users['role'],
				];
				$this->session->set_userdata($session_data);
				redirect(base_url('dashboard'));
			}else {
				$this->session->set_flashdata('error', 'username atau password salah');
			}
			redirect(base_url('datacenter'));
		 }else {
			 $this->session->set_flashdata('error', 'user tidak ditemukan, silahkan hubungi administrator');
		 }
		 redirect(base_url('Home'));
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Home'));
	}
}
