<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct(){
		parent::__construct();

	}

	public function index(){
		date_default_timezone_set('America/Sao_Paulo');
	$mes=13;	
	$mes=$this->uri->segment(3);
	$ano=$this->uri->segment(2);
	if($mes==Null){
		$mes=date('m');
		$ano=date('Y');
				}
		$data = array(
    1	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/01-'.$mes.'-'.$ano,
    2	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/02-'.$mes.'-'.$ano,
    3	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/03-'.$mes.'-'.$ano,
    4	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/04-'.$mes.'-'.$ano,
    5	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/05-'.$mes.'-'.$ano,
    6	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/06-'.$mes.'-'.$ano,
    7	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/07-'.$mes.'-'.$ano,
    8	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/08-'.$mes.'-'.$ano,
    9	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/09-'.$mes.'-'.$ano,
    10	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/10-'.$mes.'-'.$ano,
    11	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/11-'.$mes.'-'.$ano,
    12	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/12-'.$mes.'-'.$ano,
    13	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/13-'.$mes.'-'.$ano,
    14	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/14-'.$mes.'-'.$ano,
    15	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/15-'.$mes.'-'.$ano,
    16	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/16-'.$mes.'-'.$ano,
    17	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/17-'.$mes.'-'.$ano,
    18	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/18-'.$mes.'-'.$ano,
    19	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/19-'.$mes.'-'.$ano,
    20	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/20-'.$mes.'-'.$ano,
    21	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/21-'.$mes.'-'.$ano,
    22	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/22-'.$mes.'-'.$ano,
    23	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/23-'.$mes.'-'.$ano,
    24	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/24-'.$mes.'-'.$ano,
    25	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/25-'.$mes.'-'.$ano,
    26	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/26-'.$mes.'-'.$ano,
	27	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/27-'.$mes.'-'.$ano,
	28	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/28-'.$mes.'-'.$ano,
	29	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/29-'.$mes.'-'.$ano,
	30	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/30-'.$mes.'-'.$ano,
	31	=> 'http://localhost/projetos/Dropbox/SystemBarber/Atendimento/31-'.$mes.'-'.$ano);
		$prefs  =  array ( 
        'start_day'       =>  'sunday' , 
        'month_type'      =>  'long' , 
        'day_type'        =>  'long',
        'show_other_days' =>  'True',
        '' );

        $prefs= array(
        		'show_next_prev'  => TRUE,
        		'next_prev_url'   => 'http://localhost/projetos/Dropbox/SystemBarber/Inicio/',	
				'template' 		  => '{table_open}<table border="3" cellpadding="34" cellspacing="0">{/table_open}
				{heading_row_start}<tr>{/heading_row_start}
				{heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   				{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   				{heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
				{heading_row_end}</tr>{/heading_row_end}
				{week_row_start}<tr>{/week_row_start}
				{week_day_cell}<td>{week_day}</td>{/week_day_cell}
				{week_row_end}</tr>{/week_row_end}
				{cal_row_start}<tr>{/cal_row_start}
				{cal_cell_start}<td>{/cal_cell_start}{cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
				{cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}
				{cal_cell_no_content}{day}{/cal_cell_no_content}
				{cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}
				{cal_cell_blank}&nbsp;{/cal_cell_blank}
				{cal_cell_end}</td>{/cal_cell_end}
				{cal_row_end}</tr>{/cal_row_end}
				{table_close}</table>{/table_close}');        				
 
			$this->load->library('calendar',$prefs);

			$calendario = array (	'ano' =>$ano,
									'mes' =>$mes,
									'data'=>$data);

		$dados['titulo']='Sistem Barber - Agenda online para barbeiros';
		$this->load->view('Header',$dados);
		$this->load->view('Menu');
		$this->load->view('Inicio',$calendario);
		$this->load->view('Footer');

	
	}

}
