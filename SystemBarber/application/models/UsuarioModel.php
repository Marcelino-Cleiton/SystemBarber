<?phprua
if(!defined('BASEPATH')) exit('No direct script access allowed');
		class UsuarioModel extends CI_Model{

		*/
		function __construct(){
			parent::__construct();
				}
		function cadastrar($Usuarioarray){
				$this->idBarbearia =$_POST['idbarbearia'];
				$this->idUsuario =$_POST['idusuario'];
				$this->Nome =$_POST['nome'];
				$this->Sobrenome =$_POST['sobrenome'];
				$this->CPF =$_POST['CPF'];
				$this->Email =$_POST['email'];
				$this->Senha =$_POST['senha'];
				$this->idCidade =$_POST['cidade'];
				$this->Bairro=$_POST['bairro'];
				$this->Rua =$_POST['rua'];
				$this->Numeroendereco=$_POST['numeroendereco'];
				$this->Numerotelefone=$_POST['numerotelefone'];
				$this->Ativo =$_POST['ativo'];
				$this->Excluido= 'N';
				$this->db->insert('Usuario',$this);
				}
		function alterar($Usuarioarray){
				$this->idBarbearia =$_POST['idbarbearia'];
				$this->idUsuario =$_POST['idusuario'];
				$this->Nome =$_POST['nome'];
				$this->Sobrenome =$_POST['sobrenome'];
				$this->CPF =$_POST['CPF'];
				$this->Email =$_POST['email'];
				$this->Senha =$_POST['senha'];
				$this->idCidade =$_POST['cidade'];
				$this->Bairro=$_POST['bairro'];
				$this->Rua =$_POST['rua'];
				$this->Numeroendereco=$_POST['numeroendereco'];
				$this->Numerotelefone=$_POST['numerotelefone'];
				$this->Ativo =$_POST['ativo'];
				$this->db->update('Usuario',$this);
				}
		function excluir($Usuarioarray){
				$this->idBarbearia =$_POST['idbarbearia'];
				$this->idUsuario =$_POST['idusuario'];
				$this->Nome =$_POST['nome'];
				$this->Sobrenome =$_POST['sobrenome'];
				$this->CPF =$_POST['CPF'];
				$this->Email =$_POST['email'];
				$this->Senha =$_POST['senha'];
				$this->idCidade =$_POST['cidade'];
				$this->Bairro=$_POST['bairro'];
				$this->Rua =$_POST['rua'];
				$this->Numeroendereco=$_POST['numeroendereco'];
				$this->Numerotelefone=$_POST['numerotelefone'];
				$this->Ativo =$_POST['ativo'];
				$this->Excluido= 'S';
				$this->db->update('Usuario',$this);
				}
		function consulta($Usuarioarray){
				$this->idBarbearia =$_POST['idbarbearia'];
				$this->idUsuario =$_POST['idusuario'];
				$this->Nome =$_POST['nome'];
				$this->Sobrenome =$_POST['sobrenome'];
				$this->CPF =$_POST['CPF'];
				$this->Email =$_POST['email'];
				$this->Senha =$_POST['senha'];
				$this->idCidade =$_POST['cidade'];
				$this->Bairro=$_POST['bairro'];
				$this->Rua =$_POST['rua'];
				$this->Numeroendereco=$_POST['numeroendereco'];
				$this->Numerotelefone=$_POST['numerotelefone'];
				$this->Ativo =$_POST['ativo'];
				$this->Excluido= 'N';
				$this->db->select('Usuario',$this);
				}

		public function trasUsuario($id_Usuario = null) {

        if ($id_Usuario != null) {
            $this->db->where("idUsuario", $id_Usuario);
        							}

        $this->db->order_by("ASC");
        return $this->db->get("Usuario");
    								}		
		
}