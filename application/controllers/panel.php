<?php

class Panel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('series_model');
	}

	public function index()
	{
		$datos['user'] = $this->session->userdata('user');
		$datos['pass'] = $this->session->userdata('pass');

		$dropdownSeries['nombreSerie'] = $this->selectSeries();


		$this->load->view('panel_view',$datos);
		$this->load->view('panels/serie_add');
		$this->load->view('panels/serie_delete',$dropdownSeries);
		//$this->load->view('panels/serie_update',$list);
	}

	public function insertSerie()
	{
		$dataSerie = array(
			'id' => $this->createSerieID(),
			'nombre' => $this->input->post('nombre'),
			'temporadas' => $this->input->post('temporada'),
			'id_usuario' => $this->session->userdata('user')
			);

		if ($this->input->post('finalizada') == 1) 
		{
			$dataSerie['finalizada'] = "Si";
		}
		else
		{
			$dataSerie['finalizada'] = "No";
		}

		$this->series_model->insertSerie($dataSerie);
		redirect(base_url());
	}


	private function selectSeries()//carga las series en dropdown
	{
		$data['nombre'] = $this->series_model->selectAllSeries();
		return $data['nombre'];
	}

	public function deleteSerie()//borra serie
	{
		$serie = $this->input->post('selectSerie');

		$this->series_model->deleteSerie($serie);
		redirect(base_url());
	}

	private function createSerieID()
	{
		$tiempo = strtotime('now');
		return "ser" . $tiempo . $this->session->userdata('user');
	}




}

?>