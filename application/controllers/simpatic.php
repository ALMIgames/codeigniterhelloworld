<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->config->load('codeigniterhelloworld');
		$this->load->helper('url');
	}

	public function index(){
		$this->grettings('mon');
	}

	public function form_example(){
		$data= array();
		if ( isset ($_POST)){
			$data['firstname'] = $this->input->get_post("firstname");
			$data['lastname'] = $this->input->get_post("lastname");
		}
			
			$this->load->view('form_example',$data);
	}
 
	public function grettings($name = null){
		$data= array();

		$data['parametre1'] = $name;
		$data['parametre2'] = $this->config->item('academic_period');
		
		$this->load->view('grettings',$data);
	}

	public function grettings2(){

		$data=array();
		$nom=$this->input->get_post('nom');
		print_r('Hola '.$nom);
	}

}

/* End of simpatic.php */
/* Location: ./application/controllers/simpatic.php */
