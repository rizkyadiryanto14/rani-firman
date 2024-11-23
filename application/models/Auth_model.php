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
}
