<?php

/**
 * @property $File_model
 */

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('File_model');
	}

	public function index()
	{
		$this->load->view('home/landing');
	}

	public function informasi_public()
	{
		$data['file'] = $this->File_model->getAllFile();
		$this->load->view('home/informasi_public', $data);
	}

	public function visi_misi()
	{
		$this->load->view('home/visi_misi');
	}

	public function struktur_bawaslu()
	{
		$this->load->view('home/struktur_bawaslu');
	}

	public function dasar_hukum()
	{
		$this->load->view('home/dasar_hukum');
	}
}
