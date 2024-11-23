<?php

/**
 * @property $File_model
 */

class File extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('File_model');
	}

	public function index()
	{
		$this->load->view('admin/file/list');
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
				$sub_array[] = '<a href="' . site_url('file/delete/' . $row->id_file) . '"  class="btn btn-danger btn-xs delete">Lihat File</a>';
				if ($row->status == 1) {
					$sub_array[] = '<i class="fa fa-check" style="color: green;"></i>';
				} else {
					$sub_array[] = '<i class="fa fa-times" style="color: red;"></i>';
				}
				$sub_array[] = '<a href="' . site_url('file/update_view/' . $row->id_file) . '" class="btn btn-info btn-xs update"><i class="fa fa-edit"></i></a>
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
