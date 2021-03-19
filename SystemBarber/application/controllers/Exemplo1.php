
<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$dados
		$this->load->view('exemplo1');
		
	}
	public function login(){
		echo'Executado o método login do controller e passado o parametro';
		echo $this->uri->segment(3);
	}
}
?>
