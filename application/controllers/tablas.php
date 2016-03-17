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
		$datos['series'] = $this->selectSeries();

		$this->load->view('serie_table',$datos);
	}

	private function selectSeries()//carga las series en dropdown
	{
		$data['series'] = $this->series_model->selectSeries( $this->session->userdata('user') );
		return $data['series'];
	}



}

?>