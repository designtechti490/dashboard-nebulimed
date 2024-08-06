<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Sistema extends CI_Controller {

	public function __construct(){
		parent::__construct();

		
		if (!$this->ion_auth->logged_in())
		{
			$this->session->set_flashdata('info', 'Sua sessão expirou. Faça login novamente!');
			redirect('login');
		}
	  
	}

	public function index(){

		$data = array(
			'titulo' => 'Editar informações do Sistema',
			'scripts' => array(
				'vendor/mask/app.js',
				'vendor/mask/jquery.mask.min.js'
			),
			'sistema' => $this->core_model->get_by_id('sistema', array('sistema_id' => 1)),

		);


		$this->form_validation->set_rules('sistema_razao_social', 'Razão Social', 'required|min_length[10]|max_length[255]');
		$this->form_validation->set_rules('sistema_nome_fantasia', 'Nome Fantasia', 'required|min_length[10]|max_length[255]');
		$this->form_validation->set_rules('sistema_cnpj', 'CNPJ', 'required|exact_length[18]'); 
		$this->form_validation->set_rules('sistema_ie', 'Inscrição Estadual', 'required|max_length[25]'); 
		$this->form_validation->set_rules('sistema_telefone_fixo', 'Telefone Fixo', 'required|min_length[10]|max_length[25]'); 
		$this->form_validation->set_rules('sistema_telefone_movel', 'Celular', 'required|min_length[11]|max_length[25]');
		$this->form_validation->set_rules('sistema_email', 'E-mail', 'required|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('sistema_site_url', 'URL do Site', 'required|min_length[10]|max_length[100]');
		$this->form_validation->set_rules('sistema_cep', 'CEP', 'required|min_length[8]|max_length[25]');
		$this->form_validation->set_rules('sistema_endereco', 'Endereço', 'required|min_length[10]|max_length[145]');
		$this->form_validation->set_rules('sistema_numero', 'Nº', 'required|max_length[25]');
		$this->form_validation->set_rules('sistema_cidade', 'Cidade', 'required|min_length[10]|max_length[45]');
		$this->form_validation->set_rules('sistema_estado', 'Estado', 'required|exact_length[2]');
		$this->form_validation->set_rules('sistema_txt_ordem_servico', 'Texto da Ordem de Serviço', 'required|max_length[500]');

		if ($this->form_validation->run()) {

		// echo '<pre>';
		// print_r($this->input->post());
		// exit();

		$data = elements(
			array(
				'sistema_razao_social',
				'sistema_nome_fantasia',
				'sistema_cnpj',
				'sistema_ie',
				'sistema_telefone_fixo',
				'sistema_telefone_movel',
				'sistema_email',
				'sistema_site_url',
				'sistema_cep',
				'sistema_endereco',
				'sistema_numero',
				'sistema_cidade',
				'sistema_estado',
				'sistema_txt_ordem_servico',
			), $this->input->post()
		);

		$data = html_escape($data);
		
		$this->core_model->update('sistema', $data, array('sistema_id' => 1));

		redirect('sistema');
			
		}else {

			// Erro de validação 
			$this->load->view('layout/header', $data);
			$this->load->view('sistema/index');
			$this->load->view('layout/footer');	
		}

		
		
	}
	
}


?>
