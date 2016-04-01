<?php

class Anime_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insertAnime($data)
	{
		$this->db->insert('anime', array(
			'id'=>$data['id'], 
			'nombre'=>$data['nombre'],
			'capitulos'=>$data['capitulos'], 
			'hdd'=>$data['hdd'],
			'id_usuario'=>$data['id_usuario']));
	}
}

?>
