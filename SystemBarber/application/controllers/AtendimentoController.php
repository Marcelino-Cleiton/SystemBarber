<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class AtendimentoController extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

		public function index(){
		//método padrão do controller
		$dados['titulo']='Atendimento - Horários ';
		$this->load->view('Header',$dados);
		$this->load->view('Menu');
		$this->load->view('Footer');
		}
		
	}	

?>
