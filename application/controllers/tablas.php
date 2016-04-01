<?php

class Tablas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('series_model');
	}

	public function index()
	{

	}

	public function serieTable()
	{
		$datos['user'] = $this->session->userdata('user');
		$datos['pass'] = $this->session->userdata('pass');
		$tablas['series'] = $this->selectSeries();

		$this->load->view('serie_table',$tablas);
	}

	private function selectSeries()//carga table series
	{
		$data['series'] = $this->series_model->selectSeries( $this->session->userdata('user') );
		return $data['series'];
	}



}

?>