<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {

		public function __construct(){
			parent::__construct();
			
			if (!$this->ion_auth->logged_in())
			{
				$this->session->set_flashdata('info', 'Sua sessão expirou. Faça login novamente!');
				redirect('login');
			}
		  
		}

		public function index(){

			$this->load->helper('url');

			$this->load->view('layout/header');
			$this->load->view('home/index');
			$this->load->view('layout/footer');

		}

	}

?>
