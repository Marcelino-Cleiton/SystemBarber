<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
		class BarbeariaModel extends CI_Model{
		var $title ='';
		var $content ='';
		var $Date ='';
	
		function __construct(){
			parent::__construct();
				}
		function cadastrar()
		{
		$this->Valornobancovariavel =$_POST['idbarbearia'];
		$this->db->insert('Barbearia',$this);
	
		}
		function alterar()
		{
		$this->Valornobancovariavel =$_POST['idbarbearia'];
		$this->db->update('Barbearias',$this);
}		
		
}