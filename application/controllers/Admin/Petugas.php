<?php

/**
 * @property $Petugas_model
 */

class Petugas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Petugas_model');
	}

	public function index()
	{
		$this->load->view('admin/petugas/list');
	}

	public function get_data_petugas(): void
	{
		$fetch_data = $this->Petugas_model->make_datatables();
		if (is_array($fetch_data)) {
			$data = array();
			$start = $_POST['start'];
			$no = $start + 1;
			foreach ($fetch_data as $row) {
				$sub_array = array();
				$sub_array[] = $no++;
				$sub_array[] = $row->id_user;
				$sub_array[] = $row->nama_lengkap;
				$sub_array[] = $row->alamat;
				$sub_array[] = $row->jenis_kelamin;
				$sub_array[] = $row->tanggal_lahir;
				$sub_array[] = '<a href="' . site_url('file/update_view/' . $row->id_petugas) . '" class="btn btn-info btn-xs update"><i class="fa fa-edit"></i></a>
                     <a href="' . site_url('file/delete/' . $row->id_petugas) . '" onclick="return confirm(\'Apakah anda yakin?\')" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></a>';
				$data[] = $sub_array;
			}

			$output = array(
				"draw" => intval($_POST["draw"]),
				"recordsTotal" => $this->Petugas_model->get_all_data(),
				"recordsFiltered" => $this->Petugas_model->get_filtered_data(),
				"data" => $data,
			);
			echo json_encode($output);
		} else {
			echo "Error: Fetch data is not an array.";
		}
	}
}
