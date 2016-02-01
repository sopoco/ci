<?php

class Usuarios_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login($username,$password)
	{
		$this->db->where('usuario',$username);
		$this->db->where('pass',$password);
		$query = $this->db->get('usuario');

		if ($query->num_rows() > 0) 
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
}
?>