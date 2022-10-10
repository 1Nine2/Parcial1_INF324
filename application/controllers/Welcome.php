<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function adminRegister()
	{
		$this->load->model('queries');
		$roles = $this->queries->getRoles();
		$this->load->view('register',['roles' => $roles]);
	}
	public function adminSignup(){
		$this->form_validation->set_rules('username', 'Username','Required');
		$this->form_validation->set_rules('email', 'Email','Required');
		$this->form_validation->set_rules('gender', 'Genero','Required');
		$this->form_validation->set_rules('role_id', 'Rol','Required');
		$this->form_validation->set_rules('password', 'Contraseña','Required');
		$this->form_validation->set_rules('confpwd', 'Contraseña de nuevo','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$this->load->view('dashboard');

		}
		else{
			$this->adminRegister();
		}



	}
	public function dashboard(){
		$this->load->model('queries');
		$users = $this->queries->ViewAll();
		echo '<prep>';
		print_r($users);
		echo '</prep>';
		exit();
		$this->load->view('dashboard');

	}
	public function login()
	{
		$this->load->view('login');
	}

	public function adminSignin(){
		$this->form_validation->set_rules('username', 'Username','Required');
		$this->form_validation->set_rules('email', 'Email','Required');
		$this->form_validation->set_rules('password', 'Contraseña','Required');
		$this->form_validation->set_rules('confpwd', 'Contraseña de nuevo','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$this->load->view('dashboard');
		}
		else{
			$this->adminRegister();
		}
	}

	public function AddPerson(){
		$this->load->view('AddPerson');
	}
	public function Change(){
		$this->load->view('change');
	}
	public function delete(){
		$this->load->view('delete');
	}
	public function prom(){
		$this->load->view('prom');
	}
	
	public function inf(){
		$this->load->view('inf');
	}
	public function mate(){
		$this->load->view('mate');
	}
	public function bio(){
		$this->load->view('bio');
	}
	public function createPerson(){
		$this->form_validation->set_rules('name', 'Nombre','Required');
		$this->form_validation->set_rules('ci', 'CI','Required');
		$this->form_validation->set_rules('fechan', 'Fecha de Nacimiento','Required');
		$this->form_validation->set_rules('deptoc', 'Codigo de Departamento','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$data =$this->input->post();
			$this->load->model('queries');
			if($this->queries->makePerson($data)){
				echo 'Persona Creada';
			}
			else{
				echo 'Persona no Creada';
			}
		}
		else{
			echo validation_errors();
		}
		return redirect('Welcome/dashboard');

	}

	public function edit($ci){
		
		$this->form_validation->set_rules('name', 'Nombre','Required');
		$this->form_validation->set_rules('ci', 'CI','Required');
		$this->form_validation->set_rules('fechan', 'Fecha de Nacimiento','Required');
		$this->form_validation->set_rules('deptoc', 'Codigo de Departamento','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$data =$this->input->post();
			$this->load->model('queries');
			if($this->queries->editPerson($data)){
				echo 'Persona Creada';
			}
			else{
				echo 'Persona no Creada';
			}
		}
		else{
			echo validation_errors();
		}
		return redirect('Welcome/dashboard');

	}

	public function delet($ci){
		
		$this->form_validation->set_rules('name', 'Nombre','Required');
		$this->form_validation->set_rules('ci', 'CI','Required');
		$this->form_validation->set_rules('fechan', 'Fecha de Nacimiento','Required');
		$this->form_validation->set_rules('deptoc', 'Codigo de Departamento','Required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run()){
			$data =$this->input->post();
			$this->load->model('queries');
			if($this->queries->deletePerson($data)){
				echo 'Persona Eliminada';
			}
			else{
				echo 'Persona no Eliminada';
			}
		}
		else{
			echo validation_errors();
		}
		return redirect('Welcome/dashboard');

	}
	




}
