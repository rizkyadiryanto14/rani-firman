<?php

/**
 * @property $input
 * @property $Petugas_model
 * @property $File_model
 * @property $session
 */

class Petugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Petugas_model');
		$this->load->model('File_model');
	}

	public function index()
	{
		$data['petugas']	= $this->Petugas_model->getPetugasByIdUser($this->session->userdata('id_users'));
		$this->load->view('users/profile/list', $data);
	}

	public function file()
	{
		$this->load->view('users/file/list');
	}

	/**
	 * @return void
	 */
	public function profile():void
	{
		$data = [
			'id_user'		=> $this->session->userdata('id_users'),
			'nama_lengkap'	=> $this->input->post('nama_lengkap'),
			'alamat'		=> $this->input->post('alamat'),
			'jenis_kelamin'	=> $this->input->post('jenis_kelamin'),
			'tanggal_lahir'	=> $this->input->post('tanggal_lahir'),
		];

		$insert_petugas = $this->Petugas_model->insert($data);

		if ($insert_petugas) {
			$this->session->set_flashdata('success', 'Berhasil menambahkan data petugas');
		}else {
			$this->session->set_flashdata('error', 'Gagal menambahkan data petugas');
		}
		redirect(base_url('dashboard'));
	}

	public function get_data_file(): void
	{
		$fetch_data = $this->File_model->make_datatables();
		if (is_array($fetch_data)) {
			$data = array();
			$start = $_POST['start'];
			$no = $start + 1;
			foreach ($fetch_data as $row) {
				$sub_array = array();
				$sub_array[] = $no++;
				$sub_array[] = $row->kategori;
				$sub_array[] = $row->nama_file;
				$sub_array[] = '<a href="' . base_url($row->file) . '" class="btn btn-danger btn-xs" target="_blank">Lihat File</a>';
				if ($row->status == 1) {
					$sub_array[] = '<i class="fa fa-check" style="color: green;"></i>';
				} else {
					$sub_array[] = '<i class="fa fa-times" style="color: red;"></i>';
				}
				$sub_array[] = $row->keterangan;
				$sub_array[] = '<a href="' . site_url('admin/edit/' . $row->id_file) . '" class="btn btn-info btn-xs update"><i class="fa fa-edit"></i></a>
                     <a href="' . site_url('file/delete/' . $row->id_file) . '" onclick="return confirm(\'Apakah anda yakin?\')" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></a>';
				$data[] = $sub_array;
			}

			$output = array(
				"draw" => intval($_POST["draw"]),
				"recordsTotal" => $this->File_model->get_all_data(),
				"recordsFiltered" => $this->File_model->get_filtered_data(),
				"data" => $data,
			);
			echo json_encode($output);
		} else {
			echo "Error: Fetch data is not an array.";
		}
	}
}
