<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contatos extends CI_Controller
{

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		$this->load->model('ModelContatos');
		$this->load->library('form_validation');
		$this->load->library('pagination');

	}

	public function inserir()
	{
		$this->ModelContatos->cadastrar();
		redirect('contatos/listar');
	}

	public function deletar()
	{
		$this->ModelContatos->deletar();
		redirect('contatos/listar');
	}


	public function editar($id = false)
	{
		if ($id != false) {

			$dados = array(
				'contatos' => $this->ModelContatos->listar($id)

			);

			$this->load->view('templates/header');
			$this->load->view('editar', $dados);
			$this->load->view('templates/footer');
		} else {

			redirect('contatos/listar');
		}
	}

	public function update()
	{	
		$this->form_validation->set_rules('nome', 'Nome', 'required|maxlength[45]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique');
		$this->form_validation->set_rules('celular', 'Celular', 'max_length[12]');
		$this->form_validation->set_rules('telresidencial', 'TelResidencial', 'required|max_length[15]');
		$this->form_validation->set_rules('telcomercial', 'TelComercial', 'max_length[15]');
		$this->form_validation->set_rules('cep', 'CEP', 'max_length[10]');
		$this->form_validation->set_rules('fax', 'Fax', 'max_length[15]');
		 
		if($this->form_validation == true){

			$this->ModelContatos->editar();
		
			redirect('contatos/visualizar/' . $this->input->post('id'));

		}else{

			redirect('cadastrar');

		}
		 
		
	}


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/footer');
	}



	public function listar()
	{
		$dados = array(
			'contatos' => $this->ModelContatos->listar()
		);
		$this->load->view('templates/header');
		$this->load->view('contatos', $dados);
		$this->load->view('templates/footer');
	}

	public function visualizar($id = false)
	{
		$dados = array(
			'contatos' => $this->ModelContatos->listar($id)
		);
		$this->load->view('templates/header');
		$this->load->view('visualizar', $dados);
		$this->load->view('templates/footer');
	}


	public function cadastrar()
	{
		

		$this->form_validation->set_rules('nome', 'Nome', 'required|maxlength[45]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique');
		$this->form_validation->set_rules('celular', 'Celular', 'max_length[12]');
		$this->form_validation->set_rules('telresidencial', 'TelResidencial', 'required|max_length[15]');
		$this->form_validation->set_rules('telcomercial', 'TelComercial', 'max_length[15]');
		$this->form_validation->set_rules('cep', 'CEP', 'max_length[10]');
		$this->form_validation->set_rules('fax', 'Fax', 'max_length[15]');


	  
		if($this->form_validation->run() == true ){
		$this->ModelContatos->cadastrar();
	
		} else {
			$this->load->view('templates/header');
			$this->load->view('cadastrar');
			$this->load->view('templates/footer');
		}




	}

	public function inserir_comentario(){

		$this->form_validation->set_rules('idcontato', 'ID', 'required|integer');
		$this->form_validation->set_rules('comentario', 'Comentario', 'required|max_length[300]');



		if($this->form_validation->run() ){
		 $this->ModelContatos->inserir_comentario();
		 redirect('contatos/visualizar/' .$this->input->post('idcontato'));
	} else {

		redirect('');
	}	
}

public function remover_comentario(){

	$this->form_validation->set_rules('idcontato', 'ID', 'required|integer');
 
	if($this->form_validation->run() ){
	$this->ModelContatos->remover_comentario();
	redirect('contatos/visualizar/' .$this->input->post('idcontato'));
	



	}

}




}

