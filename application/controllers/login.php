<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//conservar sesion iniciada
		if ($this->session->userdata('user')) 
		{
			redirect('panel');
		}	

		if (isset($_POST['pass'])) 
		{
			$this->load->model('usuarios_model');
			if ($this->usuarios_model->login($_POST['user'],$_POST['pass']))
			{
				$this->session->set_userdata('user',$_POST['user']);
				
				redirect('panel');
			}
			else
			{
				echo'
		          <div class="alert alert-danger">
					  <strong>Error Login!</strong> Usuario y/o Contraseña Incorrecta 
				  </div>';
			}
		}
		
		$this->load->view('login_view');
		



	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}


?>