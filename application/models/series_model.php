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
		$this->db->insert('serie', array(
			'id'=>$data['id'], 
			'nombre'=>$data['nombre'],
			'temporadas'=>$data['temporadas'], 
			'finalizada'=>$data['finalizada'],
			'id_usuario'=>$data['id_usuario']));
	}

	function selectAllSeries()
	{
		$this->db->select('nombre');
		$this->db->from('serie');
		$query = $this->db->get();

		if ($query->num_rows() > 0)
        { 
        	return $query->result_array();
        }
        else 
        {
        	return NULL;
        }
	}

	/*function loadSerie($nombreSerie)
	{
		$this->db->select('nombre','temporadas','finalizada')
		$this->db->from('serie');
		$this->db->where('nombre',$nombreSerie);
		$query = $this->db->get();

		if ($query->num_rows() > 0)
        { 
        	return $query->result_array();
        }
        else 
        {
        	return NULL;
        }
	}*/








}

?>