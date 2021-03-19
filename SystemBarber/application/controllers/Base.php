<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Base extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		//método padrão do controller
	$dados['titulo']='titulo do site ';
	$this->load->view('Header',$dados);
	$this->load->view('Menu');
	$this->load->view('Footer');

	}
}
?>
