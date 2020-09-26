<?php

class Agenda extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('agenda_model');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		$data['citas'] = $this->agenda_model->obtener_agendas();
		$data['title'] = 'Listado de agendas';

		$this->load->view('templates/header', $data);
		$this->load->view('agenda/index', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$data['title'] = 'Listado de agendas';

		$datosFormulario = array('nombre' => $this->input->post('name'),
								 'apellido' =>  $this->input->post('apellido'),
								 'cedula' =>  $this->input->post('cedula'),
								 'fecha_nacimiento' =>  $this->input->post('nacimiendo'),
								 'ciudad' =>  $this->input->post('ciudad'),
								 'barrio' =>  $this->input->post('barrio'),
								 'celular' =>  $this->input->post('celular'),
								 'fecha_cita' =>  $this->input->post('cita'),
								 'hora_cita' =>  $this->input->post('hora')
			);


		$cantidad =  $this->agenda_model->guardar_citas($datosFormulario);
		$data['citas'] = $this->agenda_model->obtener_agendas();
		$data['cantidad'] = $cantidad;
		$this->load->view('templates/header', $data);
		$this->load->view('agenda/index', $data);
		$this->load->view('templates/footer');
	}

	public function form(){
		$this->load->view('templates/header');
		$this->load->view('agenda/agenda');
		$this->load->view('templates/footer');
	}
}
