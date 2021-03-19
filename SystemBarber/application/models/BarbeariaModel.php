<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
		class BarbeariaModel extends CI_Model{
			
			
	
		function __construct(){
			parent::__construct();
				}
		function cadastrar($barbeariaarray){

				$this->Fantasia = $barbeariaarray['fantasia'];
				$this->Telefone = $barbeariaarray['telefone'];
				$this->CNPJ = $barbeariaarray['cnpj'];
				$this->Ativo = $barbeariaarray['ativo'];
				$this->Excluido= 'N';
				$this->db->insert('Barbearia',$this);
				

				}
		function alterar($barbeariaarray){
				$idBarbearia =$barbeariaarray['idbarbearia'];
				$data=  array(
					'Fantasia' => $barbeariaarray['fantasia'],
					'Telefone' =>$barbeariaarray['telefone'],
					'CNPJ' =>$barbeariaarray['cnpj'] ,
					'Ativo' =>$barbeariaarray['ativo'] ,
					'Excluido' => 'N');
				
				$this->db->where('idBarbearia',$idBarbearia);
				$this->db->update('Barbearia',$data);
				}

		function excluir($barbeariaarray){
				$idBarbearia =$barbeariaarray['idbarbearia'];
				$data=  array(
					'Fantasia' => $barbeariaarray['fantasia'],
					'Telefone' =>$barbeariaarray['telefone'],
					'CNPJ' =>$barbeariaarray['cnpj'] ,
					'Ativo' =>$barbeariaarray['ativo'] ,
					'Excluido' => 'S');
				$this->db->where('idBarbearia',$idBarbearia);
				$this->db->update('Barbearia',$data);
				}
		function consulta($Fantasia){
				
				$this->db->select('*');
				$this->db->from('Barbearia');
				$this->db->like('Fantasia',$Fantasia);
				$this->db->order_by('Fantasia', 'ASC');
				$query = $this->db->get()->result();

				return $query;
				}


		public function trasbarbearia($idbarbearia) {
			$this->db->select('*');
        	$this->db->from('Barbearia');
            $this->db->where('idBarbearia', $idbarbearia);
        	$query = $this->db->get()->result();
			return $query;
    								}	

}