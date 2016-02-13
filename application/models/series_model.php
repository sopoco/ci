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
        	//return $query->row_array(); 
        }
        else 
        {
        	return NULL;
        }
	}

	function loadSerie($nombreSerie)
	{
		$this->db->select('*');
		$this->db->from('serie');
		$this->db->where('nombre',$nombreSerie);
		$query = $this->db->get();

		if ($query->num_rows() > 0)
        { 
        	return $query->row_array();
        }
        else 
        {
        	return NULL;
        }
	}

	function deleteSerie($nombre)
	{
    	$this->db->where('nombre', $nombre);
    	$this->db->delete('serie');
	}








}

?>