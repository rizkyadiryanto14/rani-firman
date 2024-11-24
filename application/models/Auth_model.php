<?php

/**
 * @property $db
 */

class Auth_model extends CI_Model
{
	public function getUsers()
	{
		return $this->db->get('users')->result();
	}

	public function getUserByUsername($username)
	{
		return $this->db->get_where('users', array('username' => $username))->row_array();
	}

	public function insert($data)
	{
		return $this->db->insert('users', $data);
	}

	function make_query()
	{
		$this->db->select('users.*')
			->from("users");
		if (isset($_POST["search"]["value"])) {
			$this->db->like("username", $_POST["search"]["value"]);
			$this->db->or_like("email", $_POST["search"]["value"]);
		}
		if (isset($_POST["order"])) {
			$this->db->order_by($_POST['order']['0']['column'], $_POST['order']['0']['dir']);
		} else {
			$this->db->order_by('id_users', 'DESC');
		}
	}

	function make_datatables()
	{
		$this->make_query();
		if ($_POST["length"] != -1) {
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		if ($query === false) {
			// Query gagal, handle error di sini
			return false;
		}

		return $query->result();
	}

	function get_filtered_data()
	{
		$this->make_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	function get_all_data()
	{
		$this->db->select("*");
		$this->db->from("users");
		return $this->db->count_all_results();
	}
}
