<?php

class Series_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function insertSerie($data)
	{
		$this->db->insert('serie', array('id'=>$data['id'], 'nombre'=>$data['nombre'], 'temporadas'=>$data['temporadas'], 'finalizada'=>$data['finalizada'], 'id_usuario'=>$data['id_usuario']  ));
	}

}

?>