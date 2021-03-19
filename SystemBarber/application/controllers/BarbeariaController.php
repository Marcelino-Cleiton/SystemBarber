<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class BarbeariaController extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('BarbeariaModel','Barbearia');
	}


	public function index(){
		$dados['titulo']='Cadastro - Barbearia ';
		$this->load->view('Header',$dados);
		$this->load->view('Menu');
		$this->load->view('barbearia/cadastroBarbearia');
		$this->load->view('barbearia/consultaBarbearia');
		$this->load->view('Footer');//método padrão do controller

		


	}
	public function dados_Barbearia(){
		
		$Fantasia = $this->input->post('fantasia');	
		$result=$this->Barbearia->consulta($Fantasia);
		if($result==null){
			$result='erro404';

		}

				echo json_encode($result);
				
			
		
			
		}
	public function Alteracaobanco(){
			
			$Barbearia= new BarbeariaModel;
			$barbeariaarray=$this->input->post();
			$botao=$barbeariaarray['botao'];
			if($botao=='Cadastrar'){ 
				$Barbearia->cadastrar($barbeariaarray); 
				$botao=null;
				unset($barbeariaarray);
				redirect('Barbearia/Cadastro');
				
			}
			if($botao=='Alterar'){ 
				$Barbearia->alterar($barbeariaarray); 
				$botao=null;
				unset($barbeariaarray);
				redirect('Barbearia/Cadastro'); 
			}
			if($botao=='Excluir'){ 
				$Barbearia->excluir($barbeariaarray); 
				$botao=null;
				unset($barbeariaarray);
				redirect('Barbearia/Cadastro'); 
				    
			}		
		
		
	}
	public function AlterarBarbearia(){
			$idbarbearia=$this->input->post('consultafantasia');
			$Barbearia= new BarbeariaModel;
			$resultado=$Barbearia->trasbarbearia($idbarbearia);
			$dados['titulo']='Alterar - Barbearia ';
			$result['idBarbearia']=$resultado[0]->idBarbearia;
			$result['Fantasia']=$resultado[0]->Fantasia;
			$result['Telefone']=$resultado[0]->Telefone;
			$result['CNPJ']=$resultado[0]->CNPJ;
			$result['Ativo']=$resultado[0]->Ativo;
			$result['Excluido']=$resultado[0]->Excluido;

			$this->load->view('Header',$dados);
			$this->load->view('Menu');
			$this->load->view('barbearia/alterarBarbearia',$result);
			$this->load->view('barbearia/consultaBarbearia');
			$this->load->view('Footer');//método padrão do controller
	}
	}
?>
