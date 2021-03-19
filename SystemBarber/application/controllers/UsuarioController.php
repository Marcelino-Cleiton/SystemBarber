<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class UsuarioController extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('BarbeariaModel','Barbearia');
	}

	public function index(){
		$dados['titulo']='Cadastro - Usuário ';
		$result['idBarbearia']=0;
		$result['Fantasia']='Barbearia';
		$this->load->view('Header',$dados);
		$this->load->view('Menu');
		$this->load->view('usuario/cadastroUsuario',$result);
		$this->load->view('usuario/consultaBarbearia');
		$this->load->view('usuario/consultaUsuario');
		$this->load->view('Footer');//método padrão do controller
		if (isset($_POST['consultabarbearia'])) {
			$Barbearia= new BarbeariaModel;
			$idbarbearia=$this->input->post('consultabarbearia');
			$resultado=$Barbearia->trasbarbearia($idbarbearia);
			$result['idBarbearia']=$resultado[0]->idBarbearia;
			$result['Fantasia']=$resultado[0]->Fantasia;
		}


		
	}

	
	public function Alteracaobanco(){
		$Usuarioarray=$this->input->post();
		if(isSet($_POST['botao'])){
			$botao=$Usuarioarray['botao'];
			if($botao=='Cadastrar'){ 
				$this->load->Usuario->cadastrar($Usuarioarray); 
				$botao=null;	}
			if($botao=='Alterarr'){ $this->load->Usuario->alterar($Usuarioarray); $botao=null;     }
			if($botao=='Excluirr'){ $this->load->Usuario->excluir($Usuarioarray); $botao=null;     }		
		}
	}
	public function dados_cliente(){
		
		
			$id_cliente = $this->input->post("idUsuario");
			$consulta = $this->Usuario->trasUsuario($id_Usuario);
		if ($consulta->num_rows() == 0) {
			die("Cliente não encontrado");
		}
		$array_Usuario = array(
		
			"idUsuario" => $consulta->row()->idUsuario,
			"Fantasia" => $consulta->row()->Fantasia,
			"Telefone" => $consulta->row()->Telefome,
			"CNPJ" => $consulta->row()->CNPJ,
			"Ativo" => $consulta->row()->Ativo

			
		);
		echo json_encode($array_Usuario);
		
	}
}
?>
