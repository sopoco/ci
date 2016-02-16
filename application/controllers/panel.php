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
		
		$ldSerie['infoSerie'] = array (
			'nombre' => '',
			'temporadas' =>'',
			'finalizada' =>'');

		$this->load->view('panel_view',$datos);
		$this->load->view('panels/serie_add');
		$this->load->view('panels/serie_delete',$dropdownSeries);
		$this->load->view('panels/serie_dropdown_update',$dropdownSeries);
		$this->load->view('panels/serie_update',$ldSerie);
	}

	public function insertSerie()
	{
		$dataSerie = array(
			'id' => $this->input->post('nombre'),
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

	public function updateSerie()
	{
		$data = array(
			'nombre' => $this->input->post('nombreEdit'),
			'temporadas' => $this->input->post('temporadaEdit'),
			'id_usuario' => $this->session->userdata('user')
			);

		if ($this->input->post('finalizadaEdit') == 1) 
		{
			$data['finalizada'] = "Si";
		}
		else
		{
			$data['finalizada'] = "No";
		}

		$this->series_model->updateSerie($data);
		redirect(base_url());
	}


	private function selectSeries()//carga las series en dropdown
	{
		$data['nombre'] = $this->series_model->selectAllSeries( $this->session->userdata('user') );
		return $data['nombre'];
	}

	public function deleteSerie()//borra serie
	{
		$serie = $this->input->post('selectSerie');
		$this->series_model->deleteSerie($serie);
		redirect(base_url());
	}

	public function loadSerie()
	{
		$datos['user'] = $this->session->userdata('user');
		$datos['pass'] = $this->session->userdata('pass');

		$dropdownSeries['nombreSerie'] = $this->selectSeries();

		$this->load->view('panel_view',$datos);
		$this->load->view('panels/serie_add');
		$this->load->view('panels/serie_delete',$dropdownSeries);
		$this->load->view('panels/serie_dropdown_update',$dropdownSeries);

		$ldSerie['infoSerie'] = $this->series_model->loadSerie($this->input->post('loadSerie'));

		$this->load->view('panels/serie_update',$ldSerie);
	}

	private function createSerieID($nombre)
	{
		return "ser" . $nombre . $this->session->userdata('user');
	}

}

?>