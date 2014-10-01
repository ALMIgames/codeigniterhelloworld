<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Simpatic extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->config->load('codeigniterhelloworld');
	}

	public function index()
	{
		$this->grettings('mon');
	}

	public function grettings($name = null){
		$data= array();

		$data['parametre1'] = $name;
		$data['parametre2'] = $this->config->item('academic_period');
		
		$this->load->view('grettings',$data);
	}
}

/* End of simpatic.php */
/* Location: ./application/controllers/simpatic.php */
