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

	function selectAllSeries($usuario)
	{
		$this->db->select('nombre');
		$this->db->from('serie');
		$this->db->where('id_usuario',$usuario);
		$this->db->order_by("nombre", "asc"); 
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

	function getID($nombreSerie)
	{
		$this->db->select('id');
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

	function updateSerie($update)
	{
		$data = array(
               'nombre' => $update['nombre'],
               'temporadas' => $update['temporadas'],
               'finalizada' => $update['finalizada']
            ); 

		$this->db->where('id', $update['nombre']);
		$this->db->where('id_usuario', $update['id_usuario']);
		$this->db->update('serie', $data); 
	}

	function selectSeries($usuario)
	{
		$this->db->select('nombre, temporadas, finalizada');
		$this->db->from('serie');
		$this->db->where('id_usuario',$usuario);
		$this->db->order_by("nombre", "asc"); 
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
}

?>