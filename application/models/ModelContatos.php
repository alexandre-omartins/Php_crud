	<?php
	defined('BASEPATH') or exit('No direct script access allowed');
	class ModelContatos extends CI_Model
	{

		public function __construct()
		{
			$this->load->database();
	

		}

		public function cadastrar()
		{
			$dados = array(
				'idcontatos'  => $this->input->post('idcontatos'),
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'cargo' => $this->input->post('cargo'),
				'telcomercial' => $this->input->post('telcomercial'),
				'pagweb'  => $this->input->post('pagweb'),
				'fax' => $this->input->post('fax'),
				'celular' => $this->input->post('celular'),
				'telresidencial' => $this->input->post('telresidencial'),
				'endereco' => $this->input->post('endereco'),
				'cidade' => $this->input->post('cidade'),
				'estado' => $this->input->post('estado'),
				'cep' => $this->input->post('cep'),
				'pais' => $this->input->post('pais'),
				'anotacao' => $this->input->post('anotacao'),
				'empresa' => $this->input->post('empresa'),


			);

			$this->db->insert('contatos', $dados); 
			
		}


		public function listar($id = false)
		{
			if ($id == false) {
				return $this->db->get('contatos')->result_array();
			} else {
				$this->db->where('idcontatos', $id);
				return $this->db->get('contatos')->first_row();
			}
		}

		public function editar()
		{
			$dados = array(

				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'cargo' => $this->input->post('cargo'),
				'telcomercial' => $this->input->post('telcomercial'),
				'pagweb'  => $this->input->post('pagweb'),
				'fax' => $this->input->post('fax'),
				'celular' => $this->input->post('celular'),
				'telresidencial' => $this->input->post('telresidencial'),
				'endereco' => $this->input->post('endereco'),
				'cidade' => $this->input->post('cidade'),
				'estado' => $this->input->post('estado'),
				'cep' => $this->input->post('cep'),
				'pais' => $this->input->post('pais'),
				'anotacao' => $this->input->post('anotacao'),
				'empresa' => $this->input->post('empresa')


			);



			$this->db->where('idcontatos', $this->input->post('id'));
			return $this->db->update('contatos', $dados);
		}

		public function deletar()
		{
				
			$this->db->where('idcontatos', $this->input->post('id'));
			$this->db->delete('contatos');
		}

	/*	public function inserir_comentario()
		{
			$data = array(
				'comentario' => $this->input->post('comentario'),
				'contatos_idcontatos' => $this->input->post('idcontato')

			);
 
			$this->db->insert('comentarios', $data);

		}

		public function remover_comentario()
		{
			$this->db->where('idcomentarios', $this->input->post('idcomentario'));
			$this->db->delete('comentarios');




		}
              */
		

	}
