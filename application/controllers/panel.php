<?php

class Panel extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('series_model');
		$this->load->model('anime_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$datos['user'] = $this->session->userdata('user');
		$datos['pass'] = $this->session->userdata('pass');

		$dropdownSeries['nombreSerie'] = $this->selectSeries();
		
		$ldSerie['infoSerie'] = array (
			'nombre' => '',
			'temporadas' =>'',
			'finalizada' =>''); //para inicializar

		$this->load->view('panel_view',$datos);

		$this->load->view('panels/serie_add');
		$this->load->view('panels/serie_delete',$dropdownSeries);
		$this->load->view('panels/serie_dropdown_update',$dropdownSeries);
		$this->load->view('panels/serie_update',$ldSerie);

		$this->load->view('panels/anime_add');
		$this->load->view('panels/anime_delete');
	}

	public function insertSerie()
	{
		/*$this->form_validation->set_rules('nombreAdd', 'nombreAdd', 'required|min_length[4]');
		$this->form_validation->set_rules('temporadaAdd', 'temporadaAdd', 'required|numeric');*/
	
		$dataSerie = array
		(
			'id' => $this->input->post('nombreAdd'),
			'nombre' => $this->input->post('nombreAdd'),
			'temporadas' => $this->input->post('temporadaAdd'),
			'id_usuario' => $this->session->userdata('user')
		);

		if ($this->input->post('finalizadaAdd') == 1) 
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

	//ANIME

	public function insertAnime()
	{
		$dataAnime = array
		(
			'id' => $this->input->post('nombreAnimeAdd'),
			'nombre' => $this->input->post('nombreAnimeAdd'),
			'capitulos' => $this->input->post('capAnimeAdd'),
			'hdd'=> $this->input->post('hddAnimeAdd'),
			'id_usuario' => $this->session->userdata('user')
		);


		$this->anime_model->insertAnime($dataAnime);
		redirect(base_url());	
	}

	private function createSerieID($nombre)
	{
		return "ser" . $nombre . $this->session->userdata('user');
	}

}

?>